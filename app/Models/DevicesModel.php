<?php

namespace App\Models;

use CodeIgniter\Model;

class DevicesModel extends Model
{
    protected $table = 'devices';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['device_name', 'device_brand', 'device_quantity', 'device_status'];
}
