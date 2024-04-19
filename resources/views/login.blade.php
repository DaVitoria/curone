
@extends('mainI')

@section('content')

<body class="login-page">
<div
    class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{ asset('assets/vendors/images/login-page-img.png') }}" alt="" />
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">
                        Painel de Login
                        </h2>
                    </div>
                    @if(session('error'))
                    <div class="text-danger text-center">{{session('error')}}</div>
                    @endif
                    <form method="POST" action="{{route('postLogin')}}">
                        @csrf
                        <div class="input-group custom">
                            <span>Contacto<input
                                type="text"
                                name="phone"
                                class="form-control form-control-lg"
                                placeholder="+(258) 8XX XXX XXX"
                            /></span>
                            <div class="input-group-append custom">
                                <span class="input-group-text"
                                    ><i class="icon-copy dw dw-user1"></i
                                ></span>
                            </div>
                        </div>
                        @error('phone')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="input-group custom">
                            <span>Senha<input
                                type="password"
                                name="password"
                                class="form-control form-control-lg"
                                placeholder="******"
                            />
                            <div class="input-group-append custom">
                                <span class="input-group-text"
                                    ><i class="dw dw-padlock1"></i
                                ></span>
                            </div></span>

                        </div>
                        @error('password')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="forgot-password">
                                    <a href="">Esqueceu a senha?</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Entrar" />
                                </div>

                                <div class="input-group mb-3">
                                    <a
                                        class="btn btn-outline-primary btn-lg btn-block"
                                        href="{{route('register')}}"
                                        >Cadastrar-se!</a>
                                </div>
                                <div class="input-group mb-0">
                                    <a
                                        class="btn btn-outline-primary btn-sm btn-block"
                                        href="/"
                                        >Voltar</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

