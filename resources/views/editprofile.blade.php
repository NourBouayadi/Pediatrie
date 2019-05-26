@extends('layouts.app')

@section('content')
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('/profile/update')}}" method="post" >

                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    <div class="form-group">

                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control" value="{{$pediatre->description}}">

                    </div>
                    <div class="form-group">
                   
                        <label for="">Numéro de Téléphone</label>
                        <input type="text" name="tel1" class="form-control" value="{{$pediatre->tel1}}">
                   
                    </div>
                    
                    <div class="form-group">
                        <label for="">Adresse de Cabinet</label>
                        <input type="text" name="adresse_cabinet" class="form-control" value="{{ $pediatre->adresse_cabinet}}">
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

                    <div class="form-group  {{ $errors->has('ville') ? ' has-error' : '' }}">
                        <label for="exampleFormControlTextarea1" class=" control-label">Ville</label>
                        <div class="">
                            <select name="ville" id="ville" class="form-control">
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
                    <div class="col-md-6">
                            <!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Web/API/Geolocation_API -->
                        <div id="mapouter" class="row"></div>

                    </div>
                    <input type="submit" value="Modifier" class="form-control btn btn-danger">

                </form>
            </div>
        </div>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
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
        <script>
            document.getElementById("ville").value='{{$pediatre->ville}}';
        </script>
    </div>

@endsection