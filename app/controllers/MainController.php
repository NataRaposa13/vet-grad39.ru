<?php

namespace app\controllers;

use vetgrad\App;
use RedBeanPHP\R as R;

class MainController extends AppController
{
	public function indexAction()
	{
		$serviceTypes = R::find( 'ServiceType');

		$this->setMeta(App::$app->getProperty('website_name'));
		$this->set(compact('serviceTypes'));
	}
}