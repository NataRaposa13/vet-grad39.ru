<?php

namespace app\controllers;

use RedBeanPHP\R as R;
use vetgrad\App;

class ServicesController extends AppController
{
	public function viewAction()
	{
		$serviceTypes = R::find( 'ServiceType');

		$this->set(compact('serviceTypes'));
	}
}