@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection
<!-- Link Font Awesome dari CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
@section('content')
<div class="card">
    {{-- <form>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto Cuplikan Media Online</label>
            <input class="form-control" type="file" id="formFile">
        </div> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Waktu Pantau : </label>
            <input type="date">
        </div>     
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Berita : </label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                {{-- <option selected>Jenis Berita</option> --}}        {{--
                <option value="positif">Positif</option>
                <option value="negati">Negatif</option>
                <option value="netral">Netral</option>
                <option value="rilis">Rilis</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Media Pantau</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Halaman</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kolom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Baris</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="ringkasan_berita" class="form-label">Ringkasan Berita</label> <br>
            <textarea id="ringkasan_berita" name="ringkasan_berita" rows="10" cols="50"></textarea>
        </div>
        <div class="mb-3">
            <label for="tindak_lanjut" class="form-label">Saran Tindak Lanjut</label> <br>
            <textarea id="tindak_lanjut" name="ringkasan_berita" rows="10" cols="50"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}

    

    <form action="/media-online" method="post">
        @csrf
        <div class="form-group">
            <label for="cuplikan_berita" class="form-label">Foto Cuplikan Media Online</label>
            <input class="form-control" type="file" id="cuplikan_berita" name="cuplikan_berita">
        </div> 
        <div class="form-group">
            <label for="waktu_tinjau" class="form-label">Waktu Tinjau :</label>
            <input type="date" class="form-control" name="waktu_tinjau">
        </div>     
        <div class="form-group">
            <label for="jenis_berita" class="form-label">Jenis Berita :</label>
            <select class="form-control form-control-sm" aria-label=".form-select-sm example" name="jenis_berita">
                <option value="">Pilih jenis berita</option>
                <option value="positif">Positif</option>
                <option value="negatif">Negatif</option>
                <option value="netral">Netral</option>
                <option value="rilis">Rilis</option>
            </select>
        </div>
        <div class="form-group">
            <label for="media_publikasi" class="form-label">Media Publikasi</label>
            <input type="text" class="form-control" id="media_publikasi" aria-describedby="media_publikasi" name="media_publikasi">
        </div>     
        <div class="form-group">
            <label for="ringkasan_berita" class="form-label">Ringkasan Berita</label> <br>
            <textarea id="ringkasan_berita" name="ringkasan_berita" rows="10" cols="50" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="saran_tindak_lanjut" class="form-label">Saran Tindak Lanjut</label> <br>
            <textarea id="saran_tindak_lanjut" name="saran_tindak_lanjut" rows="10" cols="50" class="form-control"></textarea>
        </div>
        <button type="submit" class="save-button">
            <i class="fas fa-save"></i> Save
        </button>
    </form>
</div>


@endsection

@section('js')

@endsection