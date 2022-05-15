<?php

namespace vetgrad;

class Router
{
	protected static $routes = [];
	protected static $route = [];

	public static function add($regexp, $route = [])
	{
		self::$routes[$regexp] = $route;
	}

	public static function getRoutes(): array
	{
		return self::$routes;
	}

	public static function getRoute(): array
	{
		return self::$route;
	}

	public static function dispatch($url)
	{
		$url = self::removeQueryString($url);
		if (self::matchRoute($url)) {
			$controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
			if (class_exists($controller)) {
				$controllerObject = new $controller(self::$route);
				$action = self::lowerCamelCase(self::$route['action']) . 'Action';
				if (method_exists($controllerObject, $action)) {
					$controllerObject->$action();
					$controllerObject->getView();
				}else {
					throw new \Exception("Метод $controller::$action не найден", 404);
				}
			}else {
				throw new \Exception("Контроллер $controller не найден", 404);
			}
		}else {
			throw new \Exception("Страница не найдена", 404);
		}
	}

	public static function matchRoute($url): bool
	{
		foreach (self::$routes as $pattern => $route) {
			if (preg_match("#{$pattern}#i", $url, $matches)) {
				foreach ($matches as $key => $value) {
					if (is_string($key)) {
						$route[$key] = $value;
					}
				}
				if (empty($route['action'])) {
					$route['action'] = 'index';
				}
				if (!isset($route['prefix'])) {
					$route['prefix'] = '';
				}else {
					$route['prefix'] .= '\\';
				}
				$route['controller'] = self::upperCamelCase($route['controller']);
				self::$route = $route;
//				debug(self::$route);
				return true;
			}
		}
		return false;
	}

	//CamelCase - для имён controllers
	protected static function upperCamelCase($name)
	{
		$name = ucwords(str_replace('-', ' ', $name));
		return str_replace(' ', '', $name);
	}

	//camelCase - для имён actions
	protected static function lowerCamelCase($name): string
	{
		return lcfirst(self::upperCamelCase($name));
	}

	protected static function removeQueryString($url)
	{
		if ($url) {
			$params = explode('&', $url, 2);
			if (strpos($params[0], '=') === false) {
				return rtrim($params[0], '/');
			}

			return '';
		}
	}
}