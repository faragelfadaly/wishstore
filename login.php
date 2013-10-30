
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
    <body class="free">
        <div class="container">
            <table width="100%" border="0">
                <tr>
                    <td colspan="4">
                        <div align="center">
                            <img src="img/1393027_10151942201859162_933852277_n.jpg" width="100%" height="261">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="103" height="44"><h3>Username: </h3></td>
                    <td width="260"><input type="text" name="nameTF" id="nameTF"></td>
                </tr>
                <tr>
                    <td height="27"><h3>Password: </h3></td>
                    <td><p>
                            <input type="password" name="passwordTF" id="passwordTF">
                        </p></td>
                </tr>
                <tr>
                    <td height="43">&nbsp;</td>
                    <td>
                        <input type="button" name="submit" id="check" value="Login">
                    </td>
                </tr>
                <tr>
                    <td height="35" colspan="2" id="errorLabel"><h4><strong>
                                <label id="error">*error</label>
                            </strong></h4></td>
                </tr>
                <tr></tr>
                <tr>
                    <td colspan="4"><div align="right">Copyrights Wish Shop 2013</div></td>
                </tr>
            </table>         
            <div>

                <script>

                    $(document).ready(function() {

                        $("#check").on('click', function() {

                            var a = $("#nameTF").val();
                            var b = $("#passwordTF").val();

                            if (a == "" || b == "") {
                                $("#error").html(" * Fill All Data");
                            } else {
                                $("#error").html(" ");
                                check();
                            }
                        });

                        function check() {

                            var x = $("#nameTF").val();
                            var y = $("#passwordTF").val();
                            $.ajax({
                                url: "check.php",
                                type: 'POST',
                                dataType: 'json',
                                data: {
                                    user: x,
                                    pass: y,
                                },
                                success: function(resp) {


                                    if (resp == 'true') {
                                        alert("true");
                                    } else {
                                        $("#error").html("" + resp + "");
                                    }
                                },
                                error: function() {
                                    alert("Error");
                                }
                            });



                        }

                    });
                </script>
                </body>
                </html>
