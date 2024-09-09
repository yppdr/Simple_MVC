<?php
class Router {
    public function dispatch() {
        $url = isset($_GET['url']) ? $_GET['url'] : 'home/index';
        $url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));

        $controllerName = ucfirst($url[0]) . 'Controller';
        $methodName = isset($url[1]) ? $url[1] : 'index';

        if (file_exists('../app/controllers/' . $controllerName . '.php')) {
            require_once '../app/controllers/' . $controllerName . '.php';
            $controller = new $controllerName;

            if (method_exists($controller, $methodName)) {
                call_user_func_array([$controller, $methodName], array_slice($url, 2));
            } else {
                echo "Method $methodName not found in controller $controllerName";
            }
        } else {
            echo "Controller $controllerName not found";
        }
    }
}