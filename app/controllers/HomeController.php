<?php
class HomeController extends Controller {
    public function index() {
        $userModel = $this->loadModel('User');
        $users = $userModel->getUsers();
        $this->loadView('home', ['users' => $users]);
    }
}