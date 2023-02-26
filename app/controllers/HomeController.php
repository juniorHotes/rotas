<?php
namespace app\controllers;

class HomeController {

    public function index(array $params) {
        return Controller::view('home');
    }
}