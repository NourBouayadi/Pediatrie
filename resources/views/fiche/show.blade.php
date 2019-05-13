<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PediatreDZ</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets//css/app.css')}}">
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
                        admin
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
<div class="container">
<h3><a href="{{url('ficheMaladie')}}"> << ficheMaladie </a></h3>

    <div class="col-md-12" style="background-color: #f5f5f5 ; border: #000000;">
        <h2 class="col-md-offset-3"><a href="http://demo.procoderr.tech/forums/thread/1">{{$fiche->titre}}</a></h2>




 <div class="forum-post-panel btn-group btn-group-xs">
                        <form action="{{url('ficheMaladie/'.$fiche->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <a href="{{url('ficheMaladie/edit/'.$fiche->id)}}" ><i
                                        class="wb-pencil btn btn-info btn-xs"></i>
                                <span class="hidden-xs">
          </span>
                            </a>

                            <button type="submit" class="wb-trash btn btn-danger btn-xs" onclick="supprimer();"></button>
                            <span class="hidden-xs"></span>

                        </form>
                    </div>


        <!-- le bloc ul concerne la fiche avec l'ID cliqué-->
        <ul class="media-list forum">

            <li class="media well" style ="background-color: #ffffff ; border: none";>
                
               

                <div class="media-body">

                    <center><p>{{$fiche->description}}</p></center>

                </div>
             
                <hr>   <hr>
               <div class="media-body">
                     
                    <p> Symptomes :
                        <br>
                        {{$fiche->symptomes}}</p>

                </div>
              <hr>

               <div class="media-body">

                    <p> Age :
                        <br>
                        {{$fiche->age}}</p>

                </div>


              <hr>
               <div class="media-body">


                    <p>Sexe :
                        <br>
                        {{$fiche->sexe}}</p>

                </div>
            
<hr>
               <div class="media-body">

                    <p>Traitement Médicaux :
                        <br>{{$fiche->traitementMedicaux}}</p>

                </div>


<hr>
               <div class="media-body">

                    <p>Traitement Non Médicaux :
                        <br>{{$fiche->traitementNonMedicaux}}</p>

                </div>
         

<hr>
               <div class="media-body">

                    <p>
                        <br>
                         pédiatres recommandées :
                        {{$fiche->recommendation}}</p>

                </div>


            </li>
            <div class="container">

<div  class="col-md-8">
                  <strong>
                       <p>Publié par  :
                        <br>
                        <a href="http://demo.procoderr.tech/profile/admin">
                            {{$fiche->getAuthor()}}
                        </a>
                    </p>
                    </strong>
 

</div>
  


                </div>
        


        </ul>
  
   
</div>
<footer class="footer">
    <div class="container">
        Copyright &copy; Procoderr 2019 - All rights reserved
        <span class="pull-right"><a href="/contact">Contact Us</a></span>
    </div>
</footer>

<!-- JavaScripts -->
<script src="/js/scripts.js"></script>
<script>
    $(':checkbox').radiocheck();
</script>

<script src="/js/dist/simplemde.min.js"></script>
<script>
    $(document).ready(function () {
        new SimpleMDE({
            element: document.getElementById("message"),
            height: 300,
            spellChecker: false,
            showIcons: ["code", "table"],
        });
    });
</script>

<style>
    .CodeMirror {
        min-height: 200px;
        height: 200px;
    }
</style>


<script>
    $(document).on("click", ".report-post", function (e) {
        e.preventDefault();
        var _self = $(this);
        var threadID = _self.data('threadid');
        var postID = _self.data('postid');
        $("#reason").text('');
        $(".report-post-form").attr("action", "/forums/thread/" + threadID + "/" + postID);
        $(_self.attr('href')).modal('show');
    });
</script>
<script>

    function likes(like) {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              
                like.setAttribute("class", xhttp.response);
            }
        };
        xhttp.open("GET", "/forum/like/" + like.getAttribute("id"), true);
        xhttp.send();
    }
</script>
<script>
    function supprimer() {
        if (!confirm("Voulez-vous supprimer ?"))
            event.preventDefault();
    }
</script>
</body>
</html>
