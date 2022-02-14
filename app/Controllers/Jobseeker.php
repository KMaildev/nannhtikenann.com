<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CountryModel;
use App\Models\JobseekerModel;

class Jobseeker extends BaseController
{

    public function __construct()
    {
        $this->JobseekerModel = new JobseekerModel();
        $this->CountryModel = new CountryModel();
    }


    public function index()
    {
        $data['countryies'] = $this->CountryModel->findAll();
        return view('jobseeker/index', $data);
    }

    public function save()
    {
        $data['countryies'] = $this->CountryModel->findAll();
        if ($this->request->getMethod() == "post") {
            $rules = [
                "name" => "required|min_length[2]|max_length[40]",
                "phone" => "required|min_length[8]|max_length[11]",
            ];

            if (!$this->validate($rules)) {
                $session = session();
                $session->setFlashdata("error", "Error: Please enter your information below");
                return redirect()->back();
            } else {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'nrc_no'  => $this->request->getPost('nrc_no'),
                    'email'  => $this->request->getPost('email'),
                    'phone'  => $this->request->getPost('phone'),
                    'date_of_birth' => $this->request->getPost('date_of_birth'),
                    'age' => $this->request->getPost('age'),
                    'gender' => $this->request->getPost('gender'),
                    'health_status' => $this->request->getPost('health_status'),
                    'height' => $this->request->getPost('date_of_birth'),
                    'weight' => $this->request->getPost('weight'),
                    'skill'  => $this->request->getPost('skill'),
                    'current_address'  => $this->request->getPost('current_address'),
                    'registration_date'  => date("Y/m/d"),
                ];
                $this->JobseekerModel->save($data);
                $session = session();
                $session->setFlashdata("success", "Your message successfully sent!");
                return redirect()->back();
            }
        }

        return view('jobseeker/index', $data);
    }
}
