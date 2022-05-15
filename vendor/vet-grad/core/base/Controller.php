<?php

namespace vetgrad\base;

abstract class Controller
{
	public $route;
	public $controller;
	public $view;
	public $model;
	public $prefix;
	public $layout;
	public $data = [];
	public $meta = ['title' => '', 'desc' => '', 'keywords' => ''];

	public function __construct($route)
	{
		$this->route = $route;
		$this->controller = $route['controller'];
		$this->view = $route['action'];
		$this->prefix = $route['prefix'];
		$this->model = $route['controller'];
	}

	public function getView()
	{
		$viewObject = new View($this->route, $this->meta, $this->layout, $this->view);
		$viewObject->render($this->data);
	}

	public function set($data)
	{
		$this->data = $data;
	}

	public function setMeta($title = '', $desc = '', $keywords = '')
	{
		$this->meta['title'] = $title;
		$this->meta['desc'] = $desc;
		$this->meta['keywords'] = $keywords;
	}

	public function isAjax(): bool
	{
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
	}

	public function loadView($view, $vars = [])
	{
		extract($vars);
		require APP . "/views/{$this->prefix}{$this->controller}/{$view}.php";
		die;
	}
}