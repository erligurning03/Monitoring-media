@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection
@section('content')

    <!-- Page Heading -->
    <div>
        <h1 style="color: black">Daftar Media Sosial</h1>
            <!-- Page Heading -->
            {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <p class="mb-4">ini berisi tentang data table</p> --}}
            <!-- DataTales Example -->
            <button class="blue-button" onclick="openAddUserModal()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                    <!--! Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" fill="#ffffff"/>
                </svg>
                Tambah Media Online
            </button>
            {{-- <button style="background-color: #007BFF;" onclick="" ><a href="/tambah-media-cetak"></a>Tambah</button> --}}
            <div class="card shadow mb-4">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>cuplikan sosial media</th>
                            <th>platform sosial media</th>
                            <th>jenis komentar</th>
                            <th>ringkasan berita</th>
                            <th>saran tindak lanjut</th>
                            <th>waktu tinjau</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>foto</td>
                            <td>instagram</td>
                            <td>negatif</td>
                            <td>x mencegah pananggulangan banjir bandang</td>
                            <td>penjarakan pelaku</td>
                            <td>3 agustus 2024</td>
                            <td>
                                <button class="edit-button" onclick=""><i class="fas fa-edit"></i></button>
                                <button class="delete-button" onclick="alert('Are you sure you want to delete ')"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>foto 2</td>
                            <td>twitter</td>
                            <td>positif</td>
                            <td>sambutan presiden terhadap pon</td>
                            <td>-</td>
                            <td>4 agustus 2024</td>
                            <td>
                                <button class="edit-button" onclick=""><i class="fas fa-edit"></i></button>
                                <button class="delete-button" onclick="alert('Are you sure you want to delete ?')"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>foto 3</td>
                            <td>facebook</td>
                            <td>netral</td>
                            <td>bagi bagi bansos dimedan</td>
                            <td>-</td>
                            <td>5 agustus 2024</td>
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


@endsection