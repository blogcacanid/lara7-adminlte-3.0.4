<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetsController extends Controller
{
    protected $data = array();    

    public function index()
    {
        $this->data = array(
            'title' => 'Widgets',
            'sub_title' => 'Widgets'
        );
        return view('widgets.widgets', $this->data);
    }
    
}
