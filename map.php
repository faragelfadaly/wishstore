<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
        <title>Wish store home</title>

        <!-- css files include  -->
        <link href="css/jquery-ui-1.10.2.custom.min.css" type="text/css"  rel="stylesheet"/>
        <link href="css/jquery.mobile-1.3.1.min.css" type="text/css"  rel="stylesheet"/>
        <link href="css/jquery.mobile.theme-1.3.1.min.css" type="text/css"  rel="stylesheet"/>


        <!-- javascript files include -->
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery.mobile-1.3.1.min.js"></script>

    </head>
    <body>
        <!-- map will always take its size from its containing element(div) -->
        <div id="googleMap" style="width: 100%; height: 600px"></div>
        <script type="text/javascript">
            ///////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////// Google Maps part in find doctor page ////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////




            function loadScript()
            {
                /*
                 * to load the Google Maps API after the page has fully loaded
                 * The loadScript() function creates the Google Maps API <script> tag.
                 * In addition, the callback=initialize parameter is added to the end
                 * of the URL to only execute the initialize() function after the API is fully loaded
                 */
                var script = document.createElement("script");
                script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAntzh9ksT7ZtrCDBrTxpx8SyNCTXjTGJw&sensor=true&callback=initialize";
                document.body.appendChild(script);
            }

            window.onload = loadScript;
            function initialize()
            {
                CENTER = new google.maps.LatLng(31, 29)
                        ;
                var mapProp = {
                    //The center property specifies where to center the map(latitude, longitude)
                    center: CENTER,
                    zoom: 7,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true,
                    rotateControl: true,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                var marker = new Array();
                marker[0] = new google.maps.Marker({
                    position: new google.maps.LatLng("30.525252", "29.1111")

                });
                marker[1] = new google.maps.Marker({
                    position: new google.maps.LatLng("28.525252", "27.1111")

                });
                marker[0].setMap(map);
                marker[1].setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>        
    </body>
</html>
