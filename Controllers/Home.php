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
public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create user'])
                . view('flights/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['Name', 'Company','Email','Password']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'Name' => 'required|max_length[255]|min_length[3]',
            'Company'  => 'required|max_length[255]|min_length[3]',
            'Email' => 'required|max_length[255]|min_length[3]',
            'Password'  => 'required|max_length[255]|min_length[3]',        
])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create user'])
                . view('flights/create')
                . view('templates/footer');
        }

        $model = model(BlazeModel::class);

        $model->save([
            'Name' => $post['Name'],
            'Company'  => $post['Company'],
            'Email' => $post['Email'],
            'Password'  => $post['Password'],
        ]);

        return view('templates/header', ['title' => 'Create user'])
            . view('flights/success')
            . view('templates/footer');
    }
    }
