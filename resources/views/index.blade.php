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
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1 style="display:none;">Maplot</h1>

        <div id="map"></div>

        <div style="display: none;">
            <div id="map-info">
                <h4>Customer name</h4>
                <address>
                    <div class="addr-section">
                        <div>
                            <b>Address:</b>
                        </div>
                        <div>No. 123, Jalan 345
                            <br> Kawasan Bandar 47500
                            <br> Subang Jaya
                            <br> Malaysia.
                        </div>
                    </div>
                    <div class="addr-section">
                        <div>
                            <b>Phone:</b>
                        </div>
                        <div><a href="tel:+60123456789">+60 12 345 6789</a></div>
                    </div>
                </address>
            </div>
        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
    </body>
</html>
