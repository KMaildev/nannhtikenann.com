<?php

namespace App\Controllers;

use App\Models\CountryModel;
use App\Models\OverseajobModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->CountryModel = new CountryModel();
        $this->OverseajobModel = new OverseajobModel();

        $this->db = db_connect();
    }

    public function index()
    {
        $data['countryies'] = $this->CountryModel->findAll();
        // $data['overseajobs'] = $this->OverseajobModel->findAll();

        $builder = $this->db->table("oversea_jobs");
        $builder->select('*');
        $builder->groupBy('name');
        $query = $builder->get();
        $data['overseajobs'] = $query->getResult();
        return view('welcome_message', $data);
    }
}
