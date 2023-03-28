<?php

namespace App\Controllers;
use App\Models\BlazeModel;
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
           .view('flights/create')
           .view('templates/footer');
}
    public function vacation(){
        return view('templates/header')
           .view('templates/navbarB')
           .view('templates/vacation')
           .view('templates/footer');
}
    public function reserve()
    {
        return view('templates/header')
            .view('templates/navbarB')
            .view('templates/reserve')
            .view('templates/footer');
}
    public function purchase()
    {
        return view('templates/header')
            .view('templates/navbarB')
            .view('templates/purchase')
            . view('templates/footer');
}
    public function resetpassword()
    {
        return view('templates/header')
            .view('templates/navbarB')
            .view('templates/resetpassword')
            . view('templates/footer');
}
    public function confirmation(){
       return view('templates/header')
          .view('templates/navbarB')
          .view('templates/confirmation')
          .view('templates/footer');
}
    }
