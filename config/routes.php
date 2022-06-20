<?php

use vetgrad\Router;

Router::add('^doctors/doctor-info/(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Doctors', 'action' => 'doctor-info']);
Router::add('^doctors/?$', ['controller' => 'Doctors', 'action' => 'view']);

Router::add('^services/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Services', 'action' => 'view']);

//default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');