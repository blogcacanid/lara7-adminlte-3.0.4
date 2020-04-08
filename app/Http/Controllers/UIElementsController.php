<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIElementsController extends Controller
{
    public function index()
    {
        return redirect('uielements/general');
    }
    
    public function general()
    {
        $this->data = array(
            'title' => 'UI Elements',
            'sub_title' => 'General'
        );
        return view('ui.general', $this->data);
    }
    
    public function icons()
    {
        $this->data = array(
            'title' => 'UI Elements',
            'sub_title' => 'Icons'
        );
        return view('ui.icons', $this->data);
    }
    
    public function buttons()
    {
        $this->data = array(
            'title' => 'UI Elements',
            'sub_title' => 'Buttons'
        );
        return view('ui.buttons', $this->data);
    }
    
    public function sliders()
    {
        $this->data = array(
            'title' => 'UI Elements',
            'sub_title' => 'Sliders'
        );
        return view('ui.sliders', $this->data);
    }
    
    public function modals()
    {
        $this->data = array(
            'title' => 'UI Elements',
            'sub_title' => 'Modals & Alerts'
        );
        return view('ui.modals', $this->data);
    }
    
    public function navbar()
    {
        $this->data = array(
            'title' => 'UI Elements',
            'sub_title' => 'Navbar & Tabs'
        );
        return view('ui.navbar', $this->data);
    }
    
    public function timeline()
    {
        $this->data = array(
            'title' => 'UI Elements',
            'sub_title' => 'Timeline'
        );
        return view('ui.timeline', $this->data);
    }
    
    public function ribbons()
    {
        $this->data = array(
            'title' => 'UI Elements',
            'sub_title' => 'Ribbons'
        );
        return view('ui.ribbons', $this->data);
    }
    

}
