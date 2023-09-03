@extends('base.bisa.mains')
@section('content')

<div class="row ml-0 mr-0">
    @foreach ($pain as $vacancie)

    <div class="col-md-6 pr-0">
        <div class="card">
            <img class="card-img" src="{{asset('assets/assetss/images/funciona.png')}}" alt="">
            <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                <p><strong>{{$vacancie->status}}</strong></p>
                <hr />
                <h2>{{$vacancie->name}}</h2>
                {{-- <a href="" ata-bs-toggle="modal" data-bs-target="#add" class="btn">Submissão</a> --}}
                <a class="btn btn-rounded" href="{{route('candidate.create')}}">Submissão</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 pl-0">
        <div class="card">
            <img class="card-img" src="{{asset('assets/assetss/images/right-img.jpg')}}" alt="">
            <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                <h6>Vagas: {{$vacancie->number}}</h6>
                <hr />
                <h3>{{$vacancie->nrvacancie}}</h3>
                <h2>{{$vacancie->description}}</h2>
                <a href="" class="btn">Detalhes</a>
            </div>
        </div>
    </div>

    <div class="col-md-3 pr-0 first">
        <div class="card">
            <img class="card-img" src="{{asset('assets/assetss/images/izi.png')}}" alt="">
            <div class="card-img-overlay">
                <h5></h5>
            </div>
        </div>
    </div>

    <div class="col-md-3 pl-0 pr-0">
        <div class="card">
            <img class="card-img" src="{{asset('assets/assetss/images/izi.png')}}" alt="">
            <div class="card-img-overlay">
                <h5></h5>
            </div>
        </div>
    </div>

    <div class="col-md-3 pl-0 pr-0">
        <div class="card">
            <img class="card-img" src="{{asset('assets/assetss/images/izi.png')}}" alt="">
            <div class="card-img-overlay">
                <h5></h5>
            </div>
        </div>
    </div>

    <div class="col-md-3 pl-0 last">
        <div class="card">
            <img class="card-img" src="{{asset('assets/assetss/images/izi.png')}}" alt="">
            <div class="card-img-overlay">
                <h5></h5>
            </div>
        </div>
    </div>
    @endforeach
</div>

</header>

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
                            @foreach ($pain as $vacancie)
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

