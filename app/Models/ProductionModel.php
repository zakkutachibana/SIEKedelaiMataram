<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductionModel extends Model
{
    protected $table = 'production_total'; 

    public function getProductions()
    {
        $data = $this->select('*')
        ->join('years','production_total.year_id = years.year_id', 'inner');
        return $data->get()->getResultObject();
    }

    public function getProductionsBySubdistrict($subDistrictId)
    {
        $data = $this->select('*')
            ->join('years', 'production_total.year_id = years.year_id', 'inner')
            ->join('production_details', 'production_total.production_id = production_details.production_id', 'inner')
            ->join('sub_districts', 'production_details.sub_district_id = sub_districts.sub_district_id', 'inner')
            ->where('sub_districts.sub_district_id', $subDistrictId);
            
        return $data->get()->getResultArray();
    }
}