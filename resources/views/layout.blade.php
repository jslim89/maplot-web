<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Maplot</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


        <meta name="Author" content="Js Lim" />
        <meta name="Keywords" content="map,plot,marker" />

        <link rel="shortcut icon" href="assets/img/favicon.jpg"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" >
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
            <a class="navbar-brand" href="#">Maplot</a>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </nav>

        @yield('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}"></script>
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap --> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
    </body>
</html>
