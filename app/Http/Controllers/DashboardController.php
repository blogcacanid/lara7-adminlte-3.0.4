<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    protected $data = array();    

    public function index()
    {
        return redirect('dashboard/v1');
    }
    
    public function v1()
    {
        $this->data = array(
            'title' => 'Dashboard',
            'sub_title' => 'Version 1'
        );
        return view('dashboard.v1', $this->data);
    }
    
    public function v2()
    {
        $this->data = array(
            'title' => 'Dashboard',
            'sub_title' => 'Version 2'
        );
        return view('dashboard.v2', $this->data);
    }
    
    public function v3()
    {
        $this->data = array(
            'title' => 'Dashboard',
            'sub_title' => 'Version 3'
        );
        return view('dashboard.v3', $this->data);
    }
    
}
