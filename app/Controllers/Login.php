<?php

namespace App\Controllers;
use App\Models\RegisterModel;
class Login extends BaseController
{
    public $loginModel;
    public $session;
    public function __construct(){
        helper('form');
        $this->loginModel = new RegisterModel();
        $this->session = session();
    }
    
    public function index()
    {
        $data1 = [];
        $data1['validation'] = null;
       

        if($this->request->getMethod() == "post"){
            $rules = [
                'email'     => [
                    'rules' =>'required|valid_email', 
                    'errors'=> [
                        'required'   => 'email is required.',
                        'valid_email'=> 'please enter valid email.'
                
                    ],
                ],
                'password'  => [
                    'rules' =>'required|min_length[5]',
                    'errors'=> [
                        'required'   => 'password is required.',
                        'min_length' => 'please enter more than 5 length value in this field.',
                        
                    ],
                ],
            ];
            if($this->validate($rules)){
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');

                $userdata = $this->loginModel->verifyEmail($email);
                print_r($userdata);
                if ($userdata) {
                    
                    if(password_verify($password ,$userdata['password'])){
                        

                        $this->session->set('loggedIn',$userdata['id']);
                        return redirect()->to('data/loggedin');
                     }else{
                        
                        $this->session->setTempdata('error','Sorry! You have entered the wrong password for the email.',3);
                        return redirect()->to(current_url());
                    }
                }else{
                    $this->session->setTempdata('error','Sorry! your Email does not exists.',3);
                    return redirect()->to(current_url());
                }

            }
            else{
                $data1['validation'] = $this->validator;
            }
        }
       return view('Login_view',$data1);
    }


}

