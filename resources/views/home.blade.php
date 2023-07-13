<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>SDEJT-Manjacaze</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('assets/images1/icon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets/images1/icon.ico')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css1/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets/css1/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css1/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css1/custom.css')}}">

</head>

<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li style="color: rgb(24, 218, 30)">
                                    <i class="fa-brands fa-airbnb"></i> Ingresso no Aparelho do Estado
                                </li>
                                <li style="color: rgb(218, 137, 24)">
                                    <i class="fa-brands fa-airbnb"></i> Faça já a sua subscrição
                                </li>
                                <li style="color:  rgb(218, 24, 24)">
                                    <i class="fa-brands fa-airbnb"></i> Dentro do prazo até 10/2023
                                </li>
                                <li style="color: rgb(24, 118, 218)">
                                    <i class="fa-brands fa-airbnb"></i> Aproeita a oportunidade!
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="">
						<option> PORT</option>
						<option> ENG</option>
						<option> FRANS</option>
					</select>
                    </div>
                    <div class="right-phone-box">
                        <p>Contacte-nos <a href="#"></a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="/"> Home</a></li>
							<li><a href="{{route('pack.index')}}"> Concursos</a></li>
                            <li><a href="#"> Localização</a></li>
                            <li><a href="#"> Contactos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
    </header>
    <!-- End Main Top -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides" data-bs-ride="carousel">
        <ul class="slides-container">
            <li class="text-left">
                <img src="{{asset('assets/images1/gra.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bem Vindo ao SDEJT de Mandlakazi</strong></h1>
                            <p class="m-b-40"><b>Juntos unidos pela uma educação qualitativa, equitativa <br> e inclusiva.</b></p>
                            <p><a class="btn hvr-hover" href="#">Saiba mais...</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{asset('assets/images1/tec.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bem Vindo ao SDEJT de Mandlakazi</strong></h1>
                            <p class="m-b-40"><b>Juntos unidos pela uma educação qualitativa, equitativa <br> e inclusiva.</b></p>
                            <p><a class="btn hvr-hover" href="#">Saiba mais...</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="{{asset('assets/images1/dis.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bem Vindo ao SDEJT de Mandlakazi</strong></h1>
                            <p class="m-b-40"><b>Juntos unidos pela uma educação qualitativa, equitativa <br> e inclusiva.</b></p>
                            <p><a class="btn hvr-hover" href="#">Saiba mais...</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="{{asset('assets/images1/esc.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bem Vindo ao SDEJT de Mandlakazi</strong></h1>
                            <p class="m-b-40"><b>Juntos unidos pela uma educação qualitativa, equitativa <br> e inclusiva.</b></p>
                            <p><a class="btn hvr-hover" href="#">Saiba mais...</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="{{asset('assets/images1/fala.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bem Vindo ao SDEJT de Mandlakazi</strong></h1>
                            <p class="m-b-40"><b>Juntos unidos pela uma educação qualitativa, equitativa <br> e inclusiva.</b></p>
                            <p><a class="btn hvr-hover" href="#">Saiba mais...</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="{{asset('assets/images1/diplo.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bem Vindo ao SDEJT de Mandlakazi</strong></h1>
                            <p class="m-b-40"><b>Juntos unidos pela uma educação qualitativa, equitativa <br> e inclusiva.</b></p>
                            <p><a class="btn hvr-hover" href="#">Saiba mais...</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><img src="{{asset('assets/images1/arrow.png')}}" alt=""></a>
            <a href="#" class="prev"><img src="{{asset('assets/images1/left.png')}}" alt=""></a>
        </div>
    </div>
    <!-- End Slider -->


        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Sobre SDEJT-Manjacaze</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            <ul>
                                <li><a href="#"><img src="{{asset('assets/images1/midia/face.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('assets/images1/midia/git.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('assets/images1/midia/what.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contacte-nos!</h4>
                            <ul>
                                <li>
                                    <p><img src="{{asset('assets/images1/midia/adre.png')}}" alt="">Address: Eduardo Mondlane <br>Rua 65<br>  </p>
                                </li>
                                <li>
                                    <p><img src="{{asset('assets/images1/midia/phone.png')}}" alt="">Phone: <a href="tel:+258870000000">Secretaria</a></p>
                                </li>
                                <li>
                                    <p><img src="{{asset('assets/images1/midia/emails.png')}}" alt="">Email: <a href="sdejtManjacaze@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">&copy; Da Vick Clands&trade;</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Pro <a href="https://www.goole.com/" target="_blank">Faça sua busca</a> no Google.com</span>
    </div>
    <!-- End copyright  -->
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{asset('assets/js1/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js1/popper.min.js')}}"></script>
    <script src="{{asset('assets/js1/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('assets/js1/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('assets/js1/bootstrap-select.js')}}"></script>
    <script src="{{asset('assets/js1/inewsticker.js')}}"></script>
    <script src="{{asset('assets/js1/bootsnav.js')}}"></script>
    <script src="{{asset('assets/js1/images-loded.min.js')}}"></script>
    <script src="{{asset('assets/js1/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js1/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js1/baguetteBox.min.js')}}"></script>
    <script src="{{asset('assets/js1/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/js1/contact-form-script.js')}}"></script>
    <script src="{{asset('assets/js1/custom.js')}}"></script>
</body>

</html>