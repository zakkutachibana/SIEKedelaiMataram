<?php

namespace App\Controllers;

use App\Models\LandAreaModel;
use App\Models\ProductionModel;
use App\Models\ProductivityModel;
use App\Models\YearModel;

class Analisis extends BaseController
{
    public function index(): string
    {
        $yearModel = new YearModel();   

        
        $years = $yearModel->orderBy('year','DESC')->findAll();

        $data = [];

        foreach($years as $year){
            $tempData['year'] = $year['year'];
            array_push($data, $tempData);
        }

        return view('analisis/index', ['data'=>$data]);
    }

    public function getDataByYear($year) {

        $productionModel = new ProductionModel();
        $productivityModel = new ProductivityModel();
        $landAreaModel = new LandAreaModel();
        
        $production = $productionModel->getProductionTotalByYear($year)->production_total_value;
        $landArea = $landAreaModel->getLandAreaTotalByYear($year)->land_area_total_value;
        $productivity = $productivityModel->getProductivityTotalByYear($year)->productivity_total_value;

        $data = [
            'production' => $production*10,
            'productivity' => $productivity,
            'land_area' => $landArea
        ];

        return json_encode($data);

    }

    public function calculateAnalysis($variable, $variableValue, $year)
    {
        $productionModel = new ProductionModel();
        $productivityModel = new ProductivityModel();
        $landAreaModel = new LandAreaModel();

        $variableValue = str_replace('-', '.', $variableValue);
        $landAreaSwitch = 1;
        $productivitySwitch = 2;
        $productionSwitch = 3;

        $data = [];

        $production = $productionModel->getProductionTotalByYear($year)->production_total_value*10;
        $landArea = $landAreaModel->getLandAreaTotalByYear($year)->land_area_total_value;
        $productivity = $productivityModel->getProductivityTotalByYear($year)->productivity_total_value;

        switch ($variable) {
            case $landAreaSwitch:
                $steadyProduction = [
                    'title' => 'Jumlah Produksi Tetap',
                    'production' => $production,
                    'land_area' => $variableValue,
                    'productivity' => $this->calculateProductivity($production, $variableValue),
                ];
                array_push($data, $steadyProduction);

                $steadyProductivity = [
                    'title' => 'Jumlah Produktivitas Tetap',
                    'production' => $this->calculateProduction($productivity, $variableValue),
                    'land_area' => $variableValue,
                    'productivity' => $productivity,
                ];

                array_push($data, $steadyProductivity);
                break;
            case $productivitySwitch:
                $steadyProduction = [
                    'title' => 'Jumlah Produksi Tetap',
                    'production' => $production,
                    'land_area' => $this->calculateLandArea($production, $variableValue),
                    'productivity' => $variableValue,
                ];

                array_push($data, $steadyProduction);

                $steadyLandArea = [
                    'title' => 'Jumlah Luas Lahan Tetap',
                    'production' => $this->calculateProduction($variableValue, $landArea),
                    'land_area' => $landArea,
                    'productivity' => $variableValue,
                ];

                array_push($data, $steadyLandArea);
                break;

            case $productionSwitch:
                $steadyLandArea = [
                    'title' => 'Jumlah Luas Lahan Tetap',
                    'production' => $variableValue,
                    'land_area' => $landArea,
                    'productivity' => $this->calculateProductivity($variableValue, $landArea),
                ];

                array_push($data, $steadyLandArea);

                $steadyProductivity = [
                    'title' => 'Jumlah Produktivitas Tetap',
                    'production' => $variableValue,
                    'land_area' => $this->calculateLandArea($variableValue, $productivity),
                    'productivity' => $productivity,
                ];

                array_push($data, $steadyProductivity);
                break;
        }
        return json_encode($data);
    }
    public function calculateProduction($productivity, $landArea)
    {
        $production = $productivity * $landArea;
        return $production;
    }

    public function calculateProductivity($production, $landArea)
    {
        $productivity = $production / $landArea;
        return $productivity;
    }

    public function calculateLandArea($production, $productivity)
    {
        $landArea = $production / $productivity;
        return $landArea;
    }

}
