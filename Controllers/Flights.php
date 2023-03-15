<?php

namespace App\Controllers;

use App\Models\BlazeModel;

class Flights extends BaseController
{
    public function index()
    {
         $model = model(BlazeModel::class);

        $data = [
            'flights'  => $model->getFlights(),
            'title' => 'Number of flight',
        ];

        return view('templates/header', $data)
            .view('templates/Welcome')
            .view('templates/Welcome2')
            . view('flights/index')
            . view('templates/footer');
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
}
