
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
            <div class="wizard-content">
<form class="tab-wizard wizard-circle wizard vertical" action="{{route('registerSave')}}" method="POST">
@csrf
    <!-- Parte 1 -->
<h5>Info Pessoal</h5>
<section>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Primeiro Nome :</label>
            <input type="text" name="fname" class="form-control" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Apelido :</label>
            <input type="text" name="lname" class="form-control" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Morada :</label>
            <input type="text" name="address" class="form-control" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Contacto :</label>
            <input type="text"  name="number" class="form-control" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Seleciona a sua Cidade :</label>
            <select class="custom-select form-control" name="city">
                <option value="">Escolher</option>
                <option value="Maputo">Maputo</option>
                <option value="Xai-Xai">Gaza</option>
                <option value="Inhambane">Inhambane</option>
                <option value="Chimoio">Manica</option>
                <option value="Beira">Sofala</option>
                <option value="Tete">Tete</option>
                <option value="Quelimane">Zambézia</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Data de Nascimento :</label>
            <input
                type="text"
                name="born"
                class="form-control date-picker"
                placeholder="Marca a data"
            />
        </div>
    </div>
</div>
</section>
<!-- Parte 2 -->
<h5>Dados da Conta</h5>
<section>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Seleciona a conta :</label>
            <select class="custom-select form-control">
                <option value="">Escolher</option>
                <option value="821111111">Usuário Actual</option>
            </select>
        </div>
        <div class="form-group">
        <span>Photo* <input type="file" name="photo" class="form-control" id="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload"></span>
        <div class="input-group-append custom">
        <span class="input-group-text"><i class="icon-copy dw dw-image"></i></span>
            </div>
        </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
                <label>Seleciona o tipo da conta :</label>
                <select class="custom-select form-control" name="status">
                    <option value="">Escolher</option>
                    <option value="Activo">Poupança</option>
                    <option value="Inactivo">Normal</option>
                </select>
        </div>
    </div>
</div>
</section>
<!-- Parte 3 -->
<h5>Segurança</h5>
<section>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <input type="text"
        name="password"
        class="form-control form-control-lg"
		placeholder="Nova Senha"/>
	    <div class="input-group-append custom">
		<span class="input-group-text"><i class="dw dw-padlock1"></i></span></div>
        </div>
        <div class="form-group">
        <input type="password"
        name="confPassword"
        class="form-control form-control-lg"
		placeholder="Confirme a Senha"/>
	    <div class="input-group-append custom">
		<span class="input-group-text"><i class="dw dw-padlock1"></i></span></div>
        </div>
    </div>
</div>
</section>
<!-- Parte 4 -->
<h5>Conclusão</h5>
<section>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Conclusão</label>
            <select class="form-control">
                <option>Concluir</option>
                <option>Activar</option>
            </select>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary me-2">Guardar</button>
</section>
</form>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
