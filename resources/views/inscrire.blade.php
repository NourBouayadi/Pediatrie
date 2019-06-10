<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Pédiatrie-DZ </title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/font-awesome.css')}}">
    <style>
        #charte {
            text-align: center;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">


            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="http://demo.procoderr.tech">
                Pédiatrie-DZ

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">


            <ul class="nav navbar-nav navbar-right">

                <li><a class="menu active" href="/" >Accueil</a></li>
                <li  class="dropdown nav-item">


                    <a class="nav-link"class="nav-link dropdown-toggle" href="/forum" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        FAQ <i class="fa fa-caret-down" aria-hidden="true"></i></a>

                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" role="menu">
                        <li>
                            <a class="dropdown-item" href="/forum/categorie/1">Grossesse</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/forum/categorie/2">Nouveau-Né</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/forum/categorie/3">Vêtements</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/forum/categorie/4">Jouets</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/forum/categorie/5">Sommeil</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/forum/categorie/6">Santé</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/forum/categorie/7">Bien-Etre</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/forum/categorie/8">Psychologie</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/forum/categorie/9">Premières-Marches</a>
                        </li>

                    </ul>
                </li>
                <li><a class="menu" href="/Annuaire">Pédiatres </a></li>
                <li><a class="menu" href="/ficheMaladie">Annuaire de Maladies</a></li>
                <li><a class="menu active" href="/login" >Login</a></li>
                <li><a class="menu active" href="/register" >Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="tabbable-panel">
        <div class="tabbable-line">
            <ul class="nav nav-tabs ">
                <li class="active">
                    <a href="#formulaire_maman" data-toggle="tab">
                        Maman
                    </a>
                </li>
                <li>
                    <a href="#formulaire_pediatre" data-toggle="tab">
                        Pédiatre
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="formulaire_maman">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                       value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                            <label>J'accèpte <a href="{{url('/charte')}}" target="_blank">les termes de la
                                    charte déontologique</a></label>
                        </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="submit2" disabled="disabled">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="tab-pane" id="formulaire_pediatre">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('registerPediatre') }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="exampleFormControlTextarea1" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <textarea value="desscription par defaut" name="description" class="form-control"
                                          id="exampleFormControlTextarea1" rows="2" maxlength="255" required></textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group  {{ $errors->has('specialite') ? ' has-error' : '' }}">
                            <label for="exampleFormControlTextarea1" class="col-md-4 control-label">Spécialité</label>
                            <div class="col-md-6">
                                <select name="specialite" class="form-control">
                                    <option value="Pédiatrie Générale" selected>Pédiatrie Générale</option>
                                    <option value="Gynécologie">Gynécologie</option>
                                    <option value="Néonatologie et médecine du nouveau-né">Néonatologie et médecine du nouveau-né</option>
                                    <option value="Psychologie de l'Enfant">Psychologie de l'Enfant</option>
                                    <option value="Cardiologie Pédiatrique">Cardiologie Pédiatrique</option>
                                </select>

                                @if ($errors->has('specialite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('specialite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group  {{ $errors->has('ville') ? ' has-error' : '' }}">
                            <label for="exampleFormControlTextarea1" class="col-md-4 control-label">Ville</label>
                            <div class="col-md-6">
                                <select name="ville" class="form-control">
                                    <option value="ADRAR"selected>ADRAR</option>
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

                                @if ($errors->has('ville'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('date_debut_carriere') ? ' has-error' : '' }}">
                            <label for="example-date-input" class="col-md-4 control-label">Date du début de
                                carrière</label>
                            <div class="col-md-6">
                                <input name="date_debut_carriere" class="form-control" type="date" value="2011-08-19"
                                       id="example-date-input" required>
                                @if ($errors->has('date_debut_carriere'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_debut_carriere') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group  {{ $errors->has('tel1') ? ' has-error' : '' }}">
                            <label for="example-tel-input" class="col-md-4 control-label">Telephone 1</label>
                            <div class="col-md-6">
                                <input name="tel1" class="form-control" type="tel" value="0541101010"
                                       id="example-tel-input" required>
                                @if ($errors->has('tel1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('tel2') ? ' has-error' : '' }}">
                            <label for="example-tel-input" class="col-md-4 control-label">Telephone 2</label>
                            <div class="col-md-6">
                                <input name="tel2" class="form-control" type="tel" value="0541101010"
                                       id="example-tel2-input">
                                @if ($errors->has('tel2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('adresse_cabinet') ? ' has-error' : '' }}">
                            <label for="exampleFormControlTextarea1" class="col-md-4 control-label">Adresse
                                Cabinet</label>
                            <div class="col-md-6">
                                <textarea value="adresse cabinet par defaut" name="adresse_cabinet" class="form-control"
                                          id="exampleFormControlTextarea1" rows="3" required></textarea>
                                @if ($errors->has('adresse_cabinet'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse_cabinet') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-md-4 control-label" for="find-me">Localisation</label>
                            <!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Web/API/Geolocation_API -->
                            <div class="col-md-6">
                            <button type="button" id="find-me">Afficher ma loalisation</button>
                            <br/>
                            <p id="status"></p>
                            <a id="map-link" target="_blank"></a>
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('attestation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="exampleInputFile">Attestation</label>
                            <div class="col-md-6">
                                <input type="file" accept="application/pdf" class="form-control-file" id="attestation"
                                       name="attestation" aria-describedby="fileHelp" required>

                                <div class="form-group row">
                                <div class="form-check">

                                    @if ($errors->has('attestation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('attestation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group {{ $errors->has('latitude') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input type="hidden" name="latitude" class="form-control" id="latitude"
                                       rows="3"></input>
                                @if ($errors->has('latitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('longitude') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input type="hidden" name="longitude" class="form-control" id="longitude"
                                       rows="3"></input>
                                @if ($errors->has('longitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div id="mapouter" class="row"></div>
                    </form>

                </div>


            </div>
        </div>
    </div>
</div>


</body>
<!-- JavaScripts -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<!-- Script pour activer le button submit apres avoir coché le checkbox j'accepte les termes-->
<script src="{{asset('assets/js/confirm_password.js')}}"></script>

<script>
    $(':checkbox').radiocheck();
</script>

<!-- Script pour activer le button submit apres avoir coché le checkbox j'accepte les termes-->

<script>
    var checker = document.getElementById('checkbox2');
    var sendbtn = document.getElementById('submit2');
    // when unchecked or checked, run the function
    checker.onchange = function () {
        if (this.checked) {
            sendbtn.disabled = false;
        } else {
            sendbtn.disabled = true;
        }

    }
</script>
<!-- script pour la géolocalisation -->
<script>
    function geoFindMe() {

        const status = document.querySelector('#status');
        const mapLink = document.querySelector('#map-link');

        mapLink.href = '';
        mapLink.textContent = '';

        function success(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            status.textContent = '';
            mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;

            document.getElementById("mapouter").innerHTML = `<div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                                                                src="https://maps.google.com/maps?q=${latitude}%2C${longitude}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>`
            document.getElementById("longitude").setAttribute("value", longitude);
            document.getElementById("latitude").setAttribute("value", latitude);
        }

        function error() {
            status.textContent = 'Unable to retrieve your location';
        }

        if (!navigator.geolocation) {
            status.textContent = 'Geolocation is not supported by your browser';
        } else {
            status.textContent = 'Locating…';
            navigator.geolocation.getCurrentPosition(success, error);
        }

    }

    document.querySelector('#find-me').addEventListener('click', geoFindMe);

</script>
<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>

</html>
