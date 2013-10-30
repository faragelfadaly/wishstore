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
        <link href="css/index.css" type="text/css"  rel="stylesheet"/>

        <!-- javascript files include -->
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery.mobile-1.3.1.min.js"></script>

    </head>
    <body>

        <div data-role="controlgroup">
            <a href="login.php" data-role="button" data-icon="search" data-iconpos="right" data-theme="a" id="login">Login</a>
            <a href="#" data-role="button" data-icon="search" data-iconpos="right" data-theme="a" id="share_location_button">Share Your Location</a>
            <a href="#" data-role="button" data-icon="search" data-iconpos="right" data-theme="a" id="maps">Share Your Location</a>
        </div>

        <!--      
          <h2>Street View</h2>
                <img src="http://maps.googleapis.com/maps/api/streetview?size=200x200&location=40.720032,-73.988354&heading=235&sensor=false">
                <h2>Static View</h2>
                <img src="http://maps.googleapis.com/maps/api/staticmap?size=200x200&location=40.720032,-73.988354&heading=235&sensor=false">
        -->

        <div id="mapholder"></div>
        <script type="text/javascript">

            function showPosition(position)
            {

                latitude = position.coords.latitude;
                longitude = position.coords.longitude;
                $.ajax({
                    url: "./ajax_files/saveLocation.php",
                    type: "POST",
                    data: {latitude: latitude,
                        longitude: longitude},
                    success: function(response) {
                        alert(response);
                        alert("Latitude: " + latitude +
                                "\nLongitude: " + longitude);

                        var latlon = latitude + "," + longitude;

                        var img_url = "http://maps.googleapis.com/maps/api/staticmap?center=" + latlon + "&zoom=14&size=600x600&sensor=false";

                        document.getElementById("mapholder").innerHTML = "<img src='" + img_url + "'>";

                    },
                    error: function() {
                        alert("Failed to save your location");
                    }

                });
            }

            /*************************************************************************************/

            $("#share_location_button").on("click", function() {
                if (navigator.geolocation)
                {
                    navigator.geolocation.getCurrentPosition(showPosition);
                }
                else {
                    alert("Geolocation is not supported by this browser.");
                }
            });

            /*************************************************************************************/

            $("#maps").on("click", function() {
                window.location.href="./map.php";
            });
        </script>
    </body>
</html>
