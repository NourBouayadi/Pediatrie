<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> PediatrieDZ</title>

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
                Pediatrie-DZ

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li  class=active>
                    <a href="http://demo.procoderr.tech/forums">Accueil</a>
                </li>

                <li  class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Catégories
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li >
                            <a href="http://demo.procoderr.tech/settings">
                                Grossesse
                            </a>
                        </li>
                        <li>
                            <a href="http://demo.procoderr.tech/logout">Nouveau-Né</a>
                        </li>
                        <li>
                            <a href="http://demo.procoderr.tech/logout">Vêtements</a>
                        </li>
                        <li>
                            <a href="http://demo.procoderr.tech/logout">Jouets</a>
                        </li>
                        <li>
                            <a href="http://demo.procoderr.tech/logout">Sommeil</a>
                        </li>
                        <li>
                            <a href="http://demo.procoderr.tech/logout">Santé</a>
                        </li>
                        <li>
                            <a href="http://demo.procoderr.tech/logout">Bien-être</a>
                        </li>
                        <li>
                            <a href="http://demo.procoderr.tech/logout">Psychologie</a>
                        </li>
                        <li>
                            <a href="http://demo.procoderr.tech/logout">Premières Marches</a>
                        </li>

                    </ul>
                </li>

                <li  >
                    <a href="http://demo.procoderr.tech/profile">Annuaire</a>
                </li>

                <li>
                    <a href="http://demo.procoderr.tech/admin">FAQ</a>
                </li>

                <li>
                    <a href="http://demo.procoderr.tech/admin">Forum</a>
                </li>

                <li>
                    <a href="http://demo.procoderr.tech/admin">Prédire</a>
                </li>

                <li>
                    <a href="#">
                        Adiba

                    </a>


                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">




<div class="profile-panel">
        <div class="col-md-4">
            <div class="panel-default panel widget widget-shadow text-center">
                <div class="widget-header">
                    <div class="widget-header-content">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                            <img width=100px src="">
                        </a>
                        <h4 class="profile-user"></h4>
                        <span class="label label-primary">Pédiatre</span>
                                                <p>
                            
                        </p>
                        <p class="help-block">
                                                            Last Active <b>2019 years ago</b>
                                <br>
                                                        Registered <b>1 month ago</b>
                        </p>  
                         <button type="button" class="btn btn-inverse" data-toggle="modal"
                                        data-target="#give_feedback">
                                    <i class="wb-plus"></i> Feedback
                                </button>
                                                                                                       
                                            </div>
                </div>
                                    <div class="widget-footer">
                        <div class="row no-space">
                            <strong class="profile-stat-count text-success"> 1 </strong>
                            <span> Feedback Points </span>
                        </div>
                    </div>
                            </div>

        </div>








</div>


<div class="tabbable-panel col-md-8">
        <div class="tabbable-line">
            <ul class="nav nav-tabs ">
                <li class="active">
                    <a href="#profile" data-toggle="tab">
                        Profile
                    </a>
                </li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane active" id="profile">   
                
                <div class="media" title="">
                <a class="pull-left" href="/profile/admin">
                <img src=""class="">
                            </a>
                       
                 <div class="media-body">
                  
<table>

                
    <tr>
        <td>
 
           Nom : Ped1
          <hr>
        </td>
    </tr>
 
  <tr>
        <td>
          Description :   Pediatre
          <hr>
        </td>
    </tr>


  <tr>
        <td>
            Date Début de Carriére : 2018-12-11
          <hr>
        </td>
    </tr>


  <tr>
        <td>
            Spécialité : Pédiatrie Générale
          <hr>
        </td>
    </tr>


  <tr>
        <td>
            Numéro de Téléphone : 0000000000
          <hr>
        </td>
    </tr>

  <tr>
        <td>
            Adresse de Cabinet: adresse
          <hr>
        </td>
    </tr>
    

</table>


 <form method="POST" action="" accept-charset="UTF-8">
        {{csrf_field()}}
        <div class="tile">
        <span class="help-block">
           Laissez un Commentaire 
        </span>



            <div class="form-group">

                <textarea class="form-control fl flat" rows="5" id="message" name="description" cols="50"></textarea>
                <input type="text" name="discussion_id" hidden value="">
      
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn btn-wide" type="submit" value="Reply">
            </div>
        </div>
    </form>



                            </div>
                        </div>
                </div>     

   <div class="modal fade" id="give_feedback" role="dialog">
    <div class="modal-dialog  modal-center">
        
        <div class="modal-content">
            
            <div class="modal-header">
            
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            
                <h4 class="modal-title">Feedback for Pédiatre</h4>
            </div>

            <form method="POST" action="http://demo.procoderr.tech/profile/admin/feedback" accept-charset="UTF-8">

            <input name="_token" type="hidden" value="bubVJ7cqwd2z9dmEUWihJBHpXC0KRE7atP0sdpwX">
            <div class="modal-body">

                <label for="points">Points</label>
                <select class="form-control" id="points" name="points">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <label for="text">Feedback</label>
                <textarea class="form-control" rows="2" placeholder="Enter your feedback" name="text" cols="50" id="text">
                    
                </textarea>

            </div>
    
               


<footer class="footer">
    <div class="container">
        Copyright &copy; Procoderr 2019 - All rights reserved
        <span class="pull-right"><a href="/contact">Contact Us</a></span>
    </div>
</footer>

<!-- JavaScripts -->
<script src="{{asset('assets/js/script2.js')}}"></script>
 <script src="{{asset('assets/js/confirm_password.js')}}"></script>
<script>
    $(':checkbox').radiocheck();
</script>

</body>
</html>
