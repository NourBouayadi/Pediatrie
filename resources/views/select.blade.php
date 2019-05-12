<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sol.css') }}">

</head>
<body>
	<select class="js-example-basic-single form-control col-md-5" name="select2" multiple>
    <option value="Peter">Peter Griffin</option>
    <option value="Lois">Lois Griffin</option>
    <option value="Chris">Chris Griffin</option>
    <option value="Meg">Meg Griffin</option>
    <option value="Stewie">Stewie Griffin</option>
    <option value="Cleveland">Cleveland Brown</option>    
    <option value="Joe">Joe Swanson</option>    
    <option value="Quagmire">Glenn Quagmire</option>    
    <option value="Evil Monkey">Evil Monkey</option>
    <option value="Herbert">John Herbert</option>    
</select>
<br>

<body>
	<select  id="my-select" class="form-control col-md-5"  name="sol" multiple>
    <option value="Peter">Peter Griffin</option>
    <option value="Lois">Lois Griffin</option>
    <option value="Chris">Chris Griffin</option>
    <option value="Meg">Meg Griffin</option>
    <option value="Stewie">Stewie Griffin</option>
    <option value="Cleveland">Cleveland Brown</option>    
    <option value="Joe">Joe Swanson</option>    
    <option value="Quagmire">Glenn Quagmire</option>    
    <option value="Evil Monkey">Evil Monkey</option>
    <option value="Herbert">John Herbert</option>    
</select>
</body>
<script type="text/javascript" src="{{ asset('js/jquery-2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/sol.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
    jQuery.noConflict();$('.js-example-basic-single').select2();
    jQuery.noConflict();$('#my-select').searchableOptionList();
	});
</script>
</html>