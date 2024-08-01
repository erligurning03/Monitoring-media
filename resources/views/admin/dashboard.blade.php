@extends('layouts.app')

@section('content')

{{-- statistik monitoringn media online --}}
<h1 class="h3 mb-2 text-gray-800" style="text-align: center">statistik monitoring media</h1>

<div class="container">
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


{{--start statistik monitoringn media online --}}
{{-- <div class="card shadow mb-4" style="max-width: 100%; width: 32rem;">
    <canvas id="diagramBatang" style="width:100%;mmax-width:100%;"></canvas>
</div>

<div class="card shadow mb-4" style="max-width: 100%; width: 32rem;">
    <canvas id="diagramLingkaran" style="width:100%; max-width:100%;"></canvas>
</div> --}}
{{--end statistik monitoringn media online --}}

{{-- statistik monitoringn media cetak --}}
{{-- <div class="card shadow mb-4" style="max-width: 100%; width: 32rem;">
    <canvas id="diagramBatangCetak" style="width:100%;mmax-width:100%;"></canvas>
</div>

<div class="card shadow mb-4" style="max-width: 100%; width: 32rem;">
    <canvas id="diagramLingkarancetak" style="width:100%; max-width:100%;"></canvas>
</div> --}}

{{--end statistik monitoringn media cetak --}}



@endsection