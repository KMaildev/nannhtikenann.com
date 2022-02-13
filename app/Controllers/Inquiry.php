<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InquiryModel;

class Inquiry extends BaseController
{

    public function __construct()
    {
        $this->ContactModel = new InquiryModel();
    }


    public function index()
    {
        return view('inquiry/index');
    }

    public function save()
    {
        if ($this->request->getMethod() == "post") {
            $rules = [
                "name" => "required|min_length[2]|max_length[40]",
                "phone" => "required",
                "subject" => "required",
                "message" => "required",
            ];

            if (!$this->validate($rules)) {
                $session = session();
                $session->setFlashdata("error", "Error: Please enter your information below");
                return redirect()->back();
            } else {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'email'  => $this->request->getPost('email'),
                    'phone'  => $this->request->getPost('phone'),
                    'subject'  => $this->request->getPost('subject'),
                    'message'  => $this->request->getPost('message'),
                    'inquiry_date'  => date("Y/m/d"),
                ];
                $this->ContactModel->save($data);
                $session = session();
                $session->setFlashdata("success", "Your message successfully sent!");
                return redirect()->back();
            }
        }

        return view('inquiry/index');
    }
}
