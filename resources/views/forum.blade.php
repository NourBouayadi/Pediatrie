@extends('layouts.app')
@section('content')
<div class="col-md-offset-4" style="padding-top: 0rem; padding-bottom: 0rem;">
    <h3><a href="/forum">Premier Forum Algérien de Pédiatrie</a></h3>

</div>
<div class="col-md-offset-1"><p><a href="/"> << Accueil</a> > <a href="/forum"> Forum</a></p></div><br>
<div class="container col-md-12">

    <div class="sidebar col-md-2">

        <form class="navbar-form" role="search" method="get" action="/forum/search">

            <div class="input-group">
                @if(isset($search))
                    <input type="text" value="{{$search}}" class="form-control" placeholder="Rechercher" name="search" id="search">
                @else
                    <input type="text" value="" class="form-control" placeholder="Rechercher" name="search" id="search">
                @endif
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
      
      <div class="list-group">
          @auth
            @if(\Auth::user()->type() == "mom"||\Auth::user()->type() == "modratrice"||\Auth::user()->type() == "pediatre")
            <a href="{{url('forum/create')}}"
               class=" list-group-item list-group-item-text list-group-item-success text-center"><i class="wb-plus"></i>
                 
                  <?php
    
                    if (\Auth::user()->type() == "pediatre"){
           
                            echo "Nouveau Article";
            
                        }
                      elseif(\Auth::user()->type() == "mom"||\Auth::user()->type() == "modratrice")
                            
                            echo "Nouvelle Discussion";
                   ?>          
            
                    </a>
                @endif
            @endauth
            <a href="{{url('forum')}}" class="list-group-item">Toutes les Catégories</a>
            
            <a href="{{url('forum/categorie/1')}}" class="list-group-item ">Grossesse
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 1)->count();?>
                </span>
            </a>
            
            <a href="{{url('forum/categorie/2')}}"
               class="list-group-item ">Nouveau-Né
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 2)->count();?>
                </span>
            </a>
            
            <a href="{{url('forum/categorie/3')}}"
               class="list-group-item ">Vetements
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 3)->count();?>
                </span>
            </a>
            
            <a href="{{url('forum/categorie/4')}}"
               class="list-group-item ">Jouets
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 4)->count();?>
                </span>
            </a>
            
            <a href="{{url('forum/categorie/5')}}"
               class="list-group-item ">Sommeil
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 5)->count();?>
                </span>
            </a>
            
            <a href="{{url('forum/categorie/6')}}"
               class="list-group-item ">Santé
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 6)->count();?>
                </span>
            </a>
            
            <a href="{{url('forum/categorie/7')}}"
               class="list-group-item ">Bien-etre
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 7)->count();?>
                </span>
            </a>
            
            <a href="{{url('forum/categorie/8')}}"
               class="list-group-item ">Psychologie
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 8)->count();?>
                </span>
            </a>
            
            <a href="{{url('forum/categorie/9')}}"
               class="list-group-item ">Première-Marche
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 9)->count();?>
                </span>
            </a>

        </div>
    </div>

    <div class="col-md-8">

        <table class="table forum table-striped">
    
            <thead>
            <tr>
                <th class="cell-stat"></th>
                <th>Titres</th>
                <th>Total Réponses</th>
                <th class=" hidden-xs hidden-sm">Date de dernière réponse</th>
            </tr>
            </thead>
            
            <tbody>
    

  
                @foreach($discussions as $discussion)
                    @auth
                   <?php 


                    if (\Auth::user()->type() == "mom"||\Auth::user()->type() == "modratrice"){
                             $class='fa fa-star-o';
                        
                        if(App\Favori::where('user_id','=',\Auth::user()->id)
                                    ->where('discussion_id','=',$discussion->id)->first()!=null)
                        
                            $class='fa fa-star';}
                    ?>

                    @endauth

                <tr>

              @auth
                <?php                  

                  if (\Auth::user()->type() == "mom"||\Auth::user()->type() == "modratrice"){
                    
                ?>
                           <td class='text-center'><i class='{{$class}}' id='{{$discussion->id}}'
                                                    onclick='favoris(this)'>
                                </i></td>
                                            
                <?php } ?>
                    @endauth
               <?php  
                
                   if(\Auth::user()==null||\Auth::user()->type() == "pediatre"||\Auth::user()->type() == "admin"){
                                 
                 ?>
                                

                               <td class='text-center'><i>
                                </i></td>  
                  <?php } ?>

                  <td>

                       <h4><a href="/forum/show/{{$discussion->id}}">{{$discussion->titre}}</a>
                            <br>

                            <small class="help-block"> Par
                               @if(App\User::find($discussion->user_id)->isPediatre==1) <a href="/profile/{{$discussion->user_id}}">@endif
                                    <?php echo App\User::find($discussion->user_id)->name;?></a>

                                <span class="label label-primary">
                                    <?php echo App\Categorie::find($discussion->categorie_id)->name;?>
                                        
                                </span>
                            </small>
                        
                        </h4>
                    </td>
                    <td class="text-center"><?php echo App\Message::where("discussion_id", "=", $discussion->id)->count();?></td>
                    <td class="hidden-xs hidden-sm">{{$discussion->updated_at}}</td>


                </tr>
            @endforeach
            </tbody>
        </table>

        <ul>
                {{ $discussions->fragment('foo')->links() }}

        </ul>
    </div>
    <br><br>
    @auth
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
    @endauth
</div>


<!-- JavaScripts -->
<script>
    $(':checkbox').radiocheck();
</script>
<script>
    function favoris(fav) {

        //if(fav.getAttribute("class") == "fa fa-star-o") {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("demo").innerHTML = this.responseText;
                fav.setAttribute("class", xhttp.response);
            }
        };
        xhttp.open("GET", "forum/fav/" + fav.getAttribute("id"), true);
        xhttp.send();
        /*}
        else {
            fav.setAttribute("class", "fa fa-star-o");
        }*/

    }
</script>
<script>
    document.getElementById("sujets").innerHTML = document.getElementsByClassName("sujet").length;
    document.getElementById("favoris").innerHTML = document.getElementsByClassName("favoris").length;
</script>
@endsection
