<?php

namespace App\Controllers;

use App\Models\m_login;

class c_login extends BaseController {
    public function index() {
        return view('v_login');
    }

    public function auth() {
        $session = session();
        $m_login = new m_login();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $password = md5($password);
        $data = $m_login->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            //$verify_pass = password_verify($password, $pass);
            // dd($pass);
            // dd($password);
            if($password == $pass){
                $ses_data = [
                    'id'            => $data['id'],
                    'username'      => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/kota');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/c_login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/c_login');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/c_login');
    }

}