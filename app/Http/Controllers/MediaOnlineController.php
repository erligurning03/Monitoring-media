<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class MediaOnlineController extends Controller
{
    public function index(){

        $media_onlines = DB::table('media_onlines')->orderBy('id','desc')->get();
        

        return view('admin.media-online', compact('media_onlines'));
        // return view('admin.media-online');
    }

    public function create(){


        return view('admin.tambah-media-online');
    }

    public function store(Request $request){

        $request->validate([
            // 'cuplikan_berita' => 'required|string',
            'cuplikan_berita' => 'required|mimes:jpeg,png,jpg,svg|max:2048',
            'media_publikasi' => 'required|string',//|unique:media_onlines'
            'jenis_berita' => 'required|in:positif,negatif,netral,rilis',
            'ringkasan_berita' => 'required|string',
            'saran_tindak_lanjut' => 'required|string',
            'waktu_tinjau' => 'required|date',
        ]);
        
        // return view('admin.tambah-media-online');
        //dd('submitted');

        //start untuk upload gambar
        $cuplikan_berita = $request->file('cuplikan_berita');
        $filename = date('d-m-Y').$cuplikan_berita->getClientOriginalName();
        $path = 'media-online/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($cuplikan_berita));
        //end untuk upload gambar

        DB::table('media_onlines')->insert([
            //'user_id' => auth()->id(),
            'user_id' => 1, //ini harus diganti ketika login sudah dikerjakan
            // 'cuplikan_berita' => $request->cuplikan_berita,
            'cuplikan_berita' => $filename,
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
        $media_onlines = DB::table('media_onlines')->where('id', $id)->first();
        // dd($media_online);
        return view('admin.edit-media-online',['media_onlines'=> $media_onlines]);// compact('media_onlines'));//

    }

    public function update(Request $request, $id){
        DB::table('media_onlines')->where('id', $id)->update([
            'user_id' => 1, //ini harus diganti ketika login sudah dikerjakan
            'cuplikan_berita' => $request->cuplikan_berita,
            'media_publikasi'=> $request->media_publikasi,
            'jenis_berita' => $request->jenis_berita,
            'ringkasan_berita' => $request ->ringkasan_berita,    
            'saran_tindak_lanjut'=> $request -> saran_tindak_lanjut,
            'waktu_tinjau' => $request->waktu_tinjau,
        ]);
        return redirect('/media-online'); //ini redirect ke route yang terdaftar di web.php

        // dd($id);
    }

    public function destroy($id){
        // $media_onlines = DB::table('media_onlines')->where('id', $id)->first();
        // $media_onlines->delete();

        DB::table('media_onlines')->where('id', $id)->delete();
        return redirect('/media-online');
    }

    

    
}
