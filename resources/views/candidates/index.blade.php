@extends('main')
@section('content')

<div class="main-panel">
<div class="content-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <li class="nav-item dropdown d-none d-lg-block">
          {{-- <a class="nav-link btn btn-dark-light create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#"><b>Imprimir</b></a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{route('gerarPdf')}}">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-file-outline text-primary"></i>
                  <button class="btn btn-danger btn-sm btn-rounded">PDF</button>
                </div>
              </div>
              <div class="preview-item-content">
               
              </div>
            </a> --}}
        </li>
          <div class="row ">
          <div class="col-12 grid-margin">
            <div class="card">
              <a href="{{route('candidate.create')}}"><button class="btn btn-sm btn-primary">+ Candidatos</button></a>
              <div class="card-body">
                <h4 class="card-title">Candidatos</h4>
                <div class="table-responsive">
                  <table class="table" id="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Primeiro Nome</th>
                        <th>Apelido</th>
                        <th>Data de Nascimento</th>
                        <th>E-mail</th>
                        <th>Endereço</th>
                        <th>Documentos</th>
                        <th>Categoria</th>
                        <th>Vagas</th>
                        <th>Resultados</th>
                        <th>Data de Submissão</th>
                        <th>Acção</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($candidate as $value)
                      <tr>
                        <td scope="row">{{$value->id}}</td>
                          <td>{{$value->first_name}}</td>
                          <td>{{$value->last_name}}</td>
                          <td>{{date('d-F-Y',strtotime($value->date))}}</td>
                          <td>{{$value->email}}</td>
                          <td>{{$value->adress}}</td>
                          <td>{{$value->file}}</td>
                          <td>{{$value->category}}</td>
                          <td><div class="badge badge-outline-success">{{$value->vacancie->name}}</div></td>
                          <td> <div class="badge badge-outline-warning">{{$value->result->status}}</div> 
                          </td>
                          <td>{{date('d-F-Y',strtotime($value->created_at))}}</td>
                        <td>
                          <form action="{{route('candidate.destroy', $value->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-warning btn-sm btn-rounded" href="{{route('candidate.edit', $value->id)}}">Editar<i class="mdi mdi-reload btn-icon-prepend"></i></a>
                            <a class="btn btn-success btn-sm btn-rounded" href="{{route('candidate.show', $value->id)}}">Ver<i class="mdi mdi-reload btn-icon-prepend"></i></a>
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