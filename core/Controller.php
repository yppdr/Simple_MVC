<?php
class Controller {
    public function loadModel($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function loadView($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}