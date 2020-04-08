<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    protected $data = array();    

    public function index()
    {
        return redirect('forms/chartjs');
    }

    public function general()
    {
        $this->data = array(
            'title' => 'Forms',
            'sub_title' => 'General'
        );
        return view('forms.general', $this->data);
    }
    
    public function advanced()
    {
        $this->data = array(
            'title' => 'Forms',
            'sub_title' => 'Advanced'
        );
        return view('forms.advanced', $this->data);
    }
    
    public function editors()
    {
        $this->data = array(
            'title' => 'Forms',
            'sub_title' => 'Editors'
        );
        return view('forms.editors', $this->data);
    }
    
    public function validation()
    {
        $this->data = array(
            'title' => 'Forms',
            'sub_title' => 'Validation'
        );
        return view('forms.validation', $this->data);
    }
    
    
    
}
