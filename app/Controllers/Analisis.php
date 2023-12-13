<?php

namespace App\Controllers;

use App\Models\YearModel;

class Analisis extends BaseController
{
    public function index(): string
    {
        $yearModel = new YearModel();


        $years = $yearModel->getYears();

        $data = [

        ];


        return view('Analisis/index', $data);
    }
}
