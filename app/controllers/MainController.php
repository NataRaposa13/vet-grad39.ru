<?php

namespace app\controllers;

use vetgrad\App;

class MainController extends AppController
{
	public function indexAction()
	{
		$this->setMeta(App::$app->getProperty('website_name'));
	}
}