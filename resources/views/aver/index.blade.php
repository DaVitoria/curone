@extends('main1')
@section('content')
<div class="main-panel">
  <div class="content-wrapper flex">

    <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            <a href="{{route('auto.pain')}}"><button class="btn btn-sm btn-primary">Voltar</button></a>
            <div class="card-body">
              <h4 class="card-title">Candidatos</h4>
              <div class="table-responsive">
                <table class="table" id="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Primeiro Nome</th>
                      <th>Apelido</th>
                      <th>E-mail</th>
                      <th>Endereço</th>
                      <th>Documentos</th>
                      <th>Categoria</th>
                      <th>Vagas</th>
                      <th>Resultados</th>
                      <th>Data de Submissão</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($candidate as $value)
                    <tr>
                      <td scope="row">{{$value->id}}</td>
                        <td>{{$value->first_name}}</td>
                        <td>{{$value->last_name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->adress}}</td>
                        <td>{{$value->file}}</td>
                        <td>{{$value->category}}</td>
                        <td><div class="badge badge-outline-success">{{$value->vacancie->name}}</div></td>
                        <td> <div class="badge badge-outline-warning">{{$value->result->status}}</div>
                        </td>
                        <td>{{date('d-F-Y',strtotime($value->created_at))}}</td>
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
