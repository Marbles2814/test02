<?php
 
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'reserves';
    protected $allowedFields = ['Name', 'Address', 'City', 'State','ZipCode','CardType','CreditCard','Month','Year', 'CardName', 'Rand1', 'Rand2'];
    
    public function  getId($D , $A ){
       $db = db_connect();
       $sql="SELECT Id FROM reserves WHERE Rand1 = ? AND Rand2 = ?";
       return $db->query($sql, array ($D, $A));
   }

}
