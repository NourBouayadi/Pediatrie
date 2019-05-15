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
        <table class="table forum table-striped">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Vue</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($fiches as $fiche)
                <tr>
                    <td> {{$fiche->nom}}</td>
                    <td>{{$fiche->sexe}}
                    <td> {{$fiche->vue}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>        <div class="sidebar col-md-10 col-md-offset-2">
            <form role="search" method="get" action="/ficheMaladie/search">
                <div class="input-group  row" name="search" id="search">
                    <div class="form-group col-md-3">
                        <input type="text" name="nom" value="" class=" form-control" placeholder="Rechercher par Nom" >
                    </div>
                    <!--Blue selectcol-md-3 form-control mdb-select-->
                    <div class="form-group col-md-3">
                        <select name="sexe" class=" form-control mdb-select">
                            <option value="">choisir le sexe</option>
                                <option value="indifferent">indifferent</option>
                                <option  value="fille">Fille</option>
                                <option  value="garcon">Garçon</option>

                         </select>
                    </div>
                    <div class="form-group col-md-3">  <select id="selectSymptome" name="symptomes[]" class="js-states form-control mdb-select" multiple>
                            @foreach($symptomes as $symptome)
                                <option value="{{$symptome->id}}">{{$symptome->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form></div>
        </form>
    </div>
    </div>

<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function() {
        jQuery.noConflict();
        $('#selectSymptome').select2();


        //jQuery.noConflict();$('#my-select').searchableOptionList();
    });
</script>
@endsection
