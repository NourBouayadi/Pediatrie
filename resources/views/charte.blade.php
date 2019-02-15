<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Forums | Procoderr</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/font-awesome.css')}}">
    <style>
        #charte{
            text-align: center;
        }
    </style>
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
    <div class="table table-bordered" id ="charte">

        <p>

        <h1>Charte déontologique</h1>
        <h3>Publié par : rédaction Pediatre-Dz</h3>

        <b>Contenu et objectif du site:</b>
        Le site Pediatre-Dz est destiné au grand public, aux mamans et aux pédiatres.
        Il fournit des articles médicaux, de santé pratique, de forme et de bien-être pour les aider les mamans,
        des actualités sur  la santé en rapport avec les enfants, etc.
        Les informations diffusées sur ce site ne peuvent en aucun cas remplacer l’avis d’un pédiatre.
        Un examen par un praticien est indispensable pour établir un diagnostic,
        et éventuellement la prescription d’un traitement. Les informations relatives à un thème,
        ou à une maladie n’ont pas vocation à être exhaustives, mais ont pour principal objectif d’aider
        et d’orienter les mamanns s’intéressant à la santé de leur bébés.  Par ailleurs, les informations diffusées sur Pediatre-Dz
        concernant les traitements ne peuvent se substituer à une prescription médicale. Pediatre-Dz n’est responsable
        d’aucun des produits (médicaments, compléments alimentaires, matériels médicaux…) cités.
        Le site Pediatre-Dz réactualise les sujets liés à la santé en fonction de nouvelles informations pertinentes sur ce sujet.
        Dans les autres cas, le contenu éditorial des articles mis en ligne est reconsidéré et réactualisé tous les cinq ans.
        Chaque article est daté. Toutefois, en raison de l’évolution des informations médicales et scientifiques parfois très
        rapide, Pediatre-Dz ne serait être tenu responsable d’éventuelles conséquences dommageables de données erronées ou non
        remises à jour.
        </p>
        </span>
    </div>
    <hr>
</div>
<script src="{{asset('assets/js/scripts.js')}}"></script>

<script>
    $(':checkbox').radiocheck();
</script>
</body>
</html>