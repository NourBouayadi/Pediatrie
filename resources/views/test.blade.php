<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>
<div>


    <select class="selectpicker" data-live-search="true" multiple>
        @foreach($symptomes as $symptome)
            <option value="{{$symptome->id}}">{{$symptome->nom}}</option>
        @endforeach
    </select>
</div>
</body>
<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/js/defaults-fr_FR.min.js')}}"></script>



</html>