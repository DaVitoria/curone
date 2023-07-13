@extends('main')
@section('content')
<div class="main-panel">
<div class="content-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
          <div class="row ">
          <div class="col-12 grid-margin">
            <div class="card">
              <a href="{{route('register')}}"><button class="btn btn-sm btn-primary">+ Admin</button></a>
              <div class="card-body">
                <h4 class="card-title">Administradores do Sistema</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>level</th>
                        <th>Acção</th>
                        <th>Data de Submissão</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($user as $value)
                      <tr>
                        <td scope="row">{{$value->id}}</td>
                          <td>{{$value->name}}</td>
                          <td>{{$value->email}}</td>
                          <td>{{$value->level}}</td>
                        <td>
                          <form action="#" method="POST">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-warning btn-sm btn-rounded" href="#">Editar<i class="mdi mdi-reload btn-icon-prepend"></i></a>
                            <a class="btn btn-success btn-sm btn-rounded" href="#">Ver<i class="mdi mdi-reload btn-icon-prepend"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm btn-rounded">Deletar<i class="mdi mdi-file-check btn-icon-append"></i></button>
                          </form>
                        </td>
                        <td>{{$value->created_at}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection