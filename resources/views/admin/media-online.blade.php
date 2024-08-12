@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection


@section('content')

<div>
    <h1 style="color: black">Daftar Media Online</h1>
    {{-- card berhasil input data --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> {{ session('success') }}
            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
        </div>
    @endif
    {{-- end card berhasil input data --}}
    
        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">ini berisi tentang data table</p> --}}
        <!-- DataTales Example -->
        {{-- <button class="blue-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" fill="#ffffff"/>
            </svg>
            Tambah Media Online
        </button> --}}
        <a href="/tambah-media-online" class="btn btn-primary" style="background-color: #007BFF; color: white;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" fill="#ffffff"/>
            </svg>
            Tambah Media Online
        </a>
        {{-- <button style="background-color: #007BFF;" onclick="" ><a href="/tambah-media-cetak"></a>Tambah</button> --}}
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Foto Cuplikan Berita</th>
                                <th>Media Publikasi</th>
                                <th>Waktu Pantau</th>
                                <th>Jenis Berita</th>
                                <th>Ringkasan Berita</th>
                                <th>Saran Tindak Lanjut</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                            <tr>
                                <th>Foto Cuplikan Berita</th>
                                <th>Media Pantau</th>
                                <th>Waktu Pantau</th>
                                <th>Halaman</th>
                                <th>Kolom</th>
                                <th>Baris</th>
                                <th>Jenis Berita</th>
                                <th>Ringkasan Berita</th>
                                <th>Saran Tindak Lanjut</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot> --}}
                        <tbody>
                            @foreach($media_onlines as $med_online )
                            <tr>
                                <td>
                                    {{-- <img src="{{ $med_online->cuplikan_berita }}" alt="{{  $med_online->cuplikan_berita }}"  style="align:center; width: 65px; margin-top: 5px;margin-buttom: 5px;"> --}}
                                    <img src="{{ asset('storage/media-online/'.$med_online->cuplikan_berita) }}" alt="{{  $med_online->cuplikan_berita }}"  style="align:center; width: 400px; margin-top: 5px;margin-buttom: 5px;">
                                </td>
                                <td>{{$med_online->media_publikasi}}</td>
                                <td>{{$med_online->waktu_tinjau}}</td>
                                <td>{{$med_online->jenis_berita}}</td>
                                <td>{{$med_online->ringkasan_berita}}</td>
                                <td>{{$med_online->saran_tindak_lanjut}}</td>
                                <td>
                                    <a href="/edit-media-online/{{$med_online->id}}/edit" class="btn edit-button" style= "color: white;" onclick="#">
                                        <i class="fas fa-edit"></i>                             
                                    </a>
                                    {{-- <button class="edit-button" style= "color: white;" action="/edit-media-online/{{$media_onlines->id}}"><i class="fas fa-edit"></i></button> --}}
                                    {{-- <a href="/edit-media-online/{{$media_onlines->id}}" class="edit-button" style="color: white;">
                                        <button style="color: white;"><i class="fas fa-edit"></i></button>
                                    </a> --}}
                                    <form action="/media-online/{{$med_online->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="delete-button" onclick="alert('Are you sure you want to delete Fani Windari?')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            {{-- <tr>
                                <td>
                                    <img src="{{asset('img/logo-diskominfo-sumut.jpg')}}" alt="" style="align:center; width: 65px; margin-top: 5px;margin-buttom: 5px;">
                                </td>
                                <td>CNN</td>
                                <td>7 agustus 2024</td>
                                <td>Rilis</td>
                                <td>agus fatoni adalah pj gubernur sekarang, dia akan bertanggun jawab untuk sumatera utara sampai dilantiknya guberbur baru</td>
                                <td>-</td>
                                <td>
                                    <a href="/edit-media-online" class="btn edit-button" style= "color: white;" onclick="openModal('Fani Windari', 'Operator')"><i class="fas fa-edit"></i></button>
                                
                                    </a>
                                    <button class="delete-button" onclick="alert('Are you sure you want to delete Fani Windari?')"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{asset('img/logo-diskominfo-sumut.jpg')}}" alt="" style="align:center; width: 65px;  margin-top: 5px;margin-buttom: 5px;">
                                </td>
                                <td>CNN</td>
                                <td>7 agustus 2024</td>
                                <td>Rilis</td>
                                <td>agus fatoni adalah pj gubernur sekarang, dia akan bertanggun jawab untuk sumatera utara sampai dilantiknya guberbur baru</td>
                                <td>-</td>
                                <td> 
                                    
                                    <a href="/edit-media-online" class="btn edit-button" style= "color: white;" onclick="openModal('Fani Windari', 'Operator')"><i class="fas fa-edit"></i></button>
                                
                                    </a>
                                    <button class="delete-button" onclick="alert('Are you sure you want to delete Fani Windari?')"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>                         --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

@endsection

