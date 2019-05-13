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
            @isset($tops)
        <section class="team" id="Annuaire">
            <div class="container">
                <div class="row">
                    <div class="team-heading text-center col-md-12">

                        <h3 >Annuaire des pédiatres Algériens</h3>
                        <br>
                        <h4>La liste des 5 tops pédiatres du Forum</h4>


                    </div>
                    <hr>
                        @foreach($pediatres as $pediatre)
                    <div class="col-md-3 single-member col-sm-4">

                        <div class="person-detail">
                            <div class="arrow-bottom" ></div>
                            <div  style="display: inline-block; text-align: center;"><h5><a href="/profile/{{$pediatre->id}}" style="color: white; text-align: center;" class="col-md-2">{{$pediatre->name}}</a></h5> </div>
                            <br>
                            <div>
                                <p>Spécialité: {{$pediatre->specialite}}</p>

                                <p>Ville: {{$pediatre->ville}}</p>
                                <b class=""><a href="/profile/{{$pediatre->id}}">>>voir le profile</a></b>

                            </div>

                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </section>
            @endisset
        <div class="sidebar col-md-10 col-md-offset-2">
            <form role="search" method="get" action="/annuaire/search">
                <div class="input-group  row" name="search" id="search">
                    <div class="form-group col-md-10">
                        <input type="text" name="name" value="" class="col-md-3 form-control" placeholder="Rechercher par Nom" >

                    <!--Blue selectcol-md-3 form-control mdb-select-->
                    <div class="col-md-3 form-group ">
                    <select name="ville" id ="selectVille" class=" form-control mdb-select">
                        <optgroup label="choisir une ville">
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
                        <option value="TIZIOUZOU" >TIZIOUZOU</option>
                        <option value="TLEMCEN" >TLEMCEN</option>
                        </optgroup>
                    </select>
                    </div>
                    <div class="col-md-3 form-group ">
                    <select name="specialite" id="selectSpecialite" class=" form-control mdb-select">
                        <optgroup  label= "choisir une spécialité">
                        <option value="Pédiatrie Générale">Pédiatrie Générale</option>
                        <option value="Gynécologie">Gynécologie</option>
                        <option value="Néonatologie et médecine du nouveau-né">Néonatologie et médecine du nouveau-né</option>
                        <option value="Psychologie de l'Enfant">Psychologie de l'Enfant</option>
                        <option value="Cardiologie Pédiatrique">Cardiologie Pédiatrique</option>
                        </optgroup>
                    </select>
                    </div>
                    <button class="col-md-1 btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                </div>
                </div>

            </form>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <table class="table forum table-striped">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Spécialité</th>
                    <th class=" hidden-xs hidden-sm">Date du Début de Carrière</th>
                    <th>Ville</th>
                    <th>Feedback(/5)</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pediatres as $pediatre)
                   <tr>
                          <td><a href="/profile/{{$pediatre->id}}">{{$pediatre->name}}</a></td>
                       <td>{{$pediatre->specialite}}</td>
                       <td>{{$pediatre->date_debut_carriere}}</td>
                       <td>{{$pediatre->ville}}</td>
                        <td>
                                @if ($pediatre->points <1 )
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                   @endif
                                   @if ($pediatre->points >=1 && $pediatre->points <2 )
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                   @endif @if ($pediatre->points >=2 && $pediatre->points <3 )
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                   @endif @if ($pediatre->points >=3 && $pediatre->points <4  )
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star "></i>
                                       <i class="fa fa-star "></i>
                                   @endif
                                   @if ($pediatre->points >=4 && $pediatre->points <5  )
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold "></i>
                                       <i class="fa fa-star "></i>
                                   @endif
                                   @if ($pediatre->points ==5)
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold"></i>
                                       <i class="fa fa-star gold"></i>
                                   @endif
                            ({{$pediatre->points}})
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <ul>
                {{ $pediatres->fragment('foo')->links() }}

            </ul>
        </div>

    </div>


<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        jQuery.noConflict();
        $('#selectVille').select2();
        $('#selectSpecialite').select2();
        //jQuery.noConflict();$('#my-select').searchableOptionList();
    });
</script>
@endsection