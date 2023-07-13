@extends('base.main')
@section('content')
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
      <div class="card col-lg-6 mx-auto">
        <div class="card-body px-5 py-5">
            @include('messages')
          <h3 class="card-title text-left mb-3">Adcionar Resultado</h3>
          <form class="form-sample" method="post" action="{{route('result.store')}}">
            @csrf
            <div class="row g-3">
              <div class="col">
                    <label>Resultados</label>
                    <select class="form-control p_input @error('status') é inválido @enderror value="{{old('status')}}" name="status">
                        @error('status')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                        <option>Apurado</option>
                        <option>Suplente</option>
                        <option>Não Apurado</option>
                        <option>Em progresso</option>
                        </select>
              </div>  
                  <div class="col">
                    <label for="user_id">Funcioário</label>
                    <select value="user_id" name="user_id" class="form-control p_input" required>
                    <option value="">Selecione</option>
                    @foreach ($user as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>                  
                    @endforeach
                   </select>
                  </div>
            </div>
          
        
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block enter-btn my-2 col-lg-4">Submeter</button>
            </div>
            <div class="d-flex">
              <a href="{{route('results')}}" class="btn btn-warning btn-sm col-lg-3 mr-2">
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