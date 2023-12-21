<?php

namespace App\Controllers;

use App\Models\LandAreaModel;

class Drilldown extends BaseController
{
    public function index()
    {
        $landAreaModel = new LandAreaModel();
        $landAreaSum = $landAreaModel->getLandAreaSumBySubDistrict();
        $drilldownData = [];
        foreach ($landAreaSum as $row) {
            $drilldown = $landAreaModel->getDrilldownData($row['sub_district_name']);
            $drilldownData[] = [
                'name' => $row['sub_district_name'],
                'id' => $row['sub_district_name'],
                'data' => $drilldown
            ];
        }
        return view('Drilldown/index', [
            'landAreaSum' => json_encode($landAreaSum),
            'drilldownData' => json_encode($drilldownData)
        ]);
    }
    public function getDrilldownData($subDistrictName)
    {
        $landAreaModel = new LandAreaModel();
        $drilldownData = $landAreaModel->getDrilldownData($subDistrictName);
        return $this->response->setJSON($drilldownData);
    }
    
}
