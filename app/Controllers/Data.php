<?php

namespace App\Controllers;
use App\Models\RegisterModel;
class Data extends BaseController
{   
    
    public function index()
    {
        if(!session()->has('loggedIn')){
            return redirect()->to('login');
        }
        $register = new RegisterModel();
        $data['register'] = $register->findAll();
        return view('Data_view',$data);
    }

    public function edit($id){
        $register = new RegisterModel();
        $data['register'] = $register->find($id);
        return view('Edit_view',$data);
    }

    public function update($id){
        $register = new RegisterModel();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];
        $register -> update($id, $data);
        return redirect()->to('data')->with('status', 'Data Update Successfully!');
       
    }

    public function delete($id = null){
        $register = new RegisterModel();
        $register->delete($id);
        return ;
    }

    public function logout(){  
        session()->remove('loggedIn');
        session()->destroy();
        return redirect()->to('login');  
    }
}

