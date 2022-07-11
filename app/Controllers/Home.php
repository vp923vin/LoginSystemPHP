<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class Home extends BaseController
{
    
    public function index()
    {
        
       return view('Home_view');
    }

    // public function store(){
    //     $register = new RegisterModel();
    //     $data = [
    //         'first_name' => $this->request->getPost('first_name'),
    //         'last_name' => $this->request->getPost('last_name'),
    //         'phone' => $this->request->getPost('phone'),
    //         'email' => $this->request->getPost('email'),
    //         'password' => $this->request->getPost('password'),
    //     ];
    //     $register->save($data);
    //     return redirect()->to(base_url('home'))->with('status','you are registered Successfully!, continue to login');

    // }
    
}
