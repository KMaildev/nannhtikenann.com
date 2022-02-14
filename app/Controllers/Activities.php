<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ActivitieModel;
use App\Models\CountryModel;

class Activities extends BaseController
{
    public function __construct()
    {
        $this->ActivitiesModel = new ActivitieModel();
        $this->CountryModel = new CountryModel();
    }
    public function index()
    {
        $data['activities'] = $this->ActivitiesModel->findAll();
        $data['countryies'] = $this->CountryModel->findAll();
        return view('activities/index', $data);
    }
}
