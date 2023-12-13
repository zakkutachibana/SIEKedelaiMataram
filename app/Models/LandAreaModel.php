<?php

namespace App\Models;

use CodeIgniter\Model;

class LandAreaModel extends Model
{
    protected $table = 'land_area_total';

    public function getLandAreas()
    {
        $data = $this->select('*')
            ->join('years', 'land_area_total.year_id = years.year_id', 'inner');
        return $data->get()->getResultObject();
    }

    public function getLandAreasBySubdistrict($subDistrictId)
    {
        $data = $this->select('*')
            ->join('years', 'land_area_total.year_id = years.year_id', 'inner')
            ->join('land_area_details', 'land_area_total.land_area_id = land_area_details.land_area_id', 'inner')
            ->join('sub_districts', 'land_area_details.sub_district_id = sub_districts.sub_district_id', 'inner')
            ->where('sub_districts.sub_district_id', $subDistrictId);

        return $data->get()->getResultArray();
    }
}
