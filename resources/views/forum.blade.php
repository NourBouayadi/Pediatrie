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
                            <a href="http://demo.procoderr.tech/forums">Forums</a>
                        </li>

                    <li  >
                        <a href="http://demo.procoderr.tech/users">Users</a>
                    </li>

                    <li  >
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
                            <li >
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


    <div class="sidebar col-md-3">

        <form class="navbar-form" role="search">
    <div class="input-group">
        <input type="text" value="" class="form-control" placeholder="Search" name="search" id="search">
        <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
        <div class="list-group">
            <a href="http://demo.procoderr.tech/forums/create"
               class=" list-group-item list-group-item-text list-group-item-success text-center"><i class="wb-plus"></i>
Thread
            </a>

            <a href="http://demo.procoderr.tech/forums" class="list-group-item">All</a>
                            <a href="http://demo.procoderr.tech/forums/general"
                   class="list-group-item ">General
                    <span class="badge badge-info">8</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/site%20feedback"
                   class="list-group-item ">Site Feedback
<span class="badge badge-info">2</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/jjj"
                   class="list-group-item ">Jjj
                    <span class="badge badge-info">3</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/cars"
                   class="list-group-item ">Cars
                    <span class="badge badge-info">9</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/boats"
                   class="list-group-item ">Boats
                    <span class="badge badge-info">23</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/computer%20technology"
                   class="list-group-item ">Computer Technology
<span class="badge badge-info">5</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/zozo"
                   class="list-group-item ">zozo
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/dsffs"
                   class="list-group-item ">dsffs
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/dsffs2222222222222222222222222222222222222"
                   class="list-group-item ">dsffs2222222222222222222222222222222222222
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/dsffs"
                   class="list-group-item ">dsffs
                    <span class="badge badge-info">2</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/dsffs"
                   class="list-group-item ">dsffs
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/dsffs"
                   class="list-group-item ">dsffs
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/dsffs"
                   class="list-group-item ">dsffs
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/dsffs"
                   class="list-group-item ">dsffs
                    <span class="badge badge-info">1</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/dsffs"
                   class="list-group-item ">dsffs
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/dsffs"
                   class="list-group-item ">dsffs
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/pc%20gamez"
                   class="list-group-item ">PC GameZ
<span class="badge badge-info">2</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/test%20pro"
                   class="list-group-item ">Test Pro
<span class="badge badge-info">3</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/test%20one%20two%20three"
                   class="list-group-item ">test one two three
<span class="badge badge-info">2</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/five%205"
                   class="list-group-item ">Five 5
<span class="badge badge-info">7</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/testing%20forum"
                   class="list-group-item ">Testing Forum
<span class="badge badge-info">1</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/new%20event"
                   class="list-group-item ">New Event
                    <span class="badge badge-info">1</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/test"
                   class="list-group-item ">Test
                    <span class="badge badge-info">2</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/prueba001"
                   class="list-group-item ">Prueba001
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/sks"
                   class="list-group-item ">sks
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/tdtdj"
                   class="list-group-item ">tdtdj
                    <span class="badge badge-info">0</span>
                </a>
                            <a href="http://demo.procoderr.tech/forums/amma"
                   class="list-group-item ">amma
                    <span class="badge badge-info">0</span>
                </a>
                    </div>
    </div>

    <div class="col-md-9">

        <table class="table forum table-striped">
            <thead>
            <tr>
                <th class="cell-stat"></th>
                <th>
Threads
                </th>
                <th class="cell-stat text-center hidden-xs hidden-sm">Total Posts</th>
                <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
            </tr>
            </thead>
            <tbody>
                            <tr>
                    <td class="text-center">
                                                    <i class="fa fa-file fa-2x"></i>

                    </td>
                    <td>
                        <h4>
                            <a href="http://demo.procoderr.tech/forums/thread/71">Thread created</a>
                            <br>
                            <small class="help-block"> by
                                <a href="http://demo.procoderr.tech/profile/prouser">prouser</a>
