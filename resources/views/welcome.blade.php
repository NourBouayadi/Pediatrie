<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Pédiatre-Dz</title>

    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>

<style>

    .div{

        text-align: center; 
    }

    #footerMenu{
        text-align: right;
    }

</style>
    
<script src="{{asset('assets/js/modernizr.js')}}"></script>
    <!--[if lt IE 9]>

        "{{asset('assets/js/scripts.js')}}"
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    
    <!-- ====================================================
    header section -->
    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 header-logo">
                    <br>
                    
                    <a href="#"><h1>Pédiatre-Dz</h1></a>
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


                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Catégories
                        <span class="caret"></span>
                        </a>




                      <ul class="dropdown-menu" role="menu">
                        <li >
                            <a href="#">
                                <strong>Grossesse</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <strong>Nouveau-Né</strong></a>
                        </li>
                        <li>
                            <a href="#"><strong>Vêtements</strong></a>
                        </li>
                        <li>
                            <a href="#"><strong> Jouets</strong></a>
                        </li>
                        <li>
                            <a href="#"><strong>Sommeil</strong></a>
                        </li>
                        <li>
                            <a href="#"><strong>Santé</strong></a>
                        </li>
                        <li>
                            <a href="#"><strong>Bien-être</strong></a>
                        </li>
                        <li>
                            <a href="#"><strong>Psychologie</strong></a>
                        </li>
                        <li>
                            <a href="#"><strong>Premières Marches</strong></a>
                        </li>

                    </ul>









                              </li>
                            <li><a class="menu" href="#Annuaire">Annuaire </a></li>
                            <li><a class="menu" href="#FAQ">FAQ</a></li>
                            <li><a class="menu" href="#forum"> Forum</a></li>
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
                            <img src="{{asset('babby1.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h1>Pédiatre-Dz</h1>
                                <p>Faites nous confiance</p>
                                <button href='/inscrire'">S'inscrire</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('babby5.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h1>Pédiatre-Dz</h1>
                                <p>Faites nous confiance</p>
                                <button onclick="window.location='/inscrire'">S'inscrire</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('babby4.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h1>Pédiatre-Dz</h1>
                                <p>Faites nous confiance</p>
                                <button onclick="window.location='/inscrire'">S'inscrire</button>
                            </div>
                        </div>
                        
                        <div class="item">
                            
                            <img src="{{asset('babby3.jpg')}}" alt="">
                          
                            <div class="carousel-caption">
                              
                                <h1>Pédiatre-Dz</h1>
                                
                                <p>Faites nous confiance</p>
                                
                                <button onclick="window.location='/inscrire'">S'inscrire</button>
                            
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
    <section class="service text-center" id="cat">
        <div class="container">
            <div class="row">
                <h2> espace de discussion</h2>
                <h4>Contenant des sujets autour de plusieurs catégories : la santé , psychologie , jouets...</h4>
                

                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="heart img-responsive" src="{{asset('service1.png')}}" alt="">
                            </div>
                        </div>
                        <h3>Heart problem</h3>
                    </div>
                </div>
                

                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="brain img-responsive" src="{{asset('service2.png')}}" alt="">
                            </div>
                        </div>
                        <h3>brain problem</h3>
                    </div>
                </div>
                

                <div class="col-md-3 col-sm-6">
                    
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="knee img-responsive" src="{{asset('service3.png')}}" alt="">
                            </div>
                        </div>
                        <h3>knee problem</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="bone img-responsive" src="{{asset('service4.png')}}" alt="">
                            </div>
                        </div>
                        <h3>human bones problem</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of service section -->

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
                        <img class="img-responsive" src="{{asset('member1.jpg')}}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr.Allal, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Benkalfat, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{asset('member2.jpg')}}" alt="member-2">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{asset('member3.jpg')}}" alt="member-3">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr. Mansour, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. BenAllal, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{asset('member4.jpg')}}" alt="member-4">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{asset('member5.jpg')}}" alt="member-5">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr. Mohammed, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Hasina, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{asset('member6.jpg')}}" alt="member-5">
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
                            <img class="img-responsive" src="{{asset('itemDiscu1.jpg')}}" alt="">
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
                            <img class="img-responsive" src="{{asset('discu2.jpg')}}" alt="">
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
                            <img class="img-responsive" src="{{asset('discu3.jpg')}}" alt="">
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
                            <ul><li><i class="fa fa-calendar"></i><span>lundi - vendredi:</span> 9:30 a 16:30 PM</li></ul>
                            <ul><li><i class="fa fa-map-marker"></i><span>Addresse:</span> XXXXX , XXXX, algerie, CP </li></ul>
                            <ul><li><i class="fa fa-phone"></i><span>Telephone:</span> (213) XXX XX XX XX</li></ul>
                            <ul><li><i class="fa fa-envelope"></i><span>Email:</span> pediatre_dz@gmail.com</li></ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1 contact-form">
                        <h3>laissez un message</h3>

                        <form class="form">
                            <input class="name" type="text" placeholder="Nom">
                            <input class="email" type="email" placeholder="Email">
                            <input class="phone" type="text" placeholder="Telephone">
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
                 <p>made with <i class="fa fa-heart"></i> by Nour & Adiba</p>
            </div>

            <div id="footerMenu"> 
         
            <a href="#Contact"><b> Contact &nbsp;</b></a> 

            <a href="#propos"><b>  &nbsp; A propos de nous</b> </a>
   
        
            </div>
            </div>
        </div>
    </footer>


   
    <!-- script tags
    ============================================================= 
"{{asset('assets/js/scripts.js')}}"-->
    <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('assets/js/gmaps.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>

