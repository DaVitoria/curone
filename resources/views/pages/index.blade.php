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
    <link rel="shortcut icon" href="{{asset('assets/images1/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets/images1/apple-touch-icon.png')}}">
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
                   
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
    </header>
    <!-- End Main Top -->

    <!-- Start All Title Box -->
    <div class="all-title-box" style="background-image: url('assets/images1/hin.jpg')" tabindex="-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Concursos</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Concursos</li>
                        <li class="breadcrumb-item"><a href="{{route('pack.index')}}">Another</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

        <!-- Start Products  -->
        <div class="products-box" style="background-image: url('assets/images1/moz2.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-all text-center">
                            <h1 style="color: rgb(21, 21, 16)"> <i>Submissão da Candidatura</i></h1>
                        </div>
                    </div>
                </div>
    
                <div class="row special-list">
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb d-flex">
        
                                    <p class="sale"></p>
                                    <p class="sale"></p>
                                    
                                </div>
                                <img src="{{asset('assets/images1/prof.jpg')}}" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                   
                                    <a class="cart btn" href="#" data-toggle="modal" data-target="#myModal">Cadastrar-se!</a>
                                    
                                </div>
                            </div>
                            
                            <div class="why-text">
                                <h3><strong></strong></h3>
                            </div>
                            
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 special-grid top-featured">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb d-flex">
                                    {{-- <span>{{$vacancie}}</span> --}}
                                    <p class="sale">Aberto</p>
                                    <p class="sale">25</p>
                                </div>
                                <img src="{{asset('assets/images1/agent.jpg')}}" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart btn" href="#" data-toggle="modal" data-target="#myModal">Cadastrar-se!</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h3><strong>Tec Administrativo</strong></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 special-grid top-featured">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="new">Fechado</p>
                                </div>
                                <img src="{{asset('assets/images1/agent2.jpg')}}" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Cadastrar-se!</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h3><strong>Agente de Serviço</strong></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Products  -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-01.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-02.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-03.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-04.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-05.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-06.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-07.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-08.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-09.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('assets/images1/instagram-img-05.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
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
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
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
    @include('modal.create')
    <!-- Start copyright  -->
    <div class="footer-copyright">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">&copy; Da Vick Clands&trade;</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Pro <a href="https://www.goole.com/" target="_blank">Faça sua busca</a> no Google.com</span>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script>
        $(document).ready(function(){

        $('.next').click(function(){

        var nextId = $(this).parents('.tab-pane').next().attr("id");
        $('[href=#'+nextId+']').tab('show');
        return false;
        
        })

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        
        //update progress
        var step = $(e.target).data('step');
        var percent = (parseInt(step) / 4) * 100;
        
        $('.progress-bar').css({width: percent + '%'});
        $('.progress-bar').text("Step " + step + " of 4");
        
        //e.relatedTarget // previous tab
        
        })

        $('.first').click(function(){

        $('#myWizard a:first').tab('show')

        })

        });
    </script>
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