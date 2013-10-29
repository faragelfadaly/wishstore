<?php
	$connection = mysql_connect("localhost", "root", "");
	if(!$connection) {
		die("Database connection failed " . mysql_error());
	}
		
	$db_select = mysql_select_db("wishstore", $connection);
	if(!$db_select) {
		die("Database selection failed " . mysql_error());
	}
?>

<html>
    <head>
        <title>Wish Store</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/script.css">
    </head>
    <body class="free">
    	<div class="container">
            <table width="1003" border="0">
              <tr>
                <td colspan="4"><div align="center"><img src="images/Wish Store logo/wishStoreBanner.png" width="863" height="261"></div>
                </td>
              </tr>
              <tr>
                <td width="87" rowspan="6">&nbsp;</td>
                <td width="535" rowspan="6"><img src="images/social.png" width="480" height="384"></td>
                <td height="42" colspan="2">&nbsp;</td>
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
                  <input type="submit" name="submit" id="button" value="Login">
                </td>
              </tr>
              <tr>
                <td height="35" colspan="2" id="errorLabel"><h4><strong>
                  <label>*error</label>
                </strong></h4></td>
              </tr>
              <tr></tr>
              <tr>
                <td colspan="4"><div align="right">Copyrights Wish Shop 2013</div></td>
              </tr>
            </table>         
    	<div>
    </body>
</html>