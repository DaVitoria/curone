@extends('base.main')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">
        <div class="card-body px-5 py-5">
            @include('messages')
            <h3 class="card-title text-left mb-3"><a href="#">Admin-Login</a></h3>
            @if(session('error'))
            <div class="text-danger text-center">{{session('error')}}</div>
            @endif
            <form action="{{route('login.action')}}" method="post">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
               </ul>
            </div>
            @endif

            @error('email')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>E-mail *</label>
                <input type="email" name="email" class="form-control p_input"  placeholder="Digite o seu e-mail">
                <span class="fas fa-envelope"></span>
            </div>
            @error('password')
                <div class="text-danger">{{$message}}</div>
                @enderror
            <div class="form-group">
                <label>Password *</label>
                <input type="password" name="password" class="form-control p_input" placeholder="Digite a sua senha">
                <span class="fas fa-lock"></span>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between">
                <a href="#" class="forgot-pass">Forgot password</a>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
            </div>
    
            <div class="text-center">
                <a href="{{route('register')}}" class="small my-6 justify-content-between">Criar uma conta</a>
            </div>
            </form>
        </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    </div>
    <!-- row ends -->
    </div>
</div>
@endsection