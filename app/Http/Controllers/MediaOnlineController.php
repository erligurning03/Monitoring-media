<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaOnlineController extends Controller
{
    public function index(){

        //$media_online = DB::table('media-onlines')->get();
        

        //return view('admin.media-online', compact('media_online'));
        return view('admin.media-online');
    }

    public function create(){
        //
    }

    public function store(){
        
        // return view('admin.tambah-media-online');
        dd('submitted');
    }

    
}
