<?php

namespace App\Controllers;
use App\Models\BlazeModel;
use App\Models\UsersModel;
use App\Models\ReservesModel;
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
   public function flights()
    {
        $model = model(BlazeModel::class);
        $D =  $this->input->post("fromPort");
        $A =  $this->input->post("toPort");
        $data = [
            'flights'  => $model->getFlightsQ($D, $A),
            'title' => 'Number of flight',
        ];
        return view('templates/header')
            .view('templates/navbarB')
            . view('flights/flights',$data)
            . view('templates/footer');
    }
    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header')
                .view('templates/navbarW')
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
            return view('templates/header')
                .view('templates/navbarW')
                . view('flights/create')
                . view('templates/footer');
        }

        $model = model(UsersModel::class);

        $model->save([
            'Name' => $post['Name'],
            'Company'  => $post['Company'],
            'Email' => $post['Email'],
            'Password'  => $post['Password'],
        ]);

        return view('templates/header')
            .view('templates/navbarW')
            . view('flights/success')
            . view('templates/footer');
    }
     public function reserve()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header')
                .view('templates/navbarB', ['title' => 'Create user'])
                . view('flights/reserve')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['Name', 'Address','City','State','ZipCode','CardType','CreditCard','Month','Year','CardName']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'Name' => 'required|max_length[255]|min_length[3]',
            'Address'  => 'required|max_length[255]|min_length[3]',
            'City' => 'required|max_length[255]|min_length[3]',
            'State'  => 'required|max_length[255]|min_length[3]',
            'ZipCode' => 'required|max_length[255]|min_length[5]',
            'CardType'  => 'required|max_length[255]|min_length[3]',
            'CreditCard' => 'required|max_length[255]|min_length[3]',
            'Month'  => 'required|max_length[2]|min_length[1]',
            'Year' => 'required|max_length[4]|min_length[4]',
            'CardName'  => 'required|max_length[255]|min_length[3]',        
])) {
            // The validation fails, so returns the form.
            return view('templates/header')
                .view('templates/navbarB')
                . view('flights/reserve')
                . view('templates/footer');
        }

        $model = model(ReservesModel::class);

        $model->save([
            'Name' => $post['Name'],
            'Address' => $post['Address'],
            'City' => $post['City'],
            'State'  => $post['State'],
            'ZipCode' => $post['ZipCode'],
            'CardType'  => $post['CardType'],
            'CreditCard' => $post['CreditCard'],
            'Month'  => $post['Month'],
            'Year' => $post['Year'],
            'CardName'  => $post['CardName'],
            
        ]);

        return view('templates/header')
            .view('templates/navbarB')
            . view('templates/confirmation')
            . view('templates/footer');
    }
    }
