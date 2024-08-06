<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaOnlineController extends Controller
{
    public function index(){

        return view('admin.media-online');
    }

    public function store(){
        
        // return view('admin.tambah-media-online');
        dd('submitted');
    }
}
