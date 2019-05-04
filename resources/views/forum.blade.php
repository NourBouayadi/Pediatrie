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
            
            <a href="{{url('forum/create')}}"
               class=" list-group-item list-group-item-text list-group-item-success text-center"><i class="wb-plus"></i>
                 
                  <?php
    
                    if (\Auth::user()->type() == "pediatre"){
           
                            echo "Nouveau Article";
            
                        }
                      elseif(\Auth::user()->type() == "mom")
                            
                            echo "Nouvelle Discussion";
                   ?>          
            
            </a>


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
                   <?php 


                    if (\Auth::user()->type() == "mom"){
                             $class='fa fa-star-o';
                        
                        if(App\Favori::where('user_id','=',\Auth::user()->id)
                                    ->where('discussion_id','=',$discussion->id)->first()!=null)
                        
                            $class='fa fa-star';}
                    ?>



                <tr>

              
                <?php                  
                
                  if (\Auth::user()->type() == "mom"){
                    
                ?>
                           <td class='text-center'><i class='{{$class}}' id='{{$discussion->id}}'
                                                    onclick='favoris(this)'>
                                </i></td>
                                            
                <?php } ?>

               <?php  
                
                   if(\Auth::user()->type() == "pediatre"){
                                 
                 ?>
                                

                               <td class='text-center'><i>
                                </i></td>  
                  <?php } ?>

                  <td>

                       <h4><a href="forum/show/{{$discussion->id}}">{{$discussion->titre}}</a>
                            <br>

                            <small class="help-block"> Par
                                <a href="forum/profile/{{$discussion->user_id}}">
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
    <br><br>
    <div class="sidebar col-md-2">


        <div class="list-group">
        
     
         <?php
    
                    if (\Auth::user()->type() == "pediatre"){
            
                    
            ?> 
                          <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="profile"> Ma Fiche Professionnelle
       

      <?php        
                          }


  ?>  

</a>




           
           <?php
       
                    if (\Auth::user()->type() == "pediatre"){
            ?> 
            
              <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="{{url('#MesArticles')}}">
                
               Mes Articles
          
             <?php  } ?> 

            
            
             <?php   
                        if(\Auth::user()->type() == "mom"){
            
             ?>
              
               <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="{{url('#MesSujets')}}">Mes Sujets
              
              <?php  } ?>              
                
                <span id="sujets" class="badge badge-info"></span><br>
                    <!--Script pour compte le nombre de discussions crées par l'user auth (notification)-->
                <!--if(!$discussion->isRead && \Auth::user()->id == $discussion->user_id){-->
                <!-- </?php App\Discussion::where("user_id", "=", \Auth::user()->id )->count();?>-->
                @foreach(App\Discussion::all() as $discussion)
                    <?php



                    if(\Auth::user()->id == $discussion->user_id){
                             

                    ?>


                    <a href="forum/show/ {{$discussion->id}}" class="list-group-item sujet"> {{$discussion->titre}}</a>
                    <?php } ?>

                @endforeach

            </a>
        
            <?php
       
                    if (\Auth::user()->type() == "pediatre"){
            ?> 
                      <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="{{url('ficheMaladie')}}">Mes Fiches Maladies</a>
             
 
            <?php  } ?> 
            
     

                    <?php   
                      if(\Auth::user()->type() == "mom"){
                         ?>
                            <a class=" list-group-item list-group-item-text list-group-item-success text-center" href="{{url('#MesFavoris')}}">Mes Favoris</a>
                     <?php  } ?>          
               
                <span id="favoris" class="badge badge-info"></span>
                @foreach(App\Favori::where('user_id','=',\Auth::user()->id)->get() as $favori)

                    <a href="forum/show/{{$favori->discussion_id}}" class="list-group-item favoris"> {{App\Discussion::find($favori->discussion_id)->titre}}</a>

                @endforeach

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
    function favoris(fav) {

        //if(fav.getAttribute("class") == "fa fa-star-o") {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("demo").innerHTML = this.responseText;
                fav.setAttribute("class", xhttp.response);
            }
        };
        xhttp.open("GET", "form/fav/" + fav.getAttribute("id"), true);
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
</body>
</html>
