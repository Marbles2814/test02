<?php
 
namespace App\Models;

use CodeIgniter\Model;

class BlazeModel extends Model
{
    protected $table = 'flights';

    public function getFlights($id = false)
    {

	if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();

    }
    
    public function  getFlightsQ(){
       $db = db_connect();
       return $db->query('SELECT * FROM flights WHERE DepartC = "Paris" AND ArriveC = "Buenos Aires"');
          }

}
