<?php
require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';

// Charger le routeur
$router = new Router();
$router->dispatch();
