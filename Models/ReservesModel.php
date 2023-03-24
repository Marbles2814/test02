<?php
 
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'reserves';
    protected $allowedFields = ['Name', 'Address', 'City', 'State','ZipCode','CardType','CreditCard','Month','Year', 'CardName'];


}
