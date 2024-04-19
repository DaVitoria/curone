@extends('../../main')
@section('content')
          <!-- content -->
          <div class="page-content">
            <div class="page-content-inner">

                <div class="d-flex">
                    <nav id="breadcrumbs" class="mb-3">
                        <ul>
                            <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
                            <li><a href="#"> Categorias </a></li>
                            <li> Web Development</li>
                        </ul>
                    </nav>
                </div>



                <div uk-grid="">
                    <div class="uk-width-1-3@m">

                        <nav class="responsive-tab style-3 setting-menu card" uk-sticky="top:30 ; offset:100; media:@m ;bottom:true; animation: uk-animation-slide-top">
                            <h5 class="mb-0 p-3 uk-visible@m"> Categorias </h5>
                            <hr class="m-0 uk-visible@m">
                            <ul>
                                <li class="uk-active">
                                    <a href="courses.html"> <i class="uil-brush-alt "></i> Web Development
                                        <span class="badge badge-light mr-2 badge-sm"> 21</span> </a>
                                </li>

                                <li>
                                    <a href="courses.html"> <i class="uil-android-alt"></i> Mobile App <span class="badge badge-light mr-2 badge-sm"> 12</span></a>
                                </li>

                                <li>
                                    <a href="courses.html"> <i class="uil-palette"></i> Desings
                                        <span class="badge badge-light mr-2 badge-sm"> 14</span></a>
                                </li>

                            </ul>
                        </nav>

                    </div>

                    <div class="uk-width-2-3@m">

                        <div class="card rounded">
                            <div class="p-3 d-flex align-items-center justify-content-between">
                                <h5 class="mb-0"> Web Development </h5> <span> 16 Cursos </span>
                            </div>
                            <hr class="m-0">

                            <hr class="m-0">

                            <div class="uk-grid-small p-4" uk-grid="">
                                <div class="uk-width-1-3@m">
                                    <img src="{{asset('assets\images\course\5.png')}}" class="  rounded" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="mb-2"> Web</h5>
                                    <p class="uk-text-small mb-2"> Created by <a href="#"> Jonathan Madano </a>
                                    </p>
                                    <p class="mb-0 uk-text-small mt-3">
                                        <span class="mr-3 bg-light p-2 mt-1"> 16 Enerolled</span><span> Last updated
                                            10/2019 </span>
                                    </p>
                                </div>
                            </div>

                            <hr class="m-0">

                            <hr class="m-0">

                            <div class="uk-grid-small p-4" uk-grid="">
                                <div class="uk-width-1-3@m">
                                    <img src="{{asset('assets\images\course\2.png')}}" class="  rounded" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="mb-2"> Anglular Framework </h5>
                                    <p class="uk-text-small mb-2"> Created by <a href="#"> Jonathan Madano </a>
                                    </p>
                                    <p class="mb-0 uk-text-small mt-3">
                                        <span class="mr-3 bg-light p-2 mt-1"> 16 Enerolled</span><span> Last updated
                                            10/2019 </span>
                                    </p>
                                </div>
                            </div>

                            <hr class="m-0">

                            <div class="uk-grid-small p-4" uk-grid="">
                                <div class="uk-width-1-3@m">
                                    <img src="{{asset('assets\images\course\3.png')}}" class="  rounded" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="mb-2"> JavaScript </h5>
                                    <p class="uk-text-small mb-2"> Created by <a href="#"> Jonathan Madano </a>
                                    </p>
                                    <p class="mb-0 uk-text-small mt-3">
                                        <span class="mr-3 bg-light p-2 mt-1"> 16 Enerolled</span><span> Last updated
                                            10/2019 </span>
                                    </p>
                                </div>
                            </div>

                        </div>



                        <ul class="uk-pagination mt-5 uk-flex-center" uk-margin="">
                            <li class="uk-active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="uk-disabled"><span>...</span></li>
                            <li><a href="#"><span uk-pagination-next=""></span></a></li>
                        </ul>



                    </div>


                </div>
@endsection
