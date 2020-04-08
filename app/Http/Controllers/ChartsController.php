<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    protected $data = array();    

    public function index()
    {
        return redirect('charts/chartjs');
    }

    public function chartjs()
    {
        $this->data = array(
            'title' => 'Charts',
            'sub_title' => 'ChartsJS'
        );
        return view('charts.chartjs', $this->data);
    }
    
    public function flot()
    {
        $this->data = array(
            'title' => 'Charts',
            'sub_title' => 'Flot'
        );
        return view('charts.flot', $this->data);
    }
    
    public function inline()
    {
        $this->data = array(
            'title' => 'Charts',
            'sub_title' => 'Inline'
        );
        return view('charts.inline', $this->data);
    }
    
}
