<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class MediaOnlineController extends Controller
{
    public function index(){

        $media_onlines = DB::table('media_onlines')->get();
        

        return view('admin.media-online', compact('media_onlines'));
        // return view('admin.media-online');
    }

    public function create(){


        return view('admin.tambah-media-online');
    }

    public function store(Request $request){

        $request->validate([
            'cuplikan_berita' => 'required|string',
            'media_publikasi' => 'required|string',//|unique:media_onlines'
            'jenis_berita' => 'required|in:positif,negatif,netral,rilis',
            'ringkasan_berita' => 'required|string',
            'saran_tindak_lanjut' => 'required|string',
            'waktu_tinjau' => 'required|date',
        ]);
        
        // return view('admin.tambah-media-online');
        //dd('submitted');
        DB::table('media_onlines')->insert([
            //'user_id' => auth()->id(),
            'user_id' => 1, //ini harus diganti ketika login sudah dikerjakan
            'cuplikan_berita' => $request->cuplikan_berita,
            'media_publikasi'=> $request->media_publikasi,
            'jenis_berita' => $request->jenis_berita,
            'ringkasan_berita' => $request ->ringkasan_berita,    
            'saran_tindak_lanjut'=> $request -> saran_tindak_lanjut,
            'waktu_tinjau' => $request->waktu_tinjau,//kiri adalah field database dan kanan adalah name dari form dihalaman blade.php

        ]);
        return redirect('media-online')->with('success', 'Data media online berhasil ditambahkan.');//ini redirek ke uri route ya, bukan dari posisi file.
        //return back()->with('success', 'Data media online berhasil ditambahkan.');
    }

    
    public function edit($id){
        //dd($id);
        $media_online = DB::table('media_onlines')->where('id', $id)->first();
        // dd($media_online);
        // return view('edit')

    }

    

    
}
