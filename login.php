
<html>
    <head>
        <title>Wish Store</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/script.css">
        
<script src="jquery-1.8.0.js" ></script>  
  <script>
            
     $(document).ready(function(){ 
		
	       $("#check").on('click',function(){

		    var a=$("#nameTF").val();
                    var b=$("#passwordTF").val(); 
                     
                    if( a == "" || b == "" ){
                        $("#error").html(" * Fill All Data");
                    }else{
                        $("#error").html(" ");       
                       check();
                   } 
                });

		function check(){

                    var x=$("#nameTF").val();
                    var y=$("#passwordTF").val();
                    $.ajax({			
                        url:"check.php",
                        type: 'POST',
			            dataType: 'json',
                        data:{
                            user:x,
			    pass:y,
                        },
			
                        success:function(resp){
                            
                       
                           if(resp=='true'){
                             alert("true");
                         }else{$("#error").html(""+resp+""); }
                        },
                        error:function(){
                            alert("Error");
                        }
                    });
      
      
      
                }

          });
        </script>
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
    </body>
</html>
