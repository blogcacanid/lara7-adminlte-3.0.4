<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected $data = array();    

    public function index()
    {
        $this->data = array(
            'title' => 'Gallery',
            'sub_title' => 'Gallery'
        );
        return view('gallery.gallery', $this->data);
    }
    
}
