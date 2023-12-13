<?php

namespace App\Models;

use CodeIgniter\Model;

class YearModel extends Model
{
    protected $table = 'years'; 
    protected $returnType     = 'object';

    public function getYears()
    {
        return $this->findAll();
    }
}