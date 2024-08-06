@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
<!-- Link Font Awesome dari CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
@endsection

@section('content')

    <!-- Page Heading -->
    <div>
        <h1 style="color: black">Daftar Media Sosial</h1>
        <a href="/tambah-media-sosial" class="btn btn-primary" style="background-color: #007BFF; color: white;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" fill="#ffffff"/>
            </svg>
            Tambah Media Sosial
        </a>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Cuplikan Sosial Media</th>
                                <th>Platform Sosial Media</th>
                                <th>Jenis Komentar</th>
                                <th>Ringkasan Berita</th>
                                <th>Saran Tindak Lanjut</th>
                                <th>Waktu Tinjau</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Foto</td>
                                <td>Instagram</td>
                                <td>Negatif</td>
                                <td>X mencegah penanggulangan banjir bandang</td>
                                <td>Penjarakan pelaku</td>
                                <td>3 Agustus 2024</td>
                                <td>
                                    <button class="edit-button" onclick=""><i class="fas fa-edit"></i></button>
                                    <button class="delete-button" onclick="alert('Are you sure you want to delete?')"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Foto 2</td>
                                <td>Twitter</td>
                                <td>Positif</td>
                                <td>Sambutan presiden terhadap PON</td>
                                <td>-</td>
                                <td>4 Agustus 2024</td>
                                <td>
                                    <button class="edit-button" onclick=""><i class="fas fa-edit"></i></button>
                                    <button class="delete-button" onclick="alert('Are you sure you want to delete?')"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Foto 3</td>
                                <td>Facebook</td>
                                <td>Netral</td>
                                <td>Bagi bagi bansos di Medan</td>
                                <td>-</td>
                                <td>5 Agustus 2024</td>
                                <td>
                                    <button class="edit-button" onclick=""><i class="fas fa-edit"></i></button>
                                    <button class="delete-button" onclick="alert('Are you sure you want to delete?')"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
