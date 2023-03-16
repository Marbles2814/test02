<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/header')
            .view('templates/navbarB')
            .view('templates/Welcome')
            .view('templates/Welcome2')
//            . view('flights/index')
            . view('templates/footer');
    }
    public function login(){
       return view('templates/header')
          .view('templates/navbarW')
          .view('templates/loginBod')
          .view('templates/footer');
}
    public function register(){
        return view('templates/header')
           .view('templates/navbarW')
           .view('templates/registerBod')
           .view('templates/footer');
}
    public function vacation(){
        return view('templates/header')
           .view('templates/navbarB')
           .view('templates/vacation')
           .view('templates/footer');
}
}
