<?php

require_once __DIR__ . '/autoload.php';

$controllerName = !empty($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = !empty($_GET['action']) ? ucfirst($_GET['action']) : 'Index';
$controllerClass = 'Controllers\\' . $controllerName . 'Controller';
$actionMethod = 'action' . $actionName;

$controllerObject = new $controllerClass;
$controllerObject->$actionMethod();