2 days ago in
<span class="label label-primary">
Cars
                                </span>
                            </small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm">
                        <a href="#">2</a>
                    </td>

                    <td class="hidden-xs hidden-sm">by
                        <a href=" http://demo.procoderr.tech/profile/prouser">prouser</a>
                        <br>
                        <small><i class="fa fa-clock-o"></i> 2 days ago </small>
                    </td>
                </tr>
                            <tr>
                    <td class="text-center">
                                                    <i class="fa fa-file fa-2x"></i>

                    </td>
                    <td>
                        <h4>
                            <a href="http://demo.procoderr.tech/forums/thread/70">dfgdf</a>
                            <br>
                            <small class="help-block"> by
                                <a href="http://demo.procoderr.tech/profile/prouser">prouser</a>
2 days ago in
<span class="label label-primary">
General
                                </span>
                            </small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm">
                        <a href="#">2</a>
                    </td>

                    <td class="hidden-xs hidden-sm">by
                        <a href=" http://demo.procoderr.tech/profile/prouser">prouser</a>
                        <br>
                        <small><i class="fa fa-clock-o"></i> 2 days ago </small>
                    </td>
                </tr>
                            <tr>
                    <td class="text-center">
                                                    <i class="fa fa-file fa-2x"></i>

                    </td>
                    <td>
                        <h4>
                            <a href="http://demo.procoderr.tech/forums/thread/21">My first Question</a>
                            <br>
                            <small class="help-block"> by
                                <a href="http://demo.procoderr.tech/profile/prouser">prouser</a>
1 year ago in
<span class="label label-primary">
General
                                </span>
                            </small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm">
                        <a href="#">3</a>
                    </td>

                    <td class="hidden-xs hidden-sm">by
                        <a href=" http://demo.procoderr.tech/profile/prouser">Olly</a>
                        <br>
                        <small><i class="fa fa-clock-o"></i> 1 year ago </small>
                    </td>
                </tr>
                            <tr>
                    <td class="text-center">
                                                    <i class="fa fa-file fa-2x"></i>

                    </td>
                    <td>
                        <h4>
                            <a href="http://demo.procoderr.tech/forums/thread/69">ghfdh</a>
                            <br>
                            <small class="help-block"> by
                                <a href="http://demo.procoderr.tech/profile/prouser">prouser</a>
1 week ago in
<span class="label label-primary">
Boats
                                </span>
                            </small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm">
                        <a href="#">2</a>
                    </td>

                    <td class="hidden-xs hidden-sm">by
                        <a href=" http://demo.procoderr.tech/profile/prouser">prouser</a>
                        <br>
                        <small><i class="fa fa-clock-o"></i> 1 week ago </small>
                    </td>
                </tr>
                            <tr>
                    <td class="text-center">
                                                    <i class="fa fa-file fa-2x"></i>

                    </td>
                    <td>
                        <h4>
                            <a href="http://demo.procoderr.tech/forums/thread/68">Something something rather</a>
                            <br>
                            <small class="help-block"> by
                                <a href="http://demo.procoderr.tech/profile/prouser">prouser</a>
2 weeks ago in
<span class="label label-primary">
Boats
                                </span>
                            </small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm">
                        <a href="#">1</a>
                    </td>

                    <td class="hidden-xs hidden-sm">by
                        <a href=" http://demo.procoderr.tech/profile/prouser">prouser</a>
                        <br>
                        <small><i class="fa fa-clock-o"></i> 2 weeks ago </small>
                    </td>
                </tr>
                        </tbody>
        </table>

                <ul class="pagination"><li class="disabled"><span>&laquo;</span></li> <li class="active"><span>1</span></li><li><a href="http://demo.procoderr.tech/forums?page=2">2</a></li><li><a href="http://demo.procoderr.tech/forums?page=3">3</a></li><li><a href="http://demo.procoderr.tech/forums?page=4">4</a></li><li><a href="http://demo.procoderr.tech/forums?page=5">5</a></li><li><a href="http://demo.procoderr.tech/forums?page=6">6</a></li><li><a href="http://demo.procoderr.tech/forums?page=7">7</a></li><li><a href="http://demo.procoderr.tech/forums?page=8">8</a></li><li class="disabled"><span>...</span></li><li><a href="http://demo.procoderr.tech/forums?page=14">14</a></li><li><a href="http://demo.procoderr.tech/forums?page=15">15</a></li> <li><a href="http://demo.procoderr.tech/forums?page=2" rel="next">&raquo;</a></li></ul>
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

</body>
</html>
