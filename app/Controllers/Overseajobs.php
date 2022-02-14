<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CountryModel;
use App\Models\OverseajobModel;

class Overseajobs extends BaseController
{

    public function __construct()
    {
        $this->CountryModel = new CountryModel();
        $this->OverseajobModel = new OverseajobModel();
    }

    public function index($id = null)
    {
        $data['countryies'] = $this->CountryModel->findAll();
        $data['overseajobs'] = $this->OverseajobModel->where('country_id', $id)->findAll();
        $data['title'] = $this->CountryModel->find($id);
        return view('overseajobs/index', $data);
    }
}
