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

    public function resetpassword()
    {
        return view('templates/header')
            .view('templates/navbarB')
            .view('templates/resetpassword')
            . view('templates/footer');
}
    public function confirmation(){
        $model = model(ReservesModel::class);
        $CardNumber =  $_POST['cardNumber'];
        $Rand1 = $_POST['Rand1'];
        $Rand2 = $_POST['Rand2'];
        $Month = $_POST['Month'];
        $Year = $_POST['Year'];
        $Price = $_POST['Price'];
        $data = [
            'CardNumber' => $CardNumber,
            'Id'  => $model->getId($Rand1, $Rand2),
            'Month' => $Month,
            'Year' => $Year,
            'Price' => $Price,
        ];
var_dump($_POST);
       return view('templates/header')
          .view('templates/navbarB')
          .view('templates/confirmation', $data)
          .view('templates/footer');
}
   public function flights()
    {
        $model = model(BlazeModel::class);
        $D =  $_POST['fromPort'];
        $A =  $_POST['toPort'];
        $data = [
            'flights'  => $model->getFlightsQ($D, $A),
            'from' => $D,
            'to' => $A
        ];
var_dump($_POST);
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
            'Email' => 'required|max_length[255]|min_length[3]|is_unique[users.Email]',
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
        $D = $_POST['fromPort'];
        $A =  $_POST['toPort'];
        $FlightNum =  $_POST['FlightNum'];
        $Airline =  $_POST['Airline'];
        $Price =  $_POST['Price'];
        $Flag = $_POST['Flag'];
        $data = [
            'from' => $D,
            'to' => $A,
	    'FlightNum' => $FlightNum,
            'Airline' => $Airline,
            'Price' => $Price,
            'Flag' => $Flag
       ];

        // Checks whether the form is submitted.

         if ($Flag==0) {
        // The form is not submitted, so returns the form.
            return view('templates/header')
                .view('templates/navbarB', ['title' => 'Create user'])
                . view('flights/reserve', $data)
                . view('templates/footer');
        }

        $post = $this->request->getPost(['Name', 'Address','City','State','ZipCode','CardType','CreditCard','Month','Year','CardName', 'Rand1', 'Rand2']);

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
                . view('flights/reserve',$data)
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
            'Rand1' => $post['Rand1'],
            'Rand2' => $post['Rand2'],
        ]);

     return view('templates/header')
            .view('templates/navbarB')
            .view('flights/success')
           .view('templates/footer');
    }
    }
