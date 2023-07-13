@extends('base.main')
@section('content')
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Visualização</h3>
                <form >
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label>Resultados</label>
                          <input class="form-control" value="{{$result->status}}" >
                        </div>
                    </div>
                    <p class="terms"><i>Tenha a bondade de confirmar os seus dados, caso haja divergência contacte-nos!</i><a class="btn btn-warning btn-sm" href="{{route('results')}}">Voltar</a></p>
                  </form>
            </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection