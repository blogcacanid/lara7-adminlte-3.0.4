<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $data = array();    

    public function index()
    {
        return redirect('pages/invoice');
    }

    public function invoice()
    {
        $this->data = array(
            'title' => 'Pages',
            'sub_title' => 'Invoice'
        );
        return view('pages.invoice', $this->data);
    }
    
    public function invoice_print()
    {
        $this->data = array(
            'title' => 'Pages',
            'sub_title' => 'invoice_print'
        );
        return view('pages.invoice_print', $this->data);
    }
    
    public function profile()
    {
        $this->data = array(
            'title' => 'Pages',
            'sub_title' => 'Profile'
        );
        return view('pages.profile', $this->data);
    }
    
    public function e_commerce()
    {
        $this->data = array(
            'title' => 'Pages',
            'sub_title' => 'e_commerce'
        );
        return view('pages.e_commerce', $this->data);
    }
    
    public function projects()
    {
        $this->data = array(
            'title' => 'Pages',
            'sub_title' => 'projects'
        );
        return view('pages.projects', $this->data);
    }
    
    public function project_add()
    {
        $this->data = array(
            'title' => 'Pages',
            'sub_title' => 'project_add'
        );
        return view('pages.project_add', $this->data);
    }
    
    public function project_edit()
    {
        $this->data = array(
            'title' => 'Pages',
            'sub_title' => 'project_edit'
        );
        return view('pages.project_edit', $this->data);
    }
    
    public function project_detail()
    {
        $this->data = array(
            'title' => 'Pages',
            'sub_title' => 'project_detail'
        );
        return view('pages.project_detail', $this->data);
    }
    
    public function contacts()
    {
        $this->data = array(
            'title' => 'Pages',
            'sub_title' => 'contacts'
        );
        return view('pages.contacts', $this->data);
    }
    
}
