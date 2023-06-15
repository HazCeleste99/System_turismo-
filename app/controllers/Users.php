<?php

class Users extends Controller
{

    public function index()
    {
        $this->view('users/login');
    }

    public function registro() {

        $this->view('users/registro');
    
    }
}