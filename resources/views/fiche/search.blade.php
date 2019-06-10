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
    <div class="col-md-offset-4" style="padding-top: 0rem; padding-bottom: 0rem;">
        <h3><a href="/forum">Prédiction de Maladies</a></h3>

    </div>
    <div class="col-md-offset-1"><p><a href="/"> << Accueil</a> > <a href="/ficheMaladie"> Annuaires des Maladies</a></p></div><br>
    <div class="container col-md-12">

        <div class="sidebar col-md-2">
            <br><br>            <br><br>



            <div class="list-group">
                @if (\Auth::user()->type() == "pediatre")

                <a href="{{url('ficheMaladie/create')}}"
                   class=" list-group-item list-group-item-text list-group-item-success text-center"><i class="wb-plus"></i>

                    Nouvelle Fiche
                </a>
                @endif

                <a href="{{url('ficheMaladie')}}" class="list-group-item">Toutes les Catégories</a>

                <a href="{{url('ficheMaladie/categorie/1')}}" class="list-group-item ">Grossesse
                    <span class="badge badge-info"><?php echo App\Maladie::where("categorie_id", "=", 1)->count();?>
                </span>
                </a>

                <a href="{{url('ficheMaladie/categorie/2')}}"
                   class="list-group-item ">Nouveau-Né
                    <span class="badge badge-info"><?php echo App\Maladie::where("categorie_id", "=", 2)->count();?>
                </span>
                </a>

                <a href="{{url('ficheMaladie/categorie/3')}}"
                   class="list-group-item ">Vetements
                    <span class="badge badge-info"><?php echo App\Maladie::where("categorie_id", "=", 3)->count();?>
                </span>
                </a>

                <a href="{{url('ficheMaladie/categorie/4')}}"
                   class="list-group-item ">Jouets
                    <span class="badge badge-info"><?php echo App\Maladie::where("categorie_id", "=", 4)->count();?>
                </span>
                </a>

                <a href="{{url('ficheMaladie/categorie/5')}}"
                   class="list-group-item ">Sommeil
                    <span class="badge badge-info"><?php echo App\Maladie::where("categorie_id", "=", 5)->count();?>
                </span>
                </a>

                <a href="{{url('ficheMaladie/categorie/6')}}"
                   class="list-group-item ">Santé
                    <span class="badge badge-info"><?php echo App\Maladie::where("categorie_id", "=", 6)->count();?>
                </span>
                </a>

                <a href="{{url('ficheMaladie/categorie/7')}}"
                   class="list-group-item ">Bien-etre
                    <span class="badge badge-info"><?php echo App\Maladie::where("categorie_id", "=", 7)->count();?>
                </span>
                </a>

                <a href="{{url('ficheMaladie/categorie/8')}}"
                   class="list-group-item ">Psychologie
                    <span class="badge badge-info"><?php echo App\Maladie::where("categorie_id", "=", 8)->count();?>
                </span>
                </a>

                <a href="{{url('ficheMaladie/categorie/9')}}"
                   class="list-group-item ">Première-Marche
                    <span class="badge badge-info"><?php echo App\Maladie::where("categorie_id", "=", 9)->count();?>
                </span>
                </a>

            </div>
        </div>

        <div class="col-md-8">
            <div class="sidebar col-md-10 col-md-offset-2">
                <form role="search" method="get" action="/ficheMaladie/search">
                    <div class="input-group  row" name="search" id="search">
                        <p>Saisir le nom de la maladies ou les symptomes de votre enfant et notre système prédit la maladie</p>
                        <div class="form-group col-md-4">
                            <input type="text" name="nom" value="" class=" form-control" placeholder="Rechercher par Nom" >
                        </div>
                        <!--Blue selectcol-md-3 form-control mdb-select-->

                        <div class="form-group col-md-3">  <select id="selectSymptome" name="symptomes[]" class="js-states form-control mdb-select" multiple>
                                @foreach($symptomes as $symptome)
                                    <option value="{{$symptome->id}}">{{$symptome->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form></div>
            <table class="table forum table-striped">

                <thead>
                <tr>
                    <th class="cell-stat"></th>
                    <th>Nom</th>
                    <th>Taux de Correspondance</th>
                    <th class=" hidden-xs hidden-sm">Remarque</th>
                </tr>
                </thead>

                <tbody>
                @foreach($fiches as $fiche)
                    <tr><td></td>
                        <td>

                            <h4><a href="/ficheMaladie/show/{{$fiche->id}}">{{$fiche->nom}}</a>
                                <br>

                                <small class="help-block"> Par

                                    @if(App\User::find($fiche->pediatre_id)->isPediatre==1) <a href="/profile/{{$fiche->pediatre_id}}"> @endif
                                        {{$fiche->name}}</a>

                                    <span class="label label-primary">
                                    <?php echo App\Categorie::find($fiche->categorie_id)->name;?>

                                </span>
                                </small>

                            </h4>
                        </td>
                        <td class="">{{number_format($fiche->taux,2)}} %</td>
                        <td class="hidden-xs hidden-sm">
                            @if($fiche->taux ==100)
                                @if(!$fiche->missing)
                                    <p>La maladie la plus probable: {{$fiche->nom}}</p>
                                @else
                                    <p>La maladie la plus probable: {{$fiche->nom}} avec l'apparition d'autres symptomes pouvant correspondre à une autre maladie </p>
                                @endif
                             @else
                                <p>Possibilité d'apparition d'autres symtpomes de cette maladie dans le future</p>
                            @endif
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <br><br>
        <br><br>
        <div class="sidebar col-md-2">


            <div class="list-group">


                @if (\Auth::user()->type() == "pediatre")
                    <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="/profile/{{\Auth::user()->id}}"> Ma Fiche Professionnelle
                    </a>
                    <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="{{url('/forum/sujet')}}">
                        Mes Articles
                        <span id="sujets" class="badge badge-info"></span><br>
                        @foreach(App\Discussion::where('user_id','=',\Auth::user()->id)->where('isRead','=',false)->get() as $discussion)
                            <a href="forum/show/ {{$discussion->id}}" class="list-group-item sujet"> {{$discussion->titre}}</a>
                        @endforeach

                    </a>
                    <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="{{url('/ficheMaladie/fiche')}}">Mes Fiches Maladies</a>
                    </a>
                @elseif(\Auth::user()->type() == "mom" || \Auth::user()->type() == "modratrice")
                    <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="{{url('/forum/sujet')}}">Mes Sujets
                        <span id="sujets" class="badge badge-info"></span><br>
                        @foreach(App\Discussion::where('user_id','=',\Auth::user()->id)->where('isRead','=',false)->get() as $discussion)
                            <a href="forum/show/ {{$discussion->id}}" class="list-group-item sujet"> {{$discussion->titre}}</a>
                        @endforeach
                    </a>
                    <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="{{url('#MesFavoris')}}">Mes Favoris
                        <span id="favoris" class="badge badge-info"></span>
                        @foreach(App\Favori::where('user_id','=',\Auth::user()->id)->get() as $favori)

                            <a href="forum/show/{{$favori->discussion_id}}" class="list-group-item favoris"> {{App\Discussion::find($favori->discussion_id)->titre}}</a>

                        @endforeach
                    </a>
                @endif


            </div>
        </div>
    </div>

    <!--  <div class="container col-md-12">-->
    <br>
    <!-- team section -->

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

    <script>
        document.getElementById("sujets").innerHTML = document.getElementsByClassName("sujet").length;
        document.getElementById("favoris").innerHTML = document.getElementsByClassName("favoris").length;
    </script>
@endsection
