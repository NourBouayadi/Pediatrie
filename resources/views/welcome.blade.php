<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pédiatrie-Dz</title>
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/notationEtoile.css')}}">




    <style>

        .div{

            text-align: center;
        }

        #footerMenu{
            text-align: right;
        }


    </style>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
    <script src="{{asset('assets/js/modernizr.js')}}"></script>


</head>
<body>

<!-- ====================================================
header section -->
<header class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 header-logo">
                <br>

                <a href="#"><h1>Pédiatrie-Dz</h1></a>
            </div>

            <div class="col-md-7">
                <nav class="navbar navbar-default">
                    <div class="container-fluid nav-bar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">

                                <li><a class="menu active" href="{{ url('/') }}" >Acceuil</a></li>
                                
                                <li  class="dropdown ">


                                    <a href="#service" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Catégories
                                        <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li >
                                            <a href="{{url('forum/categorie/1')}}">
                                                <strong>Grossesse</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('forum/categorie/2')}}"> <strong>Nouveau-Né</strong></a>
                                        </li>
                                        <li>
                                            <a href="{{url('forum/categorie/3')}}"><strong>Vêtements</strong></a>
                                        </li>
                                        <li>
                                            <a href="{{url('forum/categorie/4')}}"><strong> Jouets</strong></a>
                                        </li>
                                        <li>
                                            <a href="{{url('forum/categorie/5')}}"><strong>Sommeil</strong></a>
                                        </li>
                                        <li>
                                            <a href="{{url('forum/categorie/6')}}"><strong>Santé</strong></a>
                                        </li>
                                        <li>
                                            <a href="{{url('forum/categorie/7')}}"><strong>Bien-être</strong></a>
                                        </li>
                                        <li>
                                            <a href="{{url('forum/categorie/8')}}"><strong>Psychologie</strong></a>
                                        </li>
                                        <li>
                                            <a href="{{url('forum/categorie/9')}}"><strong>Premières Marches</strong></a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a class="menu" href="#Annuaire">Annuaire </a></li>
                                <li><a class="menu" href="#FAQ">FAQ</a></li>
                                <li><a class="menu" href="{{url('forum')}}"> Forum</a></li>
                                <li><a class="menu" href="#prédir">Prédir</a></li>
                            </ul>
                        </div><!-- /navbar-collapse -->
                    </div><!-- / .container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header> <!-- end of header area -->


<section class="slider" id="home">
    <div class="container-fluid">
        <div class="row">
              <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="header-backup"></div>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('assets/img/babby1.jpg')}}" alt="">
                        <div class="carousel-caption">
                            <h1>Pédiatre-Dz</h1>
                            <p>Faites nous confiance</p>
                          <button onclick="window.location='login'">S'inscrire</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/img/babby5.jpg')}}" alt="">
                        <div class="carousel-caption">
                            <h1>Pédiatre-Dz</h1>
                            <p>Faites nous confiance</p>
                            <button onclick="window.location='login'">S'inscrire</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/img/babby4.jpg')}}" alt="">
                        <div class="carousel-caption">
                            <h1>Pédiatre-Dz</h1>
                            <p>Faites nous confiance</p>
                            <button onclick="window.location='login'">S'inscrire</button>
                        </div>
                    </div>

                    <div class="item">

                        <img src="{{asset('assets/img/babby3.jpg')}}" alt="">

                        <div class="carousel-caption">

                            <h1>Pédiatre-Dz</h1>

                            <p>Faites nous confiance</p>

                            <button onclick="window.location='login'">S'inscrire</button>

                        </div>

                    </div>

                </div>


                <!-- Controls -->
                <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>





<!-- service section starts here -->
  <section class="slider" id="service">
        <div class="container-fluid">
            <div class="row">
            
                 <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                     <div class="header-backup"></div>
                         <!-- Wrapper for slides -->
                     <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{asset('assets/img/slide1.jpg')}}" alt="">
                            
                        </div>
                        <div class="item">
                            <img src="{{asset('assets/img/slide2.jpg')}}" alt="">
                           
                        </div>
                        <div class="item">
                            <img src="{{asset('assets/img/slide3.jpg')}}" alt="">
                           
                        </div>
                        
                       
                    </div>
        
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
<!-- team section -->
<section class="team" id="Annuaire">
    <div class="container">
        <div class="row">
            <div class="team-heading text-center">
                <h2>Bienvenue</h2>
                <h4>Sur le 1ᵉʳ Forum algérienne des pédiatres, vous etes actuellement entouré d'une équipe des pédiatres</h4>
            </div>

            <div class="col-md-2 single-member col-sm-4">
                <div class="person">
                    <img class="img-responsive" src="{{asset('assets/img/member1.jpg')}}" alt="member-1">
                </div>
                <div class="person-detail">
                    <div class="arrow-bottom"></div>
                    <h3>Dr.Allal, M.D.</h3>
                    <div class="rating">
                        <div class="stars">
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                </div>
            </div>
            <div class="col-md-2 single-member col-sm-4">
                <div class="person-detail">
                    <div class="arrow-top"></div>
                    <h3>Dr. Benkalfat, M.D.</h3>

                    <div class="rating">
                        <div class="stars">
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                </div>
                <div class="person">
                    <img class="img-responsive" src="{{asset('assets/img/member2.jpg')}}" alt="member-2">
                </div>
            </div>
            <div class="col-md-2 single-member col-sm-4">
                <div class="person">
                    <img class="img-responsive" src="{{asset('assets/img/member3.jpg')}}" alt="member-3">
                </div>
                <div class="person-detail">
                    <div class="arrow-bottom"></div>
                    <h3>Dr. Mansour, M.D.</h3>
                    <div class="rating">
                        <div class="stars">
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                </div>
            </div>
            <div class="col-md-2 single-member col-sm-4">
                <div class="person-detail">
                    <div class="arrow-top"></div>
                    <h3>Dr. BenAllal, M.D.</h3>
                    <div class="rating">
                        <div class="stars">
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                </div>
                <div class="person">
                    <img class="img-responsive" src="{{asset('assets/img/member4.jpg')}}" alt="member-4">
                </div>
            </div>
            <div class="col-md-2 single-member col-sm-4">
                <div class="person">
                    <img class="img-responsive" src="{{asset('assets/img/member5.jpg')}}" alt="member-5">
                </div>
                <div class="person-detail">
                    <div class="arrow-bottom"></div>
                    <h3>Dr. Mohamed, M.D.</h3>

                    <div class="rating">
                        <div class="stars">
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                </div>
            </div>
            <div class="col-md-2 single-member col-sm-4">

                <div class="person-detail">
                    <div class="arrow-top"></div>
                    <h3>Dr. Hasina, M.D.</h3>

                    <div class="rating">
                        <div class="stars">
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star gold"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                </div>

                <div class="person">
                    <img class="img-responsive" src="{{asset('assets/img/member6.jpg')}}" alt="member-5">
                </div>
            </div>
        </div>
    </div>
