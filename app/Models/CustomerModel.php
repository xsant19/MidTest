<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = "customer";
    protected $primaryKey = "id_customer";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_customer', 'name', 'email', 'phone', 'website', 'country', 'city', 'zipcode'];
}
