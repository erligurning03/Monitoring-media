@extends('layouts.app')

@section('content')



{{-- statistik monitoringn media online --}}
<h1 class="h3 mb-2 fw-bold" style="text-align: center; color:black"><strong>statistik monitoring media</strong></h1>

<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success')}}
        </div>
    @endif
    
        {{-- kode ini untuk menunjukkan kalau dia login maka munculkan bagian x dari web => tampilkan hanya jika dia login--}}
        {{-- @if(Auth::check)
            kontennya yg ma ditampilkan
        @endif --}}


    <div class="row">
      <div class="col-sm">
        <div class="card shadow mb-2" style="max-width: 100%; width: 28rem;">
            <canvas id="diagramBatang" style="width:100%;mmax-width:100%;"></canvas>
        </div>
      </div>
      <div class="col-sm">
        <div class="card shadow mb-2" style="max-width: 100%; width: 28rem;">
            <canvas id="diagramLingkaran" style="width:100%; max-width:100%;"></canvas>
        </div>
      </div>
    </div>
    <!-- Divider -->
    <hr class="sidebar-divider my-0 mb-3 mt-2">

    <div class="row">
        <div class="col-sm">
            <div class="card shadow mb-4" style="max-width: 100%; width: 28rem;">
                <canvas id="diagramBatangCetak" style="width:100%;mmax-width:100%;"></canvas>
            </div>
        </div>
        <div class="col-sm">
            <div class="card shadow mb-4" style="max-width: 100%; width: 28rem;">
                <canvas id="diagramLingkarancetak" style="width:100%; max-width:100%;"></canvas>
            </div>
        </div> 
    </div>
</div>



@endsection

@section('js')
<!-- chart erli untuk statistik dashboard -->
<script src="js/chart-admin.js"></script>
@endsection