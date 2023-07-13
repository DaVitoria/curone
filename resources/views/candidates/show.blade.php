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
                        <div class="col">
                            <label>Nome</label>
                          <input class="form-control" value="{{$candidate->first_name}}" >
                        </div>
                        <div class="col">
                            <label>Apelido</label>
                          <input class="form-control" value="{{$candidate->last_name}}" >
                        </div>
                    </div>
                    <div class="row g-3">
                       
                        <div class="col">
                            <label>E-mail</label>
                          <input class="form-control" value="{{$candidate->email}}">
                        </div>
                        <div class="col">
                            <label>Endereço</label>
                            <input class="form-control" value="{{$candidate->adress}}" >
                        </div>
                    </div>
                      <div class="row g-3">
                        <div class="col">
                            <label>Documentos</label>
                            <input class="form-control" value="{{$candidate->file}}" >
                        </div>
                        <div class="col">
                            <label>Categoria</label>
                            <input class="form-control" value="{{$candidate->category}}" >
                        </div>
                      </div>
                      <div class="row g-3">
                        <div class="col">
                            <label>Data de Submissão</label>
                            <input class="form-control" value="{{$candidate->created_at}}" >
                        </div>
                        <div class="col">
                            <label>Resultados</label>
                            <input class="form-control badge badge-warning" value="{{$candidate->result->status}}"><i class="mdi mdi-arrow-down"></i>
                        </div>
                        <div class="col">
                          <label>Concurso</label>
                          <input class="form-control badge badge-warning" value="{{$candidate->vacancie->name}}"><i class="mdi mdi-arrow-down"></i>
                      </div>
                      </div>
                    <p class="terms"><i>Tenha a bondade de confirmar os seus dados, caso haja divergência contacte-nos!</i><a class="btn btn-warning btn-sm" href="{{route('candidates')}}">Voltar</a></p>
                  </form>
            </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection