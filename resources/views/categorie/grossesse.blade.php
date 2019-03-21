<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PediatreDZ</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/font-awesome.css')}}">

</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">


            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <!-- Branding Image -->
            <a class="navbar-brand" href="http://demo.procoderr.tech">
                Procoderr Demo

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li class=active>
                    <a href="http://demo.procoderr.tech/forums">Forums</a>
                </li>

                <li>
                    <a href="http://demo.procoderr.tech/users">Users</a>
                </li>

                <li>
                    <a href="http://demo.procoderr.tech/profile">Profile</a>
                </li>

                <li>
                    <a href="http://demo.procoderr.tech/admin">Admin Panel</a>
                </li>

                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        prouser
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="http://demo.procoderr.tech/settings"><i class="wb-settings "></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="http://demo.procoderr.tech/logout"><i class="fa fa-btn fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container col-md-12">
    <div class="sidebar col-md-2">
        <form class="navbar-form" role="search" method="get" action="search">
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
                Nouvelle Discussion
            </a>


            <a href="{{url('forum')}}" class="list-group-item">Toutes les Catégories</a>
            <a href="{{url('forum/1')}}" class="list-group-item ">Grossesse
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 1)->count();?></span>
            </a>
            <a href="{{url('forum/2')}}"
               class="list-group-item ">Nouveau-Né
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 2)->count();?></span>
            </a>
            <a href="{{url('forum/3')}}"
               class="list-group-item ">Vetements
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 3)->count();?></span>
            </a>
            <a href="{{url('forum/4')}}"
               class="list-group-item ">Jouets
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 4)->count();?></span>
            </a>
            <a href="{{url('forum/5')}}"
               class="list-group-item ">Sommeil
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 5)->count();?></span>
            </a>
            <a href="{{url('forum/6')}}"
               class="list-group-item ">Santé
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 6)->count();?></span>
            </a>
            <a href="{{url('forum/7')}}"
               class="list-group-item ">Bien-etre
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 7)->count();?></span>
            </a>
            <a href="{{url('forum/8')}}"
               class="list-group-item ">Psychologie
                <span class="badge badge-info"><?php echo App\Discussion::where("categorie_id", "=", 8)->count();?></span>
            </a>
            <a href="{{url('forum/9')}}"
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
                <th class=" hidden-xs hidden-sm">Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($discussions as $discussion)
                <!-- ajouter a la table favoris avec l'id de la maman authentifie et l'id de la discussion cliqquée-->
                <?php $class='fa fa-star-o';
                if(App\Favori::where('mom_id','=',\Auth::guard('mom')->user()->id())
                        ->where('discussion_id','=',$discussion->id)->first()!=null)

                    $class='fa fa-star';
                ?>

                <!--afficher la table des discussions -->
                <tr>
                    <td class="text-center"><i class="{{$class}}" id="{{$discussion->id}}"
                                               onclick="favoris(this)"></i></td>
                    <td>
                        <h4><a href="forum/show/{{$discussion->id}}">{{$discussion->titre}}</a>
                            <br>
                            <small class="help-block"> Par
                                <a href="http://demo.procoderr.tech/profile/prouser"><?php echo App\Mom::find($discussion->mom_id)->name;?></a>

                                <span class="label label-primary"><?php echo App\Categorie::find($discussion->categorie_id)->name;?></span>
                            </small>
                        </h4>
                    </td>
                    <!-- calculer le nombre total de réponse-->
                    <td class="text-center"><?php echo App\Message::where("discussion_id", "=", $discussion->id)->count();?></td>
                    <td class="hidden-xs hidden-sm">{{$discussion->created_at}}</td>


                </tr>


            @endforeach
            </tbody>
        </table>

        <ul class="pagination">
            <li class="disabled"><span>&laquo;</span></li>
            <li class="active"><span>1</span></li>
            <li><a href="http://demo.procoderr.tech/forums?page=2">2</a></li>
            <li><a href="http://demo.procoderr.tech/forums?page=3">3</a></li>
            <li><a href="http://demo.procoderr.tech/forums?page=4">4</a></li>
            <li><a href="http://demo.procoderr.tech/forums?page=5">5</a></li>
            <li><a href="http://demo.procoderr.tech/forums?page=6">6</a></li>
            <li><a href="http://demo.procoderr.tech/forums?page=7">7</a></li>
            <li><a href="http://demo.procoderr.tech/forums?page=8">8</a></li>
            <li class="disabled"><span>...</span></li>
            <li><a href="http://demo.procoderr.tech/forums?page=14">14</a></li>
            <li><a href="http://demo.procoderr.tech/forums?page=15">15</a></li>
            <li><a href="http://demo.procoderr.tech/forums?page=2" rel="next">&raquo;</a></li>
        </ul>
    </div>
    <br><br>
    <div class="sidebar col-md-2">


        <div class="list-group">
            <a href="{{url('forum/1')}}"
               class=" list-group-item list-group-item-text list-group-item-success text-center">Mes Sujets

                <span id="sujets" class="badge badge-info"></span><br>
                @foreach(App\Discussion::all() as $discussion)
                    <?php
                    if(!$discussion->isRead && \Auth::guard('mom')->user()->id() == $discussion->mom_id){
                    ?>


                    <a href="forum/show/{{$discussion->id}}" class="list-group-item sujet"> {{$discussion->titre}}</a>
                    <?php } ?>

                @endforeach


            </a>
            <a href="{{url('forum/2')}}"
               class=" list-group-item list-group-item-text list-group-item-success text-center">Favoris
                <span id="favoris" class="badge badge-info"></span>
                @foreach(App\Favori::where('mom_id','=',\Auth::guard('mom')->user()->id())->get() as $favori)

                    <a href="forum/show/{{$favori->discussion_id}}" class="list-group-item favoris"> {{App\Discussion::find($favori->discussion_id)->titre}}</a>

                @endforeach

            </a>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        Copyright &copy; Procoderr 2019 - All rights reserved
        <span class="pull-right"><a href="/contact">Contact Us</a></span>
    </div>
</footer>

<!-- JavaScripts -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
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
