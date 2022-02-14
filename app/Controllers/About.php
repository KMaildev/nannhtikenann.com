<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CountryModel;

class About extends BaseController
{
    public function __construct()
    {
        $this->CountryModel = new CountryModel();
    }

    public function index()
    {
        $data['countryies'] = $this->CountryModel->findAll();
        return view('about/index', $data);
    }
}
