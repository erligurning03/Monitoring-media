@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">

@endsection

@section('content')
{{-- @foreach($media_onlines as $med_online) --}}
    

<div class="card">
    <form action="/media-online/{{$media_onlines->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put') <!-- Tambahkan ini jika menggunakan metode PUT -->
        <div class="form-group">
            {{-- tampilkan foto cuplikan berita jika ada --}}
            @if($media_onlines->cuplikan_berita)
                <img src="{{asset('storage/media-online/'. $media_onlines->cuplikan_berita)}}" alt="" width="200px">
            @endif
            <label for="cuplikan_berita" class="form-label">Foto Cuplikan Media Online</label>
            <input class="form-control" type="file" id="cuplikan_berita" name="cuplikan_berita">
            <small style="color: blue">input foto baru jika ingin menggantinya</small>
        </div> 
        <div class="form-group">
            <label for="waktu_tinjau" class="form-label">Waktu Tinjau :</label>
            <input type="date" class="form-control" name="waktu_tinjau" value="{{ $media_onlines->waktu_tinjau }}">
        </div>     
        <div class="form-group">
            <label for="jenis_berita" class="form-label">Jenis Berita :</label>
            <select class="form-control form-control-sm" aria-label=".form-select-sm example" name="jenis_berita">
                <option value="positif" {{ $media_onlines->jenis_berita == 'positif' ? 'selected' : '' }}>Positif</option>
                <option value="negatif" {{ $media_onlines->jenis_berita == 'negatif' ? 'selected' : '' }}>Negatif</option>
                <option value="netral" {{ $media_onlines->jenis_berita == 'netral' ? 'selected' : '' }}>Netral</option>
                <option value="rilis" {{ $media_onlines->jenis_berita == 'rilis' ? 'selected' : '' }}>Rilis</option>
            </select>
        </div>
        <div class="form-group">
            <label for="media_publikasi" class="form-label">Media Publikasi</label>
            <input type="text" class="form-control" id="media_publikasi" aria-describedby="media_publikasi" name="media_publikasi" value="{{ $media_onlines->media_publikasi }}">
        </div>     
        <div class="form-group">
            <label for="ringkasan_berita" class="form-label">Ringkasan Berita</label> <br>
            <textarea id="ringkasan_berita" name="ringkasan_berita" rows="10" cols="50" class="form-control">{{ $media_onlines->ringkasan_berita }}</textarea>
        </div>
        <div class="form-group">
            <label for="saran_tindak_lanjut" class="form-label">Saran Tindak Lanjut</label> <br>
            <textarea id="saran_tindak_lanjut" name="saran_tindak_lanjut" rows="10" cols="50" class="form-control">{{ $media_onlines->saran_tindak_lanjut }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

{{-- @endforeach --}}
@endsection

@section('js')
@endsection
