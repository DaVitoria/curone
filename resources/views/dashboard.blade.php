@extends('main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    
    <div class="card my-3">
    <div class="card-body">
      <h5>Submetidos</h5>
      <div class="row">
        <div class="col-8 col-sm-8 col-xl-4 my-auto">
          <div class="d-flex d-sm-block d-md-flex align-items-center">
            <h2 class="mb-0">{{$totalCandidate}}</h2>
            <p class="text-success ml-2 mb-0 font-weight-medium"></p>
          </div>
          <h6 class="text-muted font-weight-normal"></h6>
        </div>
        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
          <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
        </div>
      </div>
    </div>
  </div>
 

      <div class="card my-4">
        <div class="card-body">
          <h5>Avaliados</h5>
          <div class="row">
            <div class="col-4 col-sm-8 col-xl-4 my-auto">
              <div class="d-flex d-sm-block d-md-flex align-items-center">
                <h2 class="mb-0">0</h2>
                <p class="text-danger ml-2 mb-0 font-weight-medium"></p>
              </div>
              <h6 class="text-muted font-weight-normal"></h6>
            </div>
            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
              <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
            </div>
          </div>
        </div>
      </div>
   
      <div class="card my-4">
        <div class="card-body">
          <h4 class="card-title">Gráficos</h4>
          <canvas id="doughnutChart" style="height:250px"></canvas>
        </div>
      </div>
   
  </div>
@endsection
