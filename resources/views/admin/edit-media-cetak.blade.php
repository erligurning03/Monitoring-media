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

    <form>
        <div class="form-group">
            <label for="formFile" class="form-label">Foto Cuplikan Media Cetak</label>
            <input class="form-control" type="file" id="formFile">
        </div> 
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Waktu Pantau :</label>
            <input type="date" class="form-control">
        </div>     
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Jenis Berita :</label>
            <select class="form-control form-control-sm" aria-label=".form-select-sm example">
                <option value="positif">Positif</option>
                <option value="negati">Negatif</option>
                <option value="netral">Netral</option>
                <option value="rilis">Rilis</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Media Pantau</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1" class="form-label">Halaman</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1" class="form-label">Kolom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1" class="form-label">Baris</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        
        <div class="form-group">
            <label for="ringkasan_berita" class="form-label">Ringkasan Berita</label> <br>
            <textarea id="ringkasan_berita" name="ringkasan_berita" rows="10" cols="50" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="tindak_lanjut" class="form-label">Saran Tindak Lanjut</label> <br>
            <textarea id="tindak_lanjut" name="tindak_lanjut" rows="10" cols="50" class="form-control"></textarea>
        </div>
        <button type="submit" class="save-button">
            <i class="fas fa-save"> </i> Save
        </button>
    </form>
</div>


@endsection

@section('js')

@endsection