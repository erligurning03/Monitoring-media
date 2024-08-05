@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection


@section('content')

<div>
    <h1 style="color: black">Daftar Media Cetak</h1>
        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">ini berisi tentang data table</p> --}}
        <!-- DataTales Example -->
        <a href="/tambah-media-cetak" class="btn btn-primary" style="background-color: #007BFF; color: white;">Tambah Media Cetak</a>
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
                            <tr>
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
                                    <button class="edit-button" onclick="openModal('Fani Windari', 'Operator')"><i class="fas fa-edit"></i></button>
                                    <button class="delete-button" onclick="alert('Are you sure you want to delete Fani Windari?')"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
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
                                    <button class="edit-button" onclick="openModal('Fani Windari', 'Operator')"><i class="fas fa-edit"></i></button>
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
                                    <button class="edit-button" onclick="openModal('Fani Windari', 'Operator')"><i class="fas fa-edit"></i></button>
                                    <button class="delete-button" onclick="alert('Are you sure you want to delete Fani Windari?')"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

@endsection

