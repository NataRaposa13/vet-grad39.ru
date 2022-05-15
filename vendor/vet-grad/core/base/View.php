<?php

namespace vetgrad\base;

class View
{
	public $route;
	public $controller;
	public $view;
	public $model;
	public $prefix;
	public $layout;
	public $data = [];
	public $meta = [];

	public function __construct($route, $meta, $layout = '', $view = '')
	{
		$this->route = $route;
		$this->controller = $route['controller'];
		$this->view = $view;
		$this->prefix = $route['prefix'];
		$this->model = $route['controller'];
		$this->meta = $meta;
		if($layout === false) {
			$this->layout = false;
		}else {
			$this->layout = $layout ?: LAYOUT;
		}
	}

	public function render($data)
	{
		if(is_array($data)) {
			extract($data);
		}
		$viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
		if (is_file($viewFile)) {
			ob_start();
			require_once $viewFile;
			$content = ob_get_clean();
		}else {
			throw new \Exception("Вид {$viewFile} не найден", 500);
		}
		if($this->layout !== false) {
			$layoutFile = APP . "/views/layouts/{$this->layout}.php";
			if (is_file($layoutFile)) {
				require_once $layoutFile;
			}else {
				throw new \Exception("Шаблон {$this->layout} не найден", 500);
			}
		} else {
			echo $content;
		}
	}

	public function getMeta(): string
	{
		$output = '<title>' .  $this->meta['title'] . '</title>' . PHP_EOL;
		$output .= '<meta name="description" content="' . $this->meta['desc'] . '">' . PHP_EOL;
		$output .= '<meta name="keywords" content="' . $this->meta['keywords'] . '">' . PHP_EOL;
		return $output;
	}
}