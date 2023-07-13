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
                            <label>Vagas</label>
                          <input class="form-control" value="{{$vacancie->number}}" required>
                        </div>

                        <div class="col-lg-6">
                          <label>Nome</label>
                        <input class="form-control" value="{{$vacancie->name}}" required>
                      </div>
                      <div class="col-lg-6">
                        <label>Número do Concurso</label>
                      <input class="form-control" value="{{$vacancie->nrvacancie}}" required>
                    </div>
                    </div>
                    </div>
                    <div class="row g-3">
                      <div class="col-lg-5 mx-4">
                        <label>Disponibilidade</label>
                      <input class="form-control" value="{{$vacancie->status}}" required>
                    </div>
                    <div class="col-lg-6">
                      <label>Descrição do Concurso</label>
                    <input class="form-control" value="{{$vacancie->description}}" required>
                  </div>
                    <div class="col-lg-5">
                      <label for="user_id">Funcioário</label>
                      <input class="form-control" value="{{$vacancie->user->name}}" required>
                      </div>
                   
                    </div>
                    <p class="terms"><i>Tenha a bondade de confirmar os seus dados, caso haja divergência contacte-nos!</i><a class="btn btn-warning btn-sm" href="{{route('vacancies')}}">Voltar</a></p>
                  </form>
            </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection