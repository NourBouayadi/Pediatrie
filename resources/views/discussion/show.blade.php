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
@if($unread)
    <style> div.row:last-child {border:solid;}</style>
@endif
<div class="container">


    <h3><a href="{{url('forum')}}"> << Forum </a></h3>

    <div class="col-md-12" style="background-color: #f5f5f5 ; border: #000000;">
        <h2 class="col-md-offset-2"><a href="http://demo.procoderr.tech/forums/thread/1">{{$discussion->titre}}</a></h2>


        <!-- le bloc ul concerne la discussion avec l'ID cliqué-->
        <ul class="media-list forum">

            <li class="media well" style ="background-color: #ffffff ; border: none";>
                <div class="pull-left user-info" href="#">
                    <img class="avatar img-circle img-thumbnail" src="{{asset('assets/img/avatar.jpg')}}"
                         width="64" alt="Avatar">
                    <strong>
                        <a href="http://demo.procoderr.tech/profile/admin">
                            {{$discussion->getAuthor()}}
                        </a>
                    </strong>
                    <br>

                    <small class="btn-group btn-group-xs">
                        <a class="btn btn-default"
                           href="">0 Feedback Points
                        </a>
                    </small>
                    <div class="forum-post-panel btn-group btn-group-xs">
                        <form action="{{url('forum/'.$discussion->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <a href="http://demo.procoderr.tech/forums/post/1/edit" ><i
                                        class="wb-pencil btn btn-info btn-xs"></i>
                                <span class="hidden-xs">
          </span>
                            </a>

                            <button type="submit" class="wb-trash btn btn-danger btn-xs" onclick="supprimer();"></button>
                            <span class="hidden-xs"></span>

                        </form>
                    </div>

                </div>
                <div style="float: right;" ><a
                            class=" btn btn-default btn-xs" href="http://demo.procoderr.tech/forums/thread/1/post/1"><i
                                class=" fa fa-clock-o"></i> {{$discussion->created_at}}
                    </a>
                    @if(!$discussion->isLocked)
                        <a href="/forum/lock/{{$discussion->id}}" class="btn btn-warning btn-xs" type="submit"> <i class="fa fa-lock"></i>cloturer</a>
                    @else
                        <a href="/forum/lock/{{$discussion->id}}" class="btn btn-warning btn-xs" type="submit"> <i class="fa fa-unlock"></i>ouvrir</a>
                    @endif
                </div>

                <div class="media-body">



                    <p>{{$discussion->description}}</p>



                </div>



            </li>
            <div><a href=""> <i></i></a></div>
        </ul>
        <!--c'est ce bloque là qu'on va le boucler pour générer les réponses-->


        <ul class=" media-list forum ">
            @foreach($discussion->getMessages() as $message)
                <div class="row"> <li class="media well  col-md-12">
                        <div class="pull-left user-info" href="#">
                            <img class="avatar img-circle img-thumbnail" src="{{asset('assets/img/avatar.jpg')}}"
                                 width="64" alt="Avatar">
                            <strong>
                                <a href="http://demo.procoderr.tech/profile/admin">
                                    {{$message->getAuthor()}}
                                </a>
                            </strong>
                            <br>

                            <small class="btn-group btn-group-xs">
                                <a class="btn btn-default" href="">0 Feedback Points
                                </a>
                            </small>
                            <div class="forum-post-panel btn-group btn-group-xs">
                                <form action="{{url('forum/show/'.$message->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}


                                    <a href="http://demo.procoderr.tech/forums/post/1/edit" class="btn btn-info btn-xs"><i
                                                class="wb-pencil"></i>
                                        <span class="hidden-xs">
          </span>
                                    </a>

                                    <button type="submit" class="btn btn-danger btn-xs" onclick="supprimer();">

                                        <i class="wb-trash"></i>
                                        <span class="hidden-xs"></span>
                                    </button></form></div>
                        </div>

                            <div style="float: right;" ><a
                                                class=" btn btn-default btn-xs" href="http://demo.procoderr.tech/forums/thread/1/post/1"><i
                                                    class=" fa fa-clock-o"></i> {{$message->created_at}}
                                        </a>
                                <!-- Script php pour aimer un message-->
                        <?php $class='fa fa-thumbs-o-up';
                        if(App\Likes_message::where('user_id','=',\Auth::user()->id)
                                ->where('message_id','=',$message->id)->first()!=null)
                            $class='fa fa-thumbs-up';
                        ?>

                            <i class="{{$class}}" id="{{$message->id}}"
                               onclick="likes(this)"></i>
                            <?php $n=App\Likes_message::where("message_id", "=", $message->id)->count();echo $n;?>

                        </div>
                        <div class="media-body">
                            <p> {{$message->description}}</p> </div>

                    </li>

                </div>

            @endforeach
        </ul>

        @if(!$discussion->isLocked)
            <form method="POST" action="" accept-charset="UTF-8">
                {{csrf_field()}}
                <div class="tile">
        <span class="help-block">
           Répondre à cette Discussion
        </span>


                    <div class="form-group">

                        <textarea class="form-control fl flat" rows="5" id="message" name="description" cols="50"></textarea>
                        <input type="text" name="discussion_id" hidden value="{{$discussion->id}}">
                        <span class="help-block pull-right">
      You may use Markdown - <a href="https://help.github.com/articles/basic-writing-and-formatting-syntax/">Basic writing and formatting syntax</a>
    </span>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary btn btn-wide" type="submit" value="Reply">
                    </div>
                </div>
            </form>
        @else
    </div> <div class="row alert-danger"> <div class="col-md-offset-3 col-md-6"> <p>Vous ne pouvez pas répondre à cette discussion </p></div></div>
    @endif




    <div class="modal fade" id="reportPost">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Report Post</h4>
                </div>
                <form method="POST" action="http://demo.procoderr.tech/forums/thread" accept-charset="UTF-8"
                      class="report-post-form"><input name="_token" type="hidden"
                                                      value="SsNhKTepziN0DGedgF6Vu9BZ2qkSUTDHeexzaXfu">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="reason">Why are you reporting this post?</label>
                            <textarea class="form-control" rows="2" maxlength="200" name="reason" cols="50"
                                      id="reason"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Report Post</button>
                    </div>
                </form>
            </div>
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

        //if(fav.getAttribute("class") == "fa fa-star-o") {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("demo").innerHTML = this.responseText;
                like.setAttribute("class", xhttp.response);
            }
        };
        xhttp.open("GET", "/forum/like/" + like.getAttribute("id"), true);
        xhttp.send();
        /*}
        else {
            fav.setAttribute("class", "fa fa-star-o");
        }*/

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
