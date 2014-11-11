<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass('teacherstore', 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
  'classname' => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
  'dsn' => 'mysql:host=localhost;dbname=teacherstore',
  'user' => 'root',
  'password' => 'password',
));
$manager->setName('teacherstore');
$serviceContainer->setConnectionManager('teacherstore', $manager);
$serviceContainer->setDefaultDatasource('teacherstore');