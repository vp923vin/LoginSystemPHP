<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class Register extends BaseController
{    

   public function __construct(){
        helper('form');
   }
    public function index()
    {
        $newdata = [];
        $newdata['validation'] = null;
        $rules = [
        'first_name' => [
            'rules'  => 'required|max_length[20]|min_length[4]',
            'errors' => [
                'required'   => 'first name is required.',
                'max_length' => 'please enter less than 20 character in this field.',
                'min_length' => 'please enter more than 3 characters in this field.',
            ],
        ],
    
        'last_name'  => [
            'rules'  => 'required|max_length[20]|min_length[4]',
            'errors' => [
                'required'   => 'last name is required.',
                'max_length' => 'please enter less than 20 character in this field.',
                'min_length' => 'please enter more than 3 characters in this field.',
            ],
        ],
    
        'phone'     => [
            'rules' => 'required|exact_length[10]',
            'errors'=> [
                'required'    => 'phone number is required.',
                'exact_length'=> 'please enter the exact 10 digit.',
            ],
        ],
    
        'email'     => [
            'rules' =>'required|valid_email', // [table.field]
            'errors'=> [
                'required'   => 'email is required.',
                'valid_email'=> 'please enter valid email address.',               
            ],
        ],

        'password'  => [
            'rules' =>'required|min_length[5]',
            'errors'=> [
                'required'     => 'password is required.',
                'min_length' => 'please enter more than 5 length value in this field.',    
            ],
        ],

        'confirm_password'=>[
            'rules'       =>'required|matches[password]',
            'errors'      => [
                'required'=> 'confirm password is required.',
                'matches' => 'please enter the same password in this field to confirm your password.',   
            ],
        ],
        ];
           if($this->request->getMethod() == "post"){
                if($this->validate($rules)){
                        //echo "save data";
                        $register = new RegisterModel();
                        $data = [
                            'first_name' => $this->request->getPost('first_name'),
                            'last_name' => $this->request->getPost('last_name'),
                            'phone' => $this->request->getPost('phone'),
                            'email' => $this->request->getPost('email'),
                            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                        ];
                        $register->save($data);
                        return redirect()->to('register')->with('status','Your are registered and ready to login in our web.');
                }else{
                        $newdata['validation'] = $this->validator;
                }
            }
        
        
        return view('Register_view', $newdata);
             
    }
}
