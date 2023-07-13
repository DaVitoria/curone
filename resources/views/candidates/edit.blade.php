@extends('base.main')
@section('content')
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
      <div class="card col-lg-6 mx-auto">
        <div class="card-body px-5 py-5">
            @include('messages')
          <h3 class="card-title text-left mb-3">Editar dados do candidato</h3>
          <form class="form-sample" method="post" action="{{route('candidate.update', $candidate->id)}}">
            @csrf
            <div class="row g-3">
                <div class="col">
                <label>Nome</label>
                <input type="text" name="first_name" class="form-control p_input" placeholder="Digite os primeiros nomes" value="{{$candidate->first_name}}">
                @csrf
                @method('PUT')
                </div>
            
                <div class="col">
                <label>Apelido</label>
                <input type="text" name="last_name" class="form-control p_input" placeholder="Digite o seu apelido" value="{{$candidate->last_name}}">
              </div>
            </div>
            <div class="row g-3">
                <div class="col">
                <label>Data de Nascimento</label>
                <input type="date" name="date" class="form-control p_input" placeholder="Digite a data de nascimento" value="{{$candidate->date}}">
                </div>
            
                <div class="col my-1">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite oo seu e-mail" class="form-control p_input @error('email') é inválido @enderror value="{{old('email')}}" value="{{$candidate->email}}">
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
                    <input type="text" name="adress" class="form-control p_input" placeholder="Digite a sua proviniência" value="{{$candidate->adress}}">
                </div>
                  <!--Div para uploads-->
                <div class="col my-4">
                    <input type="text" name="file" class="form-control" id="inputGroupFile04" value="{{$candidate->file}}">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-2">
                    <label>Categoria</label>
                    <select class="form-control p_input @error('category') é inválido @enderror value="{{old('category')}}" name="category" value="{{$candidate->category}}">
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

                <div class="col">
                  <label for="vacancie_id">Vagas</label>
                  <select name="vacancie_id" id="vacancie_id" class="form-control" required>
                      <option value="">Selecione</option>
                          @foreach ($vacancie as $vacancie)
                          <option value="{{$vacancie->id}}">{{$vacancie->name}}</option>
                          @endforeach
                  </select>
                </div>
          
            <div class="row g-3">
              <div class="col">
                <label for="result_id">Resultados</label>
                <select name="result_id" id="result_id" class="form-control" required>
                    <option value="{{$candidate->vacancie->name}}"></option>
                        @foreach ($result as $result)
                        <option value="{{$result->id}}">{{$result->status}}</option>
                        @endforeach
                </select>
              </div>
          </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block enter-btn my-2 col-lg-4">Submeter</button>
            </div>
            <div class="d-flex">
              <a href="{{route('candidates')}}" class="btn btn-warning btn-sm col-lg-3 mr-2">
                <i class="mdi mdi-reload btn-icon-prepend"></i>Volatr</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
</div>
@endsection