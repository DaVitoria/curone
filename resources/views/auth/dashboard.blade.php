@extends('main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">

<div class="d-flex">
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Submetidos</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">{{$totalCandidate}}</h2>
              <p class="text-success ml-2 mb-0 font-weight-medium">Total submetidas!</p>
            </div>
            <h6 class="text-muted font-weight-normal"></h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Aprovados</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">0</h2>
              <p class="text-primary ml-2 mb-0 font-weight-medium">Total aprovados!</p>
            </div>
            <h6 class="text-muted font-weight-normal"></h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Suplentes</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">0</h2>
              <p class="text-danger ml-2 mb-0 font-weight-medium">Total suplentes!</p>
            </div>
            <h6 class="text-muted font-weight-normal"></h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
          </div>
        </div>
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
