@extends('main1')
@section('content')
<div class="main-panel">
  <div class="content-wrapper flex">
    <div class="d-flex">
    <span class="">
      <a href="https://www.bootstrap.com/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Serviço de Emprego</a><br>
    </span>
    <span class="">
      <a href="{{route('aver.index')}}" class="btn btn-outline-light btn-rounded get-started-btn">Ver</a><br>
    </span>
    </div>
    <table class="table table-sm mr-4" id="table">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Vagas</th>
          <th>Estado</th>
          <th>Acção</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($vacancies as $vacancie)
        <tr>
          <td>{{$vacancie->id}}</td>
          <td>{{$vacancie->name}}</td>
          <td>{{$vacancie->number}}</td>
          <td>{{$vacancie->status}}</td>
          <td>
            <a class="btn btn-warning btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target="#description" href="{{route('vacancie.show', $vacancie->id)}}">Detalhes<i class="mdi mdi-reload btn-icon-prepend"></i></a>
            <a class="btn btn-success btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target="#add" href="">Concorrer<i class="mdi mdi-reload btn-icon-prepend"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </di>
  </div>
  <div class="modal fade" id="description" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descrição</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <!-- Conteúdo do modal -->
                <p>Concurso número {{ $vacancie->nrvacancie}}</p>
                <p>{{$vacancie->description}}</p>
    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal create --}}
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Submissão da Candidatura</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            @include('../messages')
          <form class="form-sample" method="post" action="{{route('candidate.store')}}">
            @csrf
            <div class="row g-3">
                <div class="col">
                <label>Nome</label>
                <input type="text" name="first_name" class="form-control p_input" placeholder="Digite os primeiros nomes">
                </div>
            
                <div class="col">
                <label>Apelido</label>
                <input type="text" name="last_name" class="form-control p_input" placeholder="Digite o seu apelido">
              </div>
            </div>
            <div class="row g-3">
                <div class="col">
                <label>Data de Nascimento</label>
                <input type="date" name="date" class="form-control p_input" placeholder="Digite a data de nascimento">
                </div>
            
                <div class="col my-1">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite oo seu e-mail" class="form-control p_input @error('email') é inválido @enderror value="{{old('email')}}">
                @error('email')
                    <span class="text-danger">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                </div>
            </div> 
            <div class="row g-3">
                <div class="col">
                    <label>Endereço</label>
                    <input type="text" name="adress" class="form-control p_input" placeholder="Digite a sua proviniência">
                </div>
                  <!--Div para uploads-->
                <div class="col my-4">
                  <label>Requisitos</label>
                    <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-2">
                    <label>Categoria</label>
                    <select class="form-control p_input @error('category') é inválido @enderror value="{{old('category')}}" name="category">
                        @error('category')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                        <option>DN1</option>
                        <option>DN3</option>
                        <option>DN4</option>
                        <option>Tec.Adm</option>
                        <option>Auxiliar</option>
                        </select>
                </div>

                <div class="col-lg-3">
                  <label for="vacancie_id">Vagas</label>
                  <select name="vacancie_id" id="vacancie_id" class="form-control" required>
                      <option value="">Selecione</option>
                          @foreach ($vacancies as $vacancie)
                          <option value="{{$vacancie->id}}">{{$vacancie->name}}</option>
                          @endforeach
                  </select>
                </div>
              <div class="row g-3">
                <div class="col">
                  <label for="result_id">Confirmação</label>
                  <select name="result_id" id="result_id" class="form-control" required>
                      <option value="Em Progresso">Selecione</option>
                          @foreach ($result as $result)
                          <option value="{{ $result->id }}">{{$result->status}}</option>
                          @endforeach
                  </select>
                </div>
            </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  </div>
</div>

@endsection