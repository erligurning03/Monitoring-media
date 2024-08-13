@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection


@section('content')

<div>
    <h1 style="color: black">Daftar Media Cetak</h1>
    {{-- card berhasil input data --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> {{ session('success') }}
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
            </div>
        @endif
    {{-- card berhasil input data --}}

        <a href="/tambah-media-cetak" class="btn btn-primary" style="background-color: #007BFF; color: white;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" fill="#ffffff"/>
            </svg>
            Tambah Media Cetak
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
                                <th>Halaman</th>
                                <th>Kolom</th>
                                <th>Baris</th>
                                <th>Jenis Berita</th>
                                <th>Ringkasan Berita</th>
                                <th>Saran Tindak Lanjut</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($media_cetaks as $med_cetak)
                                
                            <tr>
                                <td>
                                    {{-- <img src="{{asset('img/logo-diskominfo-sumut.jpg')}}" alt="" style="align:center; width: 65px; margin-top: 5px;margin-buttom: 5px;"> --}}
                                    <img src="{{ asset('storage/media-cetak/'.$med_cetak->cuplikan_berita) }}" alt="{{  $med_cetak->cuplikan_berita }}"  style="align:center; width: 400px; margin-top: 5px;margin-buttom: 5px;">
                                </td>
                                <td>{{$med_cetak->media_publikasi}}</td>
                                <td>{{$med_cetak->waktu_tinjau}}</td>
                                <td>{{$med_cetak->halaman}}</td>
                                <td>{{$med_cetak->kolom}}</td>
                                <td>{{$med_cetak->baris}}</td>
                                <td>{{$med_cetak->jenis_berita}}</td>
                                <td>{{$med_cetak->ringkasan_berita}}</td>
                                <td>{{$med_cetak->saran_tindak_lanjut}}</td>
                                <td>  
                                    <a href="/edit-media-cetak/{{$med_cetak->id}}/edit" class="btn edit-button" style= "color: white;" onclick="#"><i class="fas fa-edit"></i></a>
                                    {{-- <form action="/media_cetaks"></form> --}}
                                    <form action="/media-cetak/{{$med_cetak->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="delete-button" onclick="alert('yakin ingin menghapus ?')"><i class="fas fa-trash-alt"></i></button>
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
                                <td>34</td>
                                <td>4</td>
                                <td>5</td>
                                <td>Rilis</td>
                                <td>agus fatoni adalah pj gubernur sekarang, dia akan bertanggun jawab untuk sumatera utara sampai dilantiknya guberbur baru</td>
                                <td>-</td>
                                <td>
                                    <a href="/edit-media-cetak" class="btn edit-button" style= "color: white;" onclick="openModal('Fani Windari', 'Operator')"><i class="fas fa-edit"></i></button>
                                
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
                                <td>34</td>
                                <td>4</td>
                                <td>5</td>
                                <td>Rilis</td>
                                <td>agus fatoni adalah pj gubernur sekarang, dia akan bertanggun jawab untuk sumatera utara sampai dilantiknya guberbur baru</td>
                                <td>-</td>
                                <td>
                                    <a href="/edit-media-cetak" class="btn edit-button" style= "color: white;" onclick="openModal('Fani Windari', 'Operator')"><i class="fas fa-edit"></i></button>
                                
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

