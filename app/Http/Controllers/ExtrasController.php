<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    protected $data = array();    

    public function index()
    {
        return redirect('extras/login');
    }

    public function login()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'login'
        );
        return view('extras.login', $this->data);
    }
    
    public function register()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'register'
        );
        return view('extras.register', $this->data);
    }
    
    public function forgot_password()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'forgot_password'
        );
        return view('extras.forgot_password', $this->data);
    }
    
    public function recover_password()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'recover_password'
        );
        return view('extras.recover_password', $this->data);
    }
    
    public function lockscreen()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'lockscreen'
        );
        return view('extras.lockscreen', $this->data);
    }
    
    public function legacy_user_menu()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'legacy_user_menu'
        );
        return view('extras.legacy_user_menu', $this->data);
    }
    
    public function language_menu()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'language_menu'
        );
        return view('extras.language_menu', $this->data);
    }
    
    public function error_404()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'error_404'
        );
        return view('extras.error_404', $this->data);
    }
    
    public function error_500()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'error_500'
        );
        return view('extras.error_500', $this->data);
    }
    
    public function pace()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'pace'
        );
        return view('extras.pace', $this->data);
    }
    
    public function blank()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'blank'
        );
        return view('extras.blank', $this->data);
    }
    
    public function starter()
    {
        $this->data = array(
            'title' => 'Extras',
            'sub_title' => 'starter'
        );
        return view('extras.starter', $this->data);
    }
    
}
