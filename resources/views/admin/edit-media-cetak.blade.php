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

            <input class="form-control @error('cuplikan_berita') is-invalid @enderror" type="file" id="cuplikan_berita" name="cuplikan_berita">
            @error('cuplikan_berita')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            <label for="waktu_tinjau" class="form-label">Waktu Tinjau :</label>
            <input type="date" class="form-control" name="waktu_tinjau" value="{{ \Carbon\Carbon::parse($media_cetaks->waktu_tinjau)->translatedFormat('Y-m-d') }}">
            @error('waktu_tinjau')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>     
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Jenis Berita :</label>
            <select class="form-control form-control-sm @error('jenis_berita') is-invalid @enderror" aria-label=".form-select-sm example" name="jenis_berita">
                <option value="positif" {{ $media_cetaks->jenis_berita == 'positif' ? 'selected' : '' }}>Positif</option>
                <option value="negatif" {{ $media_cetaks->jenis_berita == 'negatif' ? 'selected' : '' }}>Negatif</option>
                <option value="netral" {{ $media_cetaks->jenis_berita == 'netral' ? 'selected' : '' }}>Netral</option>
                <option value="rilis" {{ $media_cetaks->jenis_berita == 'rilis' ? 'selected' : '' }}>Rilis</option>
            </select>
            @error('jenis_berita')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="media_publikasi" class="form-label">Media Publikasi</label>
            <input type="text" class="form-control @error('media_publikasi') is-invalid @enderror" id="media_publikasi" aria-describedby="media_publikasi" name ="media_publikasi" value="{{ $media_cetaks->media_publikasi }}">
            @error('media_publikasi')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-row">   
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1" class="form-label">Halaman</label>
                <input type="number" class="form-control @error('halaman') is-invalid @enderror " id="halaman" aria-describedby="halaman" name="halaman" value="{{$media_cetaks->halaman}}">
                @error('halaman')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1" class="form-label">Kolom</label>
                <input type="number" class="form-control @error('kolom') is-invalid @enderror" id="kolom" aria-describedby="kolom" name="kolom" value="{{$media_cetaks->kolom}}">
                @error('kolom')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1" class="form-label">Baris</label>
                <input type="number" class="form-control @error('baris') is-invalid @enderror" id="baris" aria-describedby="baris" name="baris" value="{{$media_cetaks->baris}}">
                @error('baris')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
        </div>
        
        <div class="form-group">
            <label for="ringkasan_berita" class="form-label">Ringkasan Berita</label> <br>
            <textarea id="ringkasan_berita" name="ringkasan_berita" rows="10" cols="50" class="form-control @error('ringkasan_berita') is-invalid @enderror">{{$media_cetaks->ringkasan_berita}}</textarea>
            @error('ringkasan_berita')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="saran_tindak_lanjut" class="form-label">Saran Tindak Lanjut</label> <br>
            <textarea id="saran_tindak_lanjut" name="saran_tindak_lanjut" rows="10" cols="50" class="form-control @error('saran_tindak_lanjut') is-invalid @enderror">{{ $media_cetaks->saran_tindak_lanjut }}</textarea>
            @error('saran_tindak_lanjut')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="save-button">
            <i class="fas fa-save"> </i> Save
        </button>
    </form>
</div>


@endsection

@section('js')

@endsection