</section><!-- end of team section -->


<!-- about section -->
<section class="about text-center" id="FAQ">
    <div class="container">
        <div class="row">
            <br>
            <h2>discussions plus populaires</h2>
            <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
            <br>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail clearfix">
                    <div class="about-img">
                        <img class="img-responsive" src="{{asset('assets/img/itemDiscu1.jpg')}}" alt="">
                    </div>
                    <div class="about-details">
                        <div class="pentagon-text">
                            <br>
                            <b>
                                Discussion</b>
                        </div>
                        <h3>Titre</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail">
                    <div class="about-img">
                        <img class="img-responsive" src="{{asset('assets/img/discu2.jpg')}}" alt="">
                    </div>
                    <div class="about-details">

                        <div class="pentagon-text">
                            <br>

                            <b>Discussion</b>

                        </div>

                        <h3>Titre</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail">
                    <div class="about-img">
                        <img class="img-responsive" src="{{asset('assets/img/discu3.jpg')}}" alt="">
                    </div>
                    <div class="about-details">
                        <div class="pentagon-text">
                            <br>
                            <b>
                                Discussion</b>
                        </div>
                        <h3>Titre</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of about section -->


<br>
<br>


<section class="team" id="Annuaire">
    <div class="container">
        <div class="row">
            <div class="team-heading text-center">
                <h2>Un système de prédiction</h2>
                <h4>basé sur la collecte des symptomes</h4>
            </div>

            <div >
                <div class="person">
                    <img class="img-responsive" src="{{asset('assets/img/prédir.jpg')}}" alt="member-1">
                </div>

            </div>

        </div>
    </div>
</section>

<br>



<section class="about text-center" id="FAQ">
    <div class="container">
        <div class="row">
            <br>
            <h2>Articles plus populaires</h2>
            <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
            <br>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail clearfix">
                    <div class="about-img">
                        <img class="img-responsive" src="{{asset('assets/img/1article.jpg')}}" alt="">
                    </div>
                    <div class="about-details">
                        <div class="pentagon-text">
                            <br>
                            <b>
                                Article 1</b>
                        </div>
                        <h3>Titre</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail">
                    <div class="about-img">
                        <img class="img-responsive" src="{{asset('assets/img/article2.jpg')}}" alt="">
                    </div>
                    <div class="about-details">

                        <div class="pentagon-text">
                            <br>

                            <b>Article 2</b>

                        </div>

                        <h3>Titre</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail">
                    <div class="about-img">
                        <img class="img-responsive" src="{{asset('assets/img/article3.jpg')}}" alt="">
                    </div>
                    <div class="about-details">
                        <div class="pentagon-text">
                            <br>
                            <b>
                                Article 3</b>
                        </div>
                        <h3>Titre</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>


<!-- footer starts here -->
<footer class="footer clearfix">
    <div class="container">
        <div class="row">


            <div>

                <center>
                    <hr>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-skype"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                    <hr>
                </center>

            </div>

            <div class="col-xs-5 footer-para">
                <p>Fait avec <i class="fa fa-heart"></i> par
                    <a href="https://www.linkedin.com/in/bouayadi/">Nour</a>
                    &
                    <a href="https://www.linkedin.com/in/adiba-boufeldja-81a092155/">Adiba</a>
                </p>
            </div>

            <div id="footerMenu">

                <a href="propos"><b>  &nbsp; A propos de nous</b> </a>


            </div>
        </div>
    </div>
</footer>



<!-- script tags  slider 1
    =========================== "{{asset('assets/js/scripts.js')}}"-->

<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('assets/js/gmaps.js')}}"></script>
<script src="{{asset('assets/js/smoothscroll.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>


<!--links for slider num 2   :   le slider 2 ndir fiih les catégories (9 catégories) divisées usr 3 -->
<!--script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>


<script>
$(function() {
 $('.slide').slick({
     slidesToShow: 3,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 2000,
  });
});
</script-->

</body>
</html>

