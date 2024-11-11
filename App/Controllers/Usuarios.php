<?php
require_once '../App/Libraries/Controller.php';

class Usuarios extends Controller {
    public function login() {
        $this->view('login');
    }

    public function cadastro() {
        $this->view('cadastro');
    }

    public function home() {
        $this->view('home');
    }
}
