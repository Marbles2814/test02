<?php
 
namespace App\Models;

use CodeIgniter\Model;

class BlazeModel extends Model
{
    protected $table = 'flights';
//    protected $table = 'users';
    protected $allowedFields = ['Name', 'Company', 'Email', 'Password'];

    public function getFlights($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
