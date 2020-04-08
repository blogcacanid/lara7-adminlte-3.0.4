<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    protected $data = array();    

    public function index()
    {
        return redirect('tables/simple');
    }

    public function simple()
    {
        $this->data = array(
            'title' => 'Tables',
            'sub_title' => 'Simple Tables'
        );
        return view('tables.simple', $this->data);
    }
    
    public function datatables()
    {
        $this->data = array(
            'title' => 'Tables',
            'sub_title' => 'Datatables'
        );
        return view('tables.datatables', $this->data);
    }
    
    public function jsgrid()
    {
        $this->data = array(
            'title' => 'Tables',
            'sub_title' => 'jsGrid'
        );
        return view('tables.jsgrid', $this->data);
    }
    
}
