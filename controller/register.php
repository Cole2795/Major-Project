<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "majorproject1");

if(isset($_POST['register_btn'])){
    
    $username = mysql_real_escape_string($_POST['username']);
    $email  = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    $password2 = mysql_real_escape_string($_POST['password2']);
    
    if($password == $password2){
        $password = md5($password);
        $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $sql);  
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        header("location: complete.php");
    }else{
        $_SESSION['message'] = "The Two password do not match";
      
   
    }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Pals Social</title>
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
<!--        <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.8.custom.min.js"></script>-->
	<script type="text/javascript">
        
        $(document).ready(function() {
                           var suggestions = [];
                           var keys = [];
                           var townID = 123;
                           
                           $("#Town").autocomplete({
                            //define callback to format results
                            source: function(req, add){
				//pass request to server
				$.getJSON("model/town.php?townID=" + countryID, req, function(data) {
                                    							
				//create array for response objects
				suggestions = [];
				//keys = [];			
				//process response
				$.each(data, function(i,val){								
					suggestions.push(val);
                                        //keys.push(i);
                                    });
							
				//pass array to callback
				add(suggestions);
                                });
                            },					
                            //define select handler
                            select: function(e, ui) {
				 $("#Town").val(ui.item.value);		
                                 //countryID = getKey(ui.item.value);
                            } //,
  
			});
                         
                        $("#Country").autocomplete({
                            //define callback to format results
                            source: function(req, add){
				//pass request to server
				$.getJSON("model/country.php?countryID=" + countryID, req, function(data) {
                                    							
				//create array for response objects
				suggestions = [];
				keys = [];			
				//process response
				$.each(data, function(i,val){								
					suggestions.push(val);
                                        keys.push(i);
                                    });
							
				//pass array to callback
				add(suggestions);
                                });
                            },					
                            //define select handler
                            select: function(e, ui) {
				 $("#Country").val(ui.item.value);		
                                 countryID = keys[getKey(ui.item.value)];
                            } //,
  
			});
                         
                         
                        /*************************Function*******************/
                        function getKey(needle){
                            for(i=0; i< suggestions.length; i++){
                                if (suggestions[i] == needle){
                                    return i;
                                }
                            }
                            return 0;
                        }
                    });
		</script>
    </head>
    <body>
        <?php
        if (isset($_SESSION['message'])){
             echo "<div id='error_msg'>" .$_SESSION['message']. "</div>"; 
            unset($_SESSION['message']); 
            
        }
    ?>
        
        <form method="post" action="register.php">
            <h2>WELCOME TO PALS SOCIAL</h2>
            <h2>Sign UP</h2>
            <!--img src="../images/".png" alt="profile" class="profile">-->
            
            <div class="container">
                    <form method="post" action="register.php">
                        <table>
                            <tr>
                            <td>Username:</td>
                            <td><input type="text" name="username" class="textInput"</td>
                            </tr>
                             <tr>
                           <td>Date of Birth:</td>
                            <td><input type="month" name="bdaymonth" class="textInput"</td>
                            </tr>
                             <tr>
                            <td>Email:</td>
                            <td><input type="email" name="email" class="textInput"</td>
                            </tr>
                             <tr>
                           <td>Country:</td>
                            <td><input type="Country"  class="ui-helper-clearfix"></td>
                            </tr>
                             <tr>
                            <td>Town:</td>
                            <td><input type="Town" name="town" class="textInput"</td>
                            </tr>
                             <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" class="textInput"</td>
                            </tr>
                             <tr>
                            <td>Password Confirm:</td>
                            <td><input type="password" name="password2" class="textInput"</td>
                            </tr>
                            
                             <tr>
                            <td></td>
                            <td><input type="submit" name="register_btn" value="Register"</td>
                             <button><a href="index.php">Cancel</a></button>

                            </tr>
                        </table>
<!--                 <label id="toLabel">Username:</label>
                          <input id="firstname" name="firstname" type="text">
                          <label id="toLabel">Birthday (month and year</label>
                          <input type="month" name="bdaymonth">
                      <input id="address1" name="address1" type="text">
                          <br><label id="toLabel">Email:</label>
                          <input id="email" name="email" type="text">
                          <br><label id="toLabel">Phone:</label>
                          <input id="phone" name="phone" type="text">
                          <label>Town:</label>
                         <input id="Town" name="town" type="text">
                         <label id="toLabel">Country:</label>
			 <div id="country" class="ui-helper-clearfix">
			<input id="Country" type="text">-->
                         </div>
<!--                         <button><a href="complete.php">Submit</a></button>
                        <button><a href="index.php">Cancel</a></button>
                -->
       
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
