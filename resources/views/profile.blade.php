@extends('layouts.app')

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/rating.css')}}">
@section('content')


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


                            <td>
                                <a href="editprofile/modify/{{$pediatre->id}}" class="btn btn-primary">

                                    <i class="fa fa-pencil"></i> Editer
                                </a>
                            </td>
                            <br>
                            <tr>

                                <br>


                                <!-- Rating Stars Box -->
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

                                <div class='success-box'>
                                    <div class='clearfix'></div>
                                    <img alt='tick image' width='32'
                                         src='data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MjYuNjY3IDQyNi42NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQyNi42NjcgNDI2LjY2NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM2QUMyNTk7IiBkPSJNMjEzLjMzMywwQzk1LjUxOCwwLDAsOTUuNTE0LDAsMjEzLjMzM3M5NS41MTgsMjEzLjMzMywyMTMuMzMzLDIxMy4zMzMgIGMxMTcuODI4LDAsMjEzLjMzMy05NS41MTQsMjEzLjMzMy0yMTMuMzMzUzMzMS4xNTcsMCwyMTMuMzMzLDB6IE0xNzQuMTk5LDMyMi45MThsLTkzLjkzNS05My45MzFsMzEuMzA5LTMxLjMwOWw2Mi42MjYsNjIuNjIyICBsMTQwLjg5NC0xNDAuODk4bDMxLjMwOSwzMS4zMDlMMTc0LjE5OSwzMjIuOTE4eiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K'/>
                                    <div class='text-message'></div>
                                    <div class='clearfix'></div>
                                </div>
                            </tr>
                        </div>

                    </div>
                    <div class="widget-footer">
                        <div>
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
                                <img src="" class="">
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
       
        <td>
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

                                <div id="mapouter" class="row">
                                    <div class="gmap_canvas"><iframe width="500" height="250" id="gmap_canvas"
                                                                      src="https://maps.google.com/maps?q={{$pediatre->latitude}}%2C{{$pediatre->longitude}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div></div>


<div class="container">
<div class="row">
    <div class="col-md-12">
        <span class="help-block">
           Laissez un Commentaire 
        </span>
    </div>
<div class="row">

           <div class="form-group">

                <textarea class="form-control fl flat" rows="5" id="reponse" name="description" cols="50"></textarea>
                <input type="text" name="profil_id" hidden value="{{$reponse->pediatre_id}}">
            
      
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

                                <form method="POST" action="http://demo.procoderr.tech/profile/admin/feedback"
                                      accept-charset="UTF-8">

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
                                        <textarea class="form-control" rows="2" placeholder="Enter your feedback"
                                                  name="text" cols="50" id="text">
                                         </textarea>
                                    </div>
                                </form>
                            </div></div></div>
        
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