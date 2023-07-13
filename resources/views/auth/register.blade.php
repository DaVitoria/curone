@extends('base.main')
@section('content')
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
      <div class="card col-lg-6 mx-auto">
        <div class="card-body px-5 py-5">
            @include('messages')
          <h3 class="card-title text-left mb-3">Crie nova conta</h3>
          <form method="post" action="{{route('register.save')}}">
            @csrf
            <div class="row g-3">
                <div class="col">
                    <label>Nome</label>
                  <input type="text" name="name" class="form-control" @error('name') é inválido @enderror placeholder="Digita o nome completo">
                  @error('name')
                    <div class="text-danger">{{$message}}</div>
                 @enderror
                </div>
                <div class="col">
                    <label>E-mail</label>
                  <input type="email" name="email" class="form-control" @error('email') é inválido @enderror placeholder="Seu e-mail">
                  @error('email')
                  <div class="text-danger">{{$message}}</div>
                @enderror
                </div>
              </div>
              <div class="row g-3">
                <div class="col">
                    <label>Senha</label>
                  <input type="password" name="password" class="form-control" @error('password') é inválido @enderror placeholder="Digita a senha">
                  @error('password')
                  <div class="text-danger">{{$message}}</div>
               @enderror
                </div>
                <div class="col">
                    <label>Confirmação</label>
                  <input type="password" name="password_confirmation" @error('password_confirmation')não é o mesmo @enderror class="form-control" placeholder="Repetir a senha">
                  @error('password_confirmation')
                  <div class="text-danger">{{$message}}</div>
               @enderror
                </div>
              </div>
            
            <button type="submit" class="btn btn-success btn-sm btn-block enter-btn col-lg-3 my-1">Submeter</button>
            <p class="sign-up text-center">Already have an Account?<a href="{{route('login')}}"> Sign Up</a></p>
            <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
          </form>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div> 
</div>
@endsection
