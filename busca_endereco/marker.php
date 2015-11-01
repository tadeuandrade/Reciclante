<!DOCTYPE html>
<html>
    <head>
        <title>CEP</title>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/gmaps.js" type="text/javascript"></script>
        <script src="js/markers.js" type="text/javascript"></script>
        <link href="css/main.css" rel="stylesheet" />

        <script>
            $(function(){
                //initMap centro do mapa + elemento div
                initMap('08615-000','555','map');
                //add marcadores
                addMarker('08615-000','555','<h1>Point Y</h1>');
                addMarker('08665-000','555','<p>Ponto X</p>');
                addMarker('08616-000','555','<strong>Ponto Z</strong>');
            })
        </script>
    </head>
    <body>
            <div id="map" style="height:800px;width:99%;"></div>
    </body>
</html>