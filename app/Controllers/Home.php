<?php

namespace App\Controllers;

use App\Models\LandAreaModel;
use App\Models\ProductionModel;
use App\Models\ProductivityModel;
use App\Models\SubDistrictModel;
use App\Models\YearModel;

class Home extends BaseController
{
    public function index(): string
    {
        $subDistrictModel = new SubDistrictModel();
        $data['sub_districts'] = $subDistrictModel->findAll();
        return view('index', $data);
    }

    public function detail($subDistrictId)
    {
        $subDistrictModel = new SubDistrictModel();
        $landAreaModel = new LandAreaModel();
        $productionModel = new ProductionModel();
        $productivityModel = new ProductivityModel();
        $yearModel = new YearModel();

        $subDistrictNames = $subDistrictModel
            ->where('sub_district_id', $subDistrictId)
            ->first()['sub_district_name'];

        $landAreaTotals = $landAreaModel->getLandAreasBySubdistrict($subDistrictId);
        $productionTotals = $productionModel->getProductionsBySubdistrict($subDistrictId);
        $productivityTotals = $productivityModel->getProductivitiesBySubdistrict($subDistrictId);
        $years = $yearModel->findAll();

        $data = [];

        foreach ($years as $year) {
            $tempData = [];
            foreach ($landAreaTotals as $landAreaTotal) {
                if ($year['year'] == $landAreaTotal['year']) {
                    $tempData['landAreaTotal'] = $landAreaTotal['land_area_detail_value'];
                }
            }
            foreach ($productivityTotals as $productivityTotal) {
                if ($year['year'] == $productivityTotal['year']) {
                    $tempData['productivityTotal'] = $productivityTotal['productivity_detail_value'];
                }
            }
            foreach ($productionTotals as $productionTotal) {
                if ($year['year'] == $productionTotal['year']) {
                    $tempData['productionTotal'] = $productionTotal['production_detail_value'] * 10;
                }
            }

            $tempData['year'] = $year['year'];
            array_push($data, $tempData);
        }

        $viewData = [
            'title' => 'Detail Panen Kedelai di ' . $subDistrictNames . ' ',
            'all_datas' => $data,
        ];

        return view('detail/index', $viewData);
    }
}
