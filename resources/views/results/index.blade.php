@extends('main')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
              <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <a href="{{route('result.create')}}"><button class="btn btn-sm btn-primary">+ Resultados</button></a>
                  <div class="card-body">
                    <h4 class="card-title">Resultados</h4>
                    <div class="table-responsive">
                      <table class="table" id="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Resultados</th>
                            <th>Funcionário</th>
                            <th>Data de Submissão</th>
                            <th>Acção</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($result as $value)
                          <tr>
                            <td scope="row">{{$value->id}}</td>
                              <td>{{$value->status}}</td>
                              <td>{{$value->user->name}}</td>
                              <td>{{$value->created_at}}</td>
                            <td>
                              <form action="{{route('result.destroy', $value->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a class="btn btn-warning btn-sm btn-rounded" href="{{route('result.edit', $value->id)}}">Editar<i class="mdi mdi-reload btn-icon-prepend"></i></a>
                                <a class="btn btn-success btn-sm btn-rounded" href="{{route('result.show', $value->id)}}">Ver<i class="mdi mdi-reload btn-icon-prepend"></i></a>
                                <button type="submit" class="btn btn-danger btn-sm btn-rounded">Deletar<i class="mdi mdi-file-check btn-icon-append"></i></button>
                              </form>
                            </td>
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