@extends('pediatre.layout.auth')
@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/pediatre/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-6 {{ $errors->has('description') ? ' has-error' : '' }}" >
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea value="desscription par defaut" name="description" class="form-control" id="exampleFormControlTextarea1" rows="2" maxlength="255" required></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('specialite') ? ' has-error' : '' }}">
                            <label for="exampleFormControlTextarea1">Spécialité</label>

                            <select name="specialite" class="form-control">
                                <option value="1" selected>Pédiatrie Générale </option>
                                <option value="2">Gynécologie </option>
                                <option value="3">Néonatologie et médecine du nouveau-né </option>
                                <option value="4">Psychologie de l'Enfant </option>
                                <option value="5">Cardiologie Pédiatrique</option>
                            </select>
                            @if ($errors->has('specialite'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('specialite') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 {{ $errors->has('date_debut_carriere') ? ' has-error' : '' }}">
                            <label for="example-date-input">Date du début de carrière</label>
                            <div>
                                <input name= "date_debut_carriere" class="form-control" type="date" value="2011-08-19" id="example-date-input" required>
                                @if ($errors->has('date_debut_carriere'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_debut_carriere') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('tel1') ? ' has-error' : '' }}">
                            <label for="example-tel-input">Telephone 1</label>
                            <div >
                                <input name="tel1" class="form-control" type="tel" value="0541101010" id="example-tel-input" pattern="tel" required>
                                @if ($errors->has('tel1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('tel2') ? ' has-error' : '' }}">
                            <label for="example-tel-input" >Telephone 2</label>
                            <div >
                                <input name="tel2" class="form-control" type="tel" value="0541101010" id="example-tel2-input"  pattern="tel" >
                                @if ($errors->has('tel2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('adresse_cabinet') ? ' has-error' : '' }}">
                            <label for="exampleFormControlTextarea1">Adresse Cabinet</label>
                            <textarea value="adresse cabinet par defaut" name="adresse_cabinet" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            @if ($errors->has('adresse_cabinet'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('adresse_cabinet') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('latitude') ? ' has-error' : '' }}">
                            <input type="text" name="latitude" class="form-control" id="latitude" rows="3" ></input>
                            @if ($errors->has('latitude'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 {{ $errors->has('longitude') ? ' has-error' : '' }}">
                            <input type="text"  name="longitude" class="form-control" id="longitude" rows="3" ></input>
                            @if ($errors->has('longitude'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Web/API/Geolocation_API -->

                            <button type="button" id ="find-me">Afficher ma loalisation</button><br/>
                            <p id = "status"></p>
                            <a id = "map-link" target="_blank"></a>

                        </div>
                        <div class="form-group {{ $errors->has('attestation') ? ' has-error' : '' }}">
                            <label for="exampleInputFile">Attestation</label>
                            <input type="file"  accept="application/pdf" class="form-control-file" id="attestation" name="attestation" aria-describedby="fileHelp" required>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label >J'accèpte <a href="{{url('/charte')}}" target="_blank">les termes de la charte déontologique</a></label>
                                @if ($errors->has('attestation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attestation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary" id="submit" disabled="disabled">Submit</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script>
        $(':checkbox').radiocheck();
    </script>
<!-- script pour la géolocalisation -->
    <script>
        function geoFindMe() {

            const status = document.querySelector('#status');
            const mapLink = document.querySelector('#map-link');

            mapLink.href = '';
            mapLink.textContent = '';

            function success(position) {
                const latitude  = position.coords.latitude;
                const longitude = position.coords.longitude;

                status.textContent = '';
                mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;

                document.getElementById("mapouter").innerHTML=`<div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
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
<!-- Script pour activer le button submit apres avoir coché le checkbox j'accepte les termes-->
    <script>
        var checker = document.getElementById('defaultCheck1');
        var sendbtn = document.getElementById('submit');
        // when unchecked or checked, run the function
        checker.onchange = function(){
            if(this.checked){
                sendbtn.disabled = false;
            } else {
                sendbtn.disabled = true;
            }

        }
    </script>
    <div id="mapouter"></div>
@endsection