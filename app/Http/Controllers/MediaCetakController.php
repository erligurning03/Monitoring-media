<?php

namespace App\Http\Controllers;

use App\Models\MediaCetak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaCetakController extends Controller
{
    
    public function index(){

        return view('admin.media-cetak',[
            'media_cetaks' => MediaCetak::orderBy('id','desc')->get(),
        ]);

    }

    public function create(){


        return view('admin.tambah-media-cetak');
    }

    public function store(Request $request){

        $request->validate([
            'cuplikan_berita' => 'required|mimes:jpeg,png,jpg,svg|max:2048',
            // 'cuplikan_berita' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:1000'],
            // 'cuplikan_berita' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000',
            'media_publikasi' => 'required|string|max:100',//|unique:media_cetaks'
            'halaman'=> 'required|integer|max:4',
            'kolom' => 'required|integer|max:4',
            'baris'=> 'required|integer|max:4',
            'jenis_berita' => 'required|in:positif,negatif,netral,rilis',
            'ringkasan_berita' => 'required|string|max:255',
            'saran_tindak_lanjut' => 'required|string|max:255',
            'waktu_tinjau' => 'required|date',
        ]);

        //start untuk upload gambar
        $cuplikan_berita = $request->file('cuplikan_berita');
        $filename = date('d-m-Y').$cuplikan_berita->getClientOriginalName();
        $path = 'media-cetak/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($cuplikan_berita));
        //end untuk upload gambar
        
        // return view('admin.tambah-media-online');

        MediaCetak::create([
            //'user_id' => auth()->id(),
            'user_id' => 1, //ini harus diganti ketika login sudah dikerjakan
            'cuplikan_berita' => $filename,
            'media_publikasi'=> $request->media_publikasi,
            'halaman'=> $request->halaman,
            'kolom'=> $request->kolom,
            'baris'=> $request->baris,
            'jenis_berita' => $request->jenis_berita,
            'ringkasan_berita' => $request ->ringkasan_berita,    
            'saran_tindak_lanjut'=> $request -> saran_tindak_lanjut,
            'waktu_tinjau' => $request->waktu_tinjau,//kiri adalah field database dan kanan adalah name dari form dihalaman blade.php

        ]);

        // dd('submitted');
        return redirect('media-cetak')->with('success', 'Data media cetak berhasil ditambahkan.');//ini redirek ke uri route ya, bukan dari posisi file.
        //return back()->with('success', 'Data media online berhasil ditambahkan.');
    }

    public function edit($id){
        //dd($id);
        // $media_cetaks = MediaCetak::where('id', $id)->first(); atau bisa juga pake yang dibawah 
        $media_cetaks = MediaCetak::find($id);
        // dd($media_online);
        return view('admin.edit-media-cetak',['media_cetaks'=> $media_cetaks]);// compact('media_onlines'));//

    }

    public function update(Request $request, $id){
        $request->validate([
           'cuplikan_berita' => 'required|mimes:jpeg,png,jpg,svg|max:2048',
            // 'cuplikan_berita' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:1000'],
            // 'cuplikan_berita' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000',
            'media_publikasi' => 'required|string|max:100',//|unique:media_cetaks'
            'halaman'=> 'required|integer',
            'kolom' => 'required|integer',
            'baris'=> 'required|integer',
            'jenis_berita' => 'required|in:positif,negatif,netral,rilis',
            'ringkasan_berita' => 'required|string|max:255',
            'saran_tindak_lanjut' => 'required|string|max:255',
            'waktu_tinjau' => 'required|date',
        ]);

        // start untuk hapus data dari storage kalau dia diupdate
        $find = MediaCetak::find($id);
        //end untuk hapus data dari storage kalau dia diupdate

        //start untuk upload gambar
        $cuplikan_berita = $request->file('cuplikan_berita');

        if($cuplikan_berita){
        $filename = date('d-m-Y').$cuplikan_berita->getClientOriginalName();
        $path = 'media-cetak/'.$filename;
        //hapus dari storage
        if($find->cuplikan_berita){
            Storage::disk('public')->delete('media-cetak/'.$find->cuplikan_berita);
        }
        //simpan ke storage untuk file yang baru
        Storage::disk('public')->put($path, file_get_contents($cuplikan_berita));
        $cuplikan_berita =$filename;
        }        
        //end untuk upload gambar

        MediaCetak::find($id)->update([
            'user_id' => 1, //ini harus diganti ketika login sudah dikerjakan
            'cuplikan_berita' => $cuplikan_berita,
            'media_publikasi'=> $request->media_publikasi,
            'halaman'=> $request->halaman,
            'kolom'=> $request->kolom,
            'baris'=> $request->baris,
            'jenis_berita' => $request->jenis_berita,
            'ringkasan_berita' => $request ->ringkasan_berita,    
            'saran_tindak_lanjut'=> $request -> saran_tindak_lanjut,
            'waktu_tinjau' => $request->waktu_tinjau,
        ]);
        return redirect('/media-cetak'); //ini redirect ke route yang terdaftar di web.php

        // dd($id);
    }

    public function destroy($id){
        // $media_cetaks = DB::table('media_cetaks')->where('id', $id)->first();
        // $media_cetaks->delete();

        //hapus data dari storage
        $find = MediaCetak::find($id);
        Storage::disk('public')->delete('media-cetak/'.$find->cuplikan_berita);
        //end hapus data dari storage
        MediaCetak::find($id)->delete();
        return redirect('/media-cetak');
    }

}
