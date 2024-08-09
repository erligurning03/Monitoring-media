@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection


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

    <form action="/media-cetak" method="POST">
        @csrf
        {{-- @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach --}}
        <div class="form-group">
            <label for="cuplikan_berita" class="form-label">Foto Cuplikan Media Cetak</label>
            <input class="form-control @error('cuplikan_berita') is-invalid @enderror" type="file" id="cuplikan_berita" name="cuplikan_berita">
            @error('cuplikan_berita')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            <label for="waktu_tinjau" class="form-label">Waktu Tinjau :</label>
            <input type="date" class="form-control  @error('waktu_tinjau') is-invalid @enderror" name="waktu_tinjau">
            @error('waktu_tinjau')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>     
        <div class="form-group">
            <label for="jenis_berita" class="form-label">Jenis Berita :</label>
            <select class="form-control form-control-sm @error('jenis_berita') is-invalid @enderror" aria-label=".form-select-sm example" name="jenis_berita">
                {{-- <option value="">Pilih jenis berita</option> --}}
                <option value="positif">Positif</option>
                <option value="negatif">Negatif</option>
                <option value="netral">Netral</option>
                <option value="rilis">Rilis</option>
            </select>
            @error('jenis_berita')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="media_publikasi" class="form-label">Media Publikasi</label>
            <input type="text" class="form-control @error('media_publikasi') is-invalid @enderror" id="media_publikasi" aria-describedby="media_publikasi" name="media_publikasi">
            @error('media_publikasi')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="halaman" class="form-label">Halaman</label>
                <input type="number" class="form-control @error('halaman') is-invalid @enderror" id="halaman" aria-describedby="halaman" name="halaman">
                @error('halaman')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="kolom" class="form-label">Kolom</label>
                <input type="number" class="form-control @error('kolom') is-invalid @enderror" id="kolom" aria-describedby="kolom" name="kolom">
                @error('kolom')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="baris" class="form-label">Baris</label>
                <input type="number" class="form-control @error('baris') is-invalid @enderror" id="baris" aria-describedby="baris" name="baris">
                @error('baris')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
        </div>
        
        <div class="form-group">
            <label for="ringkasan_berita" class="form-label">Ringkasan Berita</label> <br>
            <textarea id="ringkasan_berita" name="ringkasan_berita" rows="10" cols="50" class="form-control @error('ringkasan_berita') is-invalid @enderror"></textarea>
            @error('ringkasan_berita')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="saran_tindak_lanjut" class="form-label">Saran Tindak Lanjut</label> <br>
            <textarea id="saran_tindak_lanjut" name="saran_tindak_lanjut" rows="10" cols="50" class="form-control @error('saran_tindak_lanjut') is-invalid @enderror"></textarea>
            @error('saran_tindak_lanjut')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="save-button">
            <i class="fas fa-save"></i> Save
        </button>
       
    </form>
</div>


@endsection

@section('js')

@endsection