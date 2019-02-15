
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Viewing prouser | Procoderr</title>

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





    <div class="tabbable-panel">
        <div class="tabbable-line">
            <ul class="nav nav-tabs ">
                <li class="active">
                    <a href="#formulaire_maman" data-toggle="tab">
                        Maman
                    </a>
                </li>
                <li>
                    <a href="#formulaire_pediatre" data-toggle="tab">
                        Pédiatrie
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="formulaire_maman">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Pseudo</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Exemple: Nour13">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entez votre email">
                            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de Passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirmer Mot de Passe</label>
                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirmez votre mot de passe">
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


                <div class="tab-pane" id="formulaire_pediatre">
                   PEDIATRE FORUM


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
