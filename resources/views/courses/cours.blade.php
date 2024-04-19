@extends('../main')

@section('content')
<div class="page-content">
            <div class="page-content-inner">

                <div class="d-flex justify-content-between mb-3">
                    <h3> Cursos (3) </h3>

                    <div>
                        <a href="{{route('cria_curso')}}" class="btn btn-default">
                            <i class="uil-plus"> </i> Novo Curso
                        </a>
                    </div>
                </div>

                <div class="uk-child-width-1-3@m" uk-grid="" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200">

                    <div>
                        <a href="#">
                            <div class="card animate-this uk-inline-clip">
                                <img src="{{asset('assets\images\course\2.png')}}" alt="">
                                <div class="card-body text-center pb-3">
                                    <h6 class=" mb-0"> Angular Framework </h6>
                                </div>
                                <div class="card-footer py-0 border-top-0">
                                    <div class="row align-items-center text-center">
                                        <div class="col-6 py-3">
                                            <a href="#" class="text-muted"> 1200 Mzn  </a>
                                        </div>
                                        <div class="col-6 py-3">
                                            <a href="#" class="text-muted"> 20 Enrolled </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="#">
                            <div class="card animate-this uk-inline-clip">
                                <img src="{{asset('assets\images\course\3.png')}}" alt="">
                                <div class="card-body text-center pb-3">
                                    <h6 class=" mb-0"> JavaScript </h6>
                                </div>
                                <div class="card-footer py-0 border-top-0">
                                    <div class="row align-items-center text-center">
                                        <div class="col-6 py-3">
                                            <a href="#" class="text-muted"> 900 Mzn </a>
                                        </div>
                                        <div class="col-6 py-3">
                                            <a href="#" class="text-muted"> 8 Enrolled </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="#">
                            <div class="card animate-this uk-inline-clip">
                                <img src="{{asset('assets\images\course\1.png')}}" alt="">
                                <div class="card-body text-center pb-3">
                                    <h6 class=" mb-0"> Programação Web </h6>
                                </div>
                                <div class="card-footer py-0 border-top-0">
                                    <div class="row align-items-center text-center">
                                        <div class="col-6 py-3">
                                            <a href="#" class="text-muted"> 2300 Mzn </a>
                                        </div>
                                        <div class="col-6 py-3">
                                            <a href="#" class="text-muted"> 21 Enrolled </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                <ul class="uk-pagination my-5 uk-flex-center" uk-margin="">
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="uk-disabled"><span>...</span></li>
                    <li><a href="#"><span uk-pagination-next=""></span></a></li>
                </ul>



@endsection
