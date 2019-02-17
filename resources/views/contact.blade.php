<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Pédiatre-Dz | Contact</title>

    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>


<script src="{{asset('assets/js/modernizr.js')}}"></script>
    <!--[if lt IE 9]>

        "{{asset('assets/js/scripts.js')}}"
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!--====================================================
    header section -->
    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 header-logo">
                    <br>
                    <a href="index.html"><h1>Pédiatre-Dz</h1></a>
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
                           
                            <li><a class="menu active" href="#home" >Acceuil</a></li>
                         <li  class="dropdown ">


                        <a href="#service" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Catégories
                        <span class="caret"></span>
                        </a>




                      <ul class="dropdown-menu" role="menu">
                        <li >
                            <a href="#Gro">
                                <strong>Grossesse</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#NV"> <strong>Nouveau-Né</strong></a>
                        </li>
                        <li>
                            <a href="#Vet"><strong>Vêtements</strong></a>
                        </li>
                        <li>
                            <a href="#J"><strong> Jouets</strong></a>
                        </li>
                        <li>
                            <a href="#So"><strong>Sommeil</strong></a>
                        </li>
                        <li>
                            <a href="#Sa"><strong>Santé</strong></a>
                        </li>
                        <li>
                            <a href="#Be"><strong>Bien-être</strong></a>
                        </li>
                        <li>
                            <a href="#Ps"><strong>Psychologie</strong></a>
                        </li>
                        <li>
                            <a href="#Pm"><strong>Premières Marches</strong></a>
                        </li>

                    </ul>


                              </li>
                            <li><a class="menu" href="#Annuaire">Annuaire </a></li>
                            <li><a class="menu" href="#FAQ">FAQ</a></li>
                            <li><a class="menu" href="#forum"> Forum</a></li>
                            <li><a class="menu" href="#prédir">Prédir</a></li>
                          </ul>
                        </div>
                      </div>
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
                            <img src='img/babby1.jpg' alt="">
                            <div class="carousel-caption">
                                <h1>Pédiatre-Dz</h1>
                                <p>Faites nous confiance</p>
                                <button>S'inscrire</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src='img/babby5.jpg' alt="">
                            <div class="carousel-caption">
                                <h1>Pédiatre-Dz</h1>
                                <p>Faites nous confiance</p>
                                <button>S'inscrire</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src='img/babby4.jpg' alt="">
                            <div class="carousel-caption">
                                <h1>Pédiatre-Dz</h1>
                                <p>Faites nous confiance</p>
                                <button>S'inscrire</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src='img/babby3.jpg' alt="">
                            <div class="carousel-caption">
                                <h1>Pédiatre-Dz</h1>
                                <p>Faites nous confiance</p>
                                <button>S'inscrire</button>
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
    </section><!-- end of slider section -->
<br>
<br>
<br>
    <!-- map section -->
    <div class="api-map" id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 map" id="map"></div>
            </div>
        </div>
    </div><!-- end of map section -->

    <!-- contact section starts here -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="contact-caption clearfix">
                    <div class="contact-heading text-center">
                        <h2>contactez nous</h2>
                    </div>
                    <div class="col-md-5 contact-info text-left">
                        <h3>les infromations du contact</h3>
                        <div class="info-detail">
                            <ul><li><i class="fa fa-calendar"></i><span>lundi - vendredi:</span> 9:30 AM to 6:30 PM</li></ul>
                            <ul><li><i class="fa fa-map-marker"></i><span>Address:</span> XXXXX , XXXX, algeria, CP </li></ul>
                            <ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
                            <ul><li><i class="fa fa-envelope"></i><span>Email:</span> pediatre_dz@gmail.com</li></ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1 contact-form">
                        <h3>laissez un message</h3>

                        <form class="form">
                            <input class="name" type="text" placeholder="Name">
                            <input class="email" type="email" placeholder="Email">
                            <input class="phone" type="text" placeholder="Phone No:">
                            <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <input class="submit-btn" type="submit" value="SUBMIT">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of contact section -->

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
                 <p>Powered by Nour & Adiba</p>
            </div>

            <div id="footerMenu"> 
            <br> 
        
            <a href="#Contact"><b> Contact </b></a> 


            <a href="#propos"><b> A propos de nous</b> </a>
           

            </div>
            </div>
        </div>
    </footer>

 <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('assets/js/gmaps.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>