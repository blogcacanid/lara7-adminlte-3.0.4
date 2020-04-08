<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    protected $data = array();    

    public function index()
    {
        $this->data = array(
            'title' => 'Calendar',
            'sub_title' => 'Calendar'
        );
        return view('calendar.calendar', $this->data);
    }
    
}
