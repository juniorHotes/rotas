<?php
namespace app\controllers;

class ContactController {

    public function index(array $params) {
        return Controller::view('contact');
    }

    public function store(array $params) {
        return Controller::view('contact', $params);
    }
}