@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection

@section('content')
<div class="card">

    <form action="/media-cetak/{{$media_cetaks->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put') 
        <div class="form-group">
            <label for="cuplikan_berita" class="form-label">Foto Cuplikan Media Cetak</label>

            <input class="form-control" type="file" id="cuplikan_berita" name="cuplikan_berita">
        </div> 
        <div class="form-group">
            <label for="waktu_tinjau" class="form-label">Waktu Pantau :</label>
            <input type="date" class="form-control" name="waktu_tinjau" value="{{$media_cetaks->waktu_tinjau}}">
        </div>     
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Jenis Berita :</label>
            <select class="form-control form-control-sm" aria-label=".form-select-sm example" name="jenis_berita">
                <option value="positif" {{ $media_cetaks->jenis_berita == 'positif' ? 'selected' : '' }}>Positif</option>
                <option value="negatif" {{ $media_cetaks->jenis_berita == 'negatif' ? 'selected' : '' }}>Negatif</option>
                <option value="netral" {{ $media_cetaks->jenis_berita == 'netral' ? 'selected' : '' }}>Netral</option>
                <option value="rilis" {{ $media_cetaks->jenis_berita == 'rilis' ? 'selected' : '' }}>Rilis</option>
            </select>
        </div>
        <div class="form-group">
            <label for="media_publikasi" class="form-label">Media Publikasi</label>
            <input type="text" class="form-control" id="media_publikasi" aria-describedby="media_publikasi" name ="media_publikasi" value="{{ $media_cetaks->media_publikasi }}">
        </div>
        
        <div class="form-row">   
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1" class="form-label">Halaman</label>
                <input type="number" class="form-control" id="halaman" aria-describedby="halaman" name="halaman" value="{{$media_cetaks->halaman}}">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1" class="form-label">Kolom</label>
                <input type="number" class="form-control" id="kolom" aria-describedby="kolom" name="kolom" value="{{$media_cetaks->kolom}}">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1" class="form-label">Baris</label>
                <input type="number" class="form-control" id="baris" aria-describedby="baris" name="baris" value="{{$media_cetaks->baris}}">
            </div>
        </div>
        
        <div class="form-group">
            <label for="ringkasan_berita" class="form-label">Ringkasan Berita</label> <br>
            <textarea id="ringkasan_berita" name="ringkasan_berita" rows="10" cols="50" class="form-control">{{$media_cetaks->ringkasan_berita}}</textarea>
        </div>
        <div class="form-group">
            <label for="saran_tindak_lanjut" class="form-label">Saran Tindak Lanjut</label> <br>
            <textarea id="saran_tindak_lanjut" name="saran_tindak_lanjut" rows="10" cols="50" class="form-control">{{ $media_cetaks->saran_tindak_lanjut }}</textarea>
        </div>
        <button type="submit" class="save-button">
            <i class="fas fa-save"> </i> Save
        </button>
    </form>
</div>


@endsection

@section('js')

@endsection