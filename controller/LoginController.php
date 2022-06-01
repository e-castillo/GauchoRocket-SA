<?php

class LoginController {
    private $printer;

    public function __construct($printer) {
        $this->printer = $printer;
    }

    public function execute() {
        $this->printer->generateView('LoginView.html');
    }
}