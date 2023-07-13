@extends('main')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
              <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <a href="{{route('vacancie.create')}}"><button class="btn btn-sm btn-primary">+ Vagas</button></a>
                  <div class="card-body">
                    <h4 class="card-title">Vagas disponíveis</h4>
                    <div class="table-responsive">
                      <table class="table" id="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Vagas Disponíveis</th>
                            <th>Concurso</th>
                            <th>Nr de Concurso</th>
                            <th>Disponibilidade</th>
                            <th>Descrição</th>
                            <th>Tec Responsável</th>
                            <th>Data de Submissão</th>
                            <th>Acção</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($vacancie as $value)
                          <tr>
                            <td scope="row">{{$value->id}}</td>
                              <td>{{$value->number}}</td>
                              <td>{{$value->name}}</td>
                              <td>{{$value->nrvacancie}}</td>
                              <td>{{$value->status}}</td>
                              <td class="line-break">{{$value->description}}</td>
                              <td>{{$value->user->name}}</td>
                              <td>{{$value->created_at}}</td>
                            <td>
                              <form action="{{route('vacancie.destroy', $value->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a class="btn btn-warning btn-sm btn-rounded" href="{{route('vacancie.edit', $value->id)}}">Editar<i class="mdi mdi-reload btn-icon-prepend"></i></a>
                                <a class="btn btn-success btn-sm btn-rounded" href="{{route('vacancie.show', $value->id)}}">Ver<i class="mdi mdi-reload btn-icon-prepend"></i></a>
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