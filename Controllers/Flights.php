<?php

namespace App\Controllers;

use App\Models\BlazeModel;

class Flights extends BaseController
{
                                 
    public function __construct()
	{
		$this->db = \Config\Database::connect();
	}
                                              
    public function index()
    {
         $model = model(BlazeModel::class);

        $data = [
            'flights'  => $model->getFlights(),
            'title' => 'Number of flight',
        ];

        return view('templates/header', $data)
            .view('templates/navbarB')
            . view('flights/index',$data)
            . view('templates/footer');
    }


                            
public function viewflights()
{
    $this->load->model('BlazeModel');
    $data['flights'] = $this->BlazeModel->getflights();   
    $this->load->view('flights/index', $data);
}
                           
    public function view($id = null)
    {
        $model = model(BlazeModel::class);

        $data['flights'] = $model->getFlights($id);

        if (empty($data['flights'])) {
            throw new PageNotFoundException('Cannot find the flight item: ' . $id);
        }

        $data['Airline'] = $data['flights']['Airline'];

        return view('templates/header', $data)
            . view('flights/view')
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

    public function reserve()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create user'])
                . view('flights/reserve')
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
                . view('flights/reserve')
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
