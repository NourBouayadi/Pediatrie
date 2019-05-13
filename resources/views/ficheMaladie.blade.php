@extends('layouts.app')
@section('content')
<div class="container col-md-12">
    <div class="sidebar col-md-2">

        <form class="navbar-form" role="search" method="get" action="/forum/search">
            <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Rechercher" name="search" id="search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="list-group">
            <a href="{{url('ficheMaladie/create')}}"
               class=" list-group-item list-group-item-text list-group-item-success text-center"><i class="wb-plus"></i>
              Nouvelle Fiche 
            </a>

            <a href="{{url('forum')}}" class="list-group-item">Toutes les Catégories</a>
            
            <a href="{{url('forum/categorie/1')}}" class="list-group-item ">Grossesse
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 1)->count();?></span>
            </a>
            
            <a href="{{url('forum/categorie/2')}}"
               class="list-group-item ">Nouveau-Né
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 2)->count();?></span>
            </a>
            
            <a href="{{url('forum/categorie/3')}}"
               class="list-group-item ">Vetements
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 3)->count();?></span>
            </a>
            
            <a href="{{url('forum/categorie/4')}}"
               class="list-group-item ">Jouets
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 4)->count();?></span>
            </a>
            
            <a href="{{url('forum/categorie/5')}}"
               class="list-group-item ">Sommeil
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 5)->count();?></span>
            </a>
            
            <a href="{{url('forum/categorie/6')}}"
               class="list-group-item ">Santé
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 6)->count();?></span>
            </a>
            
            <a href="{{url('forum/categorie/7')}}"
               class="list-group-item ">Bien-etre
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 7)->count();?></span>
            </a>
            
            <a href="{{url('forum/categorie/8')}}"
               class="list-group-item ">Psychologie
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 8)->count();?></span>
            </a>
            
            <a href="{{url('forum/categorie/9')}}"
               class="list-group-item ">Première-Marche
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 9)->count();?></span>
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
               @foreach($fiches as $fiche)

             
                <tr>
                  <td></td>
                    


                     <td>
                         <h4><a href="{{url('ficheMaladie/show/'.$fiche->id)}}">{{$fiche->titre}}</a>
                             <br>
                              <small class="help-block"> Par

                               ped1


                               <span class="label label-primary">
                                    <?php echo App\Categorie::find($fiche->categorie_id)->name;?>
                                        
                                </span>
                              </small>
                        </h4>
                    </td>
                    

                    <td class=""> nbr de reponse</td>
                    <td class="hidden-xs hidden-sm">{{$fiche->updated_at}}</td>

                </tr>
              @endforeach
            </tbody>
        </table>
    <ul>
        {{ $fiches->fragment('foo')->links() }}
        </ul>
    </div>
   
    <br><br>
   
    <br><br>
   

    <div class="sidebar col-md-2">


        <div class="list-group">
           
            <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="{{url('#fichepro')}}"> Ma fiche professionnelle
             <span id="favoris" class="badge badge-info"></span>
             

            </a>
            <a class=" list-group-item list-group-item-text list-group-item-success text-center">Mes Articles

                <span id="sujets" class="badge badge-info"></span><br>
                    <!--Script pour compte le nombre de discussions crées par l'user auth (notification)-->
                <!--if(!$discussion->isRead && \Auth::user()->id == $discussion->user_id){-->
                <!-- </?php App\Discussion::where("user_id", "=", \Auth::user()->id )->count();?>-->
            

            </a>

            <a class="list-group-item list-group-item-text list-group-item-success text-center">Mes Fiches Maladies 
                <span id="favoris" class="badge badge-info"></span>
              
            </a>


        </div>
    </div>
</div>


@endsection
<!-- JavaScripts -->
<script>
    $(':checkbox').radiocheck();
</script>

<script>
    document.getElementById("sujets").innerHTML = document.getElementsByClassName("sujet").length;
    document.getElementById("favoris").innerHTML = document.getElementsByClassName("favoris").length;
</script>
</body>
</html>
