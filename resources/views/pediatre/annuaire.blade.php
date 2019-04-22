@extends('layouts.app')
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/font-awesome.css')}}">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">



<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/notationEtoile.css')}}">
<!-- links for slider num2 -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

@section('content')

    <div class="container col-md-12">
        <br>
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
        </section>
        <div class="sidebar col-md-10 col-md-offset-2">
            <form role="search" method="get" action="/annuaire/search">
                <div class="input-group"name="search" id="search">
                    <input type="text" name="name" value="" class="col-md-3 form-control" placeholder="Rechercher par Nom" >
                    <!--Blue select-->
                    <select name="ville" id ="selectVille" class="col-md-3 form-control mdb-select" >
                        <option selected>choisir une ville</option>
                        <option value="ADRAR">ADRAR</option>
                        <option value="AIN DEFLA">AIN DEFLA</option>
                        <option value="AIN TEMOUCHENT">AIN TEMOUCHENT</option>
                        <option value="AL TARF">AL TARF</option>
                        <option value="ALGER">ALGER</option>
                        <option value="ANNABA">ANNABA</option>
                        <option value="BBARRERIDJ" >B.B.ARRERIDJ</option>
                        <option value="BATNA" >BATNA</option>
                        <option value="BECHAR">BECHAR</option>
                        <option value="BEJAIA" >BEJAIA</option>
                        <option value="BISKRA" >BISKRA</option>
                        <option value="BLIDA">BLIDA</option>
                        <option value="BOUIRA" >BOUIRA</option>
                        <option value="BOUMERDES" >BOUMERDES</option>
                        <option value="CHLEF">CHLEF</option>
                        <option value="CONSTANTINE" >CONSTANTINE</option>
                        <option value="DJELFA" >DJELFA</option>
                        <option value="EL BAYADH">EL BAYADH</option>
                        <option value="EL OUED" >EL OUED</option>
                        <option value="GHARDAIA" >GHARDAIA</option>
                        <option value="GUELMA">GUELMA</option>
                        <option value="ILLIZI" >ILLIZI</option>
                        <option value="JIJEL" >JIJEL</option>
                        <option value="KHENCHELA">KHENCHELA</option>
                        <option value="LAGHOUAT" >LAGHOUAT</option>
                        <option value="MASCARA" >MASCARA</option>
                        <option value="MEDEA" >MEDEA</option>
                        <option value="MILA">MILA</option>
                        <option value="MOSTAGANEM" >MOSTAGANEM</option>
                        <option value="MSILA" >M’SILA</option>
                        <option value="NAAMA">NAAMA</option>
                        <option value="ORAN" >ORAN</option>
                        <option value="OUARGLA" >OUARGLA</option>
                        <option value="OUM ELBOUAGHI">OUM ELBOUAGHI</option>
                        <option value="RELIZANE" >RELIZANE</option>
                        <option value="SAIDA" >SAIDA</option>
                        <option value="SETIF">SETIF</option>
                        <option value="SIDI BEL ABBES" >SIDI BEL ABBES</option>
                        <option value="SKIKDA" >SKIKDA</option>
                        <option value="SOUKAHRAS">SOUKAHRAS</option>
                        <option value="TAMANGHASSET" >TAMANGHASSET</option>
                        <option value="TEBESSA" >TEBESSA</option>
                        <option value="TIARET">TIARET</option>
                        <option value="TINDOUF" >TINDOUF</option>
                        <option value="TIPAZA" >TIPAZA</option>
                        <option value="TISSEMSILT">TISSEMSILT</option>
                        <option value="TIZI.OUZOU" >TIZI.OUZOU</option>
                        <option value="TLEMCEN" >TLEMCEN</option>



                    </select>
                    <select name="specialite" id="selectSpecialite" class="col-md-3 form-control mdb-select">
                        <option selected>choisir une spécialité</option>
                        <option value="Pédiatrie Générale">Pédiatrie Générale</option>
                        <option value="Gynécologie">Gynécologie</option>
                        <option value="Néonatologie et médecine du nouveau-né">Néonatologie et médecine du nouveau-né</option>
                        <option value="Psychologie de l'Enfant">Psychologie de l'Enfant</option>
                        <option value="Cardiologie Pédiatrique">Cardiologie Pédiatrique</option>
                    </select>

                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>

                </div>
            </form>
        </div>

        <div class="col-md-10">
            <table class="table forum table-striped">
                <thead>
                <tr>
                    <th>Spécialité</th>
                    <th>Nom</th>
                    <th class=" hidden-xs hidden-sm">Date du Début de Carrière</th>
                    <th>Ville</th>
                    <th>Feedback(/5)</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pediatres as $pediatre)


                    <tr>
                        <td>{{$pediatre->specialite}}</td>
                        <td>{{$pediatre->name}}</td>
                        <td>{{$pediatre->date_debut_carriere}}</td>
                        <td>{{$pediatre->ville}}</td>
                        <td>{{$pediatre->points}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <ul>
                {{ $pediatres->fragment('foo')->links() }}

            </ul>
        </div>

    </div>

@endsection
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('assets/js/select2.js')}}"></script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('assets/js/gmaps.js')}}"></script>
<script src="{{asset('assets/js/smoothscroll.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>