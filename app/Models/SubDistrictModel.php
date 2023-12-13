<?php

namespace App\Models;

use CodeIgniter\Model;

class SubDistrictModel extends Model
{
    protected $table = 'sub_districts'; 

    public function getSubDistricts()
    {
        return $this->findAll();
    }
}