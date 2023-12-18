<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductivityModel extends Model
{
    protected $table = 'productivity_total'; 

    public function getProductivities()
    {
        $data = $this->select('*')
        ->join('years','productivity_total.year_id = years.year_id', 'inner');
        return $data->get()->getResultObject();
    }

    public function getProductivitiesBySubdistrict($subDistrictId)
    {
        $data = $this->select('*')
            ->join('years', 'productivity_total.year_id = years.year_id', 'inner')
            ->join('productivity_details', 'productivity_total.productivity_id = productivity_details.productivity_id', 'inner')
            ->join('sub_districts', 'productivity_details.sub_district_id = sub_districts.sub_district_id', 'inner')
            ->where('sub_districts.sub_district_id', $subDistrictId);
            
        return $data->get()->getResultArray();
    }

    public function getProductivityTotalByYear($year)
    {
        $data = $this->select('*')
            ->join('years', 'productivity_total.year_id = years.year_id', 'inner')
            ->where('years.year', $year);
            
            return $data->get()->getFirstRow();
        }


}