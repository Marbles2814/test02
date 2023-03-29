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
    
    public function  getFlightsQ($D , $A ){
       $db = db_connect();
       $sql="SELECT * FROM flights WHERE DepartC = ? AND ArriveC = ?";
       return $db->query($sql, array ($D, $A));
   }

}
