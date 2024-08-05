@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Media Sosial</h1>
    <button style="background-color: #007BFF;" onclick="" >Tambah</button>
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