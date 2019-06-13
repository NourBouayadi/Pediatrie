@extends('layouts.app')

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/rating.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/notationEtoile.css')}}">
@section('content')


    <div class="container">
        <div class="profile-panel">
            <div class="col-md-4">
                <div class="panel-default panel widget widget-shadow text-center">
                    <div class="widget-header">
                        <div class="widget-header-content">
                            <a class="avatar avatar-lg" href="javascript:void(0)">
                                <img width=100px src="{{asset('assets/img/ped.png')}}">
                            </a>
                            <h4 class="profile-user"></h4>
                            <span class="label label-primary">Pédiatre</span>
                            <p>

                            </p>
                            <p class="help-block">

                                <br>

                            </p>
                            @auth
                            @if(\Auth::user()->id==$pediatre->id)
                            <td>
                                <a href="editprofile/modify/{{$pediatre->id}}" class="btn btn-primary">

                                    <i class="fa fa-pencil"></i> Editer
                                </a>
                            </td>
                            @endif
                            @endauth
                            <br>
                            <tr>

                                <br>


                                <!-- Rating Stars Box -->
                                <!-- if auth user is owner of profile, or auth user has already given feedback then show avg -->
                                <?php $points= App\User::find($pediatre->id)->points;\Debugbar::info($points);?>

                                @if(\Auth::user()==null||\Auth::user()->id ==$pediatre->id ||\Auth::user()->type() =="admin"|| \App\Evaluation::where('pediatre_id','=',$pediatre->id)->where('user_id','=',\Auth::user()->id)->exists())
                                  <div class="rating-stars text-center">
                                    @if ($points <1 )
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    @endif
                                    @if ($points >=1 && $points <2 )
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    @endif @if ($points >=2 && $points <3 )
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        @endif @if ($points >=3 && $points <4 )
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    @endif
                                    @if ($points >=4 && $points <5  )
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold "></i>
                                        <i class="fa fa-star "></i>
                                    @endif
                                    @if ($points ==5)
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold"></i>
                                        <i class="fa fa-star gold"></i>
                                    @endif
                             ({{$points}})
                                  </div>
                                @else
                                <div class='rating-stars text-center'>
                                    <ul id='stars'>
                                        <li class='star' title='Poor' data-value='1'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Fair' data-value='2'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Good' data-value='3'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Excellent' data-value='4'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='WOW!!!' data-value='5'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                    </ul>
                                </div>
                                @endif

                            </tr>
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
                                <img  class="">
                            </a>

                            <div class="media-body">

                                <table>


                                    <tr>
                                        <td>

                                            Nom : &nbsp; <?php echo App\User::find($pediatre->id)->name;?>
                                            <hr>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            Description : &nbsp;&nbsp; {{$pediatre->description}}
                                            <hr>
                                        </td>
                                    </tr>


                                    <tr>

                                        <td>
                                            Date Début de Carriére :&nbsp; &nbsp; {{$pediatre->date_debut_carriere}}
                                            <hr>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                            Spécialité :&nbsp;&nbsp; {{$pediatre->specialite}}
                                            <hr>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            Numéro de Téléphone : &nbsp;&nbsp;{{$pediatre->tel1}}
                                            <hr>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            Adresse de Cabinet:&nbsp;&nbsp;{{$pediatre->adresse_cabinet}}
                                            <hr>
                                        </td>

                                    </tr>


                                    <tr>

                                        <td>
                                            Ville: &nbsp;&nbsp;{{$pediatre->ville}}
                                            <hr>

                                        </td>

                                    </tr>


                                <!--tr>
       
        <td> Adresse:
            latitude: &nbsp;&nbsp;{{$pediatre->latitude}}
                                        <hr>

                                      </td>
                                    </tr>

                                     <tr>

                                      <td>
                                           longitude:&nbsp; &nbsp;{{$pediatre->longitude}}
                                        <hr>

                                      </td>

                                    </tr-->
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
                <div id="mapouter" class="row col-md-offset-2">
                   <p class="col-md-offset-">Adresse</p>
                    <div class="gmap_canvas"><iframe width="500" height="250" id="gmap_canvas"
                                                     src="https://maps.google.com/maps?q={{$pediatre->latitude}}%2C{{$pediatre->longitude}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div></div>
                <div class="col-md-12">

                    <div class="col-md-12">
                        <h3>Les commentaires</h3>
                        <table  class="table table-striped">
                            @foreach($reponses as $reponse)
                                <tr>
                                   <td> {{$reponse->description}}</td>

                                </tr>

                                <tr> <td> par : <b>{{$reponse->name}}</b> ({{$reponse->created_at}})</td></tr>
                            @endforeach
                        </table>
                        <br>
                    </div>
                    @auth
                    @if(\Auth::user()->type()!="admin")
                    <div class="col-md-12">
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <span class="help-block">Laissez un Commentaire</span>
                                <textarea type="text" value="description" name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn btn-wide" type="submit" value="Reply">
                            </div>
                        </form>
                    </div>
                        @endif
                        @endauth
                </div>
            </div>
        </div>




</div>
</div>




        
<script src="{{asset('assets/js/script2.js')}}"></script>
<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>                
<script>
                                        $(document).ready(function () {

                                            /* var xhttp = new XMLHttpRequest();*/


                                            /* 1. Visualizing things on Hover - See next part for action on click */
                                            $('#stars li').on('mouseover', function () {
                                                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                                                // Now highlight all the stars that's not after the current hovered star
                                                $(this).parent().children('li.star').each(function (e) {
                                                    if (e < onStar) {
                                                        $(this).addClass('hover');
                                                    } else {
                                                        $(this).removeClass('hover');
                                                    }
                                                });

                                            }).on('mouseout', function () {
                                                $(this).parent().children('li.star').each(function (e) {
                                                    $(this).removeClass('hover');
                                                });
                                            });


                                            /* 2. Action to perform on click */
                                            $('#stars li').on('click', function () {
                                                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                                                var stars = $(this).parent().children('li.star');

                                                for (i = 0; i < stars.length; i++) {
                                                    $(stars[i]).removeClass('selected');
                                                }

                                                for (i = 0; i < onStar; i++) {
                                                    $(stars[i]).addClass('selected');
                                                }

                                                // JUST RESPONSE (Not needed)
                                                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                                                $.post("profile.php", ratingValue);
                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function () {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        console.log(xhttp.responseText);
                                                    }
                                                };
                                                xhttp.open("GET", "/profile/stars/"+{{$pediatre->id}}+"?value="+ratingValue, true);
                                                xhttp.send();
                                                //xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                                                
                                                //xhttp.send("id="+{{$pediatre->id}}+"&value="+ratingValue);

                                                var msg = "";
                                                if (ratingValue > 1) {

                                                    msg = "Thanks! You rated this " + ratingValue + " stars.";
                                                } else {
                                                    msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
                                                }

                                                responseMessage(msg);

                                            });
                                          


                                        function responseMessage(msg) {
                                            $('.success-box').fadeIn(200);
                                            $('.success-box div.text-message').html("<span>" + msg + "</span>");
                                        }
                                    });
                                    </script>
 <!-- script pour la géolocalisation -->
@endsection