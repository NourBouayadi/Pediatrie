@extends('layouts.app')
@section('content')
<div class="container">


    <h3><a href="{{url('ficheMaladie')}}"> << Fiches des Maladies </a></h3>

    <div class="col-md-12" style="background-color: #f5f5f5 ; border: #000000;">
        <h2 class="col-md-offset-2"><a href="http://demo.procoderr.tech/forums/thread/1">{{$fiche->nom}}</a></h2>


        <!-- le bloc ul concerne la discussion avec l'ID cliqué-->
        <ul class="media-list forum">

            <li class="media well" style ="background-color: #ffffff ; border: none";>

                <div style="float: right;" ><a
                            class=" btn btn-default btn-xs" href="http://demo.procoderr.tech/forums/thread/1/post/1"><i
                                class=" fa fa-clock-o"></i> {{$fiche->created_at}}
                    </a>

                </div>
                <br>
                <div class="media-body">



                    <div class="col-md-10">
                        <table class="table" >
                       <tr><th class="col-md-2">Sexe</th>
                           <td>{{$fiche->sexe}}</td>

                       </tr>
                       <tr><th>Descrition</th><td> {{$fiche->description}}</td></tr>
                        <tr><th>Les Symptomes</th><td>@foreach ($symptomes as $symptome){{$symptome->nom}}<br> @endforeach</td></tr>
                       <tr><th>Traitement Medical</th><td> {{$fiche->traitement_medical}}</td></tr>
                       <tr><th>Descrition</th><td> {{$fiche->traitement_nonmedical}}</td></tr>

                   </table>
                    </div>



                </div>



            </li>
            <div><a href=""> <i></i></a></div>
        </ul>


    </ul>
    </div></div>
@endsection