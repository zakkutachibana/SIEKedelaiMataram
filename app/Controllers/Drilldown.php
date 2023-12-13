<?php

namespace App\Controllers;

class Drilldown extends BaseController
{
    public function index(): string
    {
        return view('Drilldown/index');
    }
}
