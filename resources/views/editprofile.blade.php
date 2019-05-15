@extends('layouts.app')

@section('content')
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('profile/index/2')}}" method="post" >
                    <input type="hidden" name="_method" value="PUT">
                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}

                    <div class="form-group">
                   
                        <label for="">Numéro de Téléphone</label>
                        <input type="text" name="tel1" class="form-control" value="{{$pediatre->tel1}}">
                   
                    </div>
                    
                    <div class="form-group">
                        <label for="">Adresse de Cabinet</label>
                        <input type="text" name="adresse_cabinet" class="form-control" value="{{ $pediatre->adresse_cabinet}}">
                    </div>
                   
                
                    
                         <div class="form-group">
                
                        <label for="">Ville</label>
                        <select name="ville_id" class="form-control">
                            <option value="1" id="1">Adrar</option>
                            <option value="2" id="2">Chlef</option>
                            <option value="3" id="3">Laghouat</option>
                            <option value="4" id="4">Oum El Bouaghi</option>
                            <option value="5" id="5"> Batna</option>
                            <option value="6" id="6">Béjaïa</option>
                            <option value="7" id="7"> Biskra</option>
                            <option value="8" id="8"> Béchar</option>
                            <option value="9" id="9"> Blida</option>
                            <option value="10" id="10">Bouira</option>
                            <option value="11" id="11">Tamanrasset</option>
                            <option value="12" id="12">Tébessa</option>
                            <option value="13" id="13">Tlemcen</option>
                            <option value="14" id="14"> Tiaret</option>
                            <option value="15" id="15">Tizi Ouzou</option>
                            <option value="16" id="16">Alger</option>
                            <option value="17" id="17"> Djelfa</option>
                            <option value="18" id="18"> Jijel</option>
                            <option value="19" id="19">  Sétif</option>
                            <option value="20" id="20"> Saïda</option>
                            <option value="21" id="21"> Skikda</option>
                            <option value="22" id="22"> Sidi Bel Abbès</option>
                            <option value="23" id="23">Annaba</option>
                            <option value="24" id="24">Guelma</option>
                            <option value="25" id="25">Constantine</option>
                            <option value="26" id="26">Médéa</option>
                            <option value="27" id="27">Mostaganem</option>
                            <option value="28" id="28">M’Sila</option>
                            <option value="29" id="29">Mascara</option>
                            <option value="30" id="30">Ouargla</option>
                            <option value="31" id="31">Oran</option>
                            <option value="32" id="32">El Bayadh</option>
                            <option value="33" id="33">Illizi</option>
                            <option value="34" id="34"> Bordj Bou Arreridj</option>
                            <option value="35" id="35"> Boumerdès</option>
                            <option value="36" id="36">El Tarf</option>
                            <option value="37" id="37">Tindouf</option>
                            <option value="38" id="38">Tissemsilt</option>
                            <option value="39" id="39">El Oued</option>
                            <option value="40" id="40">Khenchela</option>
                            <option value="41" id="41">Souk Ahras</option>
                            <option value="42" id="42">Tipaza</option>
                            <option value="43" id="43">Mila</option>
                            <option value="44" id="44">Aïn Defla</option>
                            <option value="45" id="45"> Naâma</option>
                            <option value="46" id="46">Aïn Témouchent</option>
                            <option value="47" id="47">Ghardaia</option>
                            <option value="48" id="48">Relizane</option>

                        </select>

                    </div>
                                            
                    <div class="col-md-6">
                            <!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Web/API/Geolocation_API -->

                     <button type="button" id ="find-me">Afficher ma localisation</button><br/>
                       <p id = "status"></p>
                       <a id = "map-link" target="_blank"></a>

                    </div>
                    <input type="submit" value="Modifier" class="form-control btn btn-danger">

                </form>
         
  <div id="mapouter" class="row">
                                    <div class="gmap_canvas"><iframe width="500" height="250" id="gmap_canvas"
                                                                      src="https://maps.google.com/maps?q={{$pediatre->latitude}}%2C{{$pediatre->longitude}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
            </div>
        </div>
    </div>


        <script src="{{asset('assets/js/scripts.js')}}"></script>
   
<!-- script pour la géolocalisation -->
    <script>
            document.getElementById("{{$pediatre->ville}}").setAttribute("selected",true);
   </script>
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