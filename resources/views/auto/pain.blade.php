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
                <a type="button" class="btn" data-toggle="modal" data-target="#meuModal">Detalhes</a>
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


<div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Conteúdo do modal -->
                <p>Este é o conteúdo do seu modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <!-- Outros botões do modal, se necessário -->
            </div>
        </div>
    </div>
</div>
@endsection

