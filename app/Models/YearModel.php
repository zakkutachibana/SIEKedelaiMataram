<?php

namespace App\Models;

use CodeIgniter\Model;

class YearModel extends Model
{
    protected $table = 'years'; 

    public function getYears()
    {
        $data = $this->select('*');

        return $data->get()->getResultObject();
    }
}