<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "majorproject1");

if(isset($_POST['login_btn'])){
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);
    
    if(mysqli_num_rows($result) == 1){
        $_SESSION['message'] = "your are now logged in";
        $_SESSION['username'] = $username;
        header("location: home.php");
    }else{
          $_SESSION['message'] = "Username/password combination incorrect";
    }
}
    
   ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <title>Pals Social</title>
        <!--<link href='http://fonts.googleapis.com/css?family=Freckle+Face' rel='stylesheet' type='text/css'>-->
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       
    
        
           
        <form method="post" action="index.php">
            <h2>WELCOME TO PALS SOCIAL</h2>
            
            
      <div class="imgcontainer">
         <img src="../images/img_avatar2.png" alt="Avatar" class="avatar">
         
      </div>
            <table>
                <h2>Sign in</h2>
                <tr>
                <td>Username:</td>
                <td><input type="text" name="username" class="textInput"</td>
                </tr>
                <tr>
                <td>Password:</td>
                <td><input type="password" name="password" class="textInput"</td>
                </tr>
                
                <td></td>
                <td><input type="submit" name="login_btn" value="Login"</td>
                </tr>
            </table>
  
      <div class="container" style="background-color:#33cc00">
          <span class="psw">Forgot <a href="general.php">password?</a></span>
         <p>Create Account if you don't have it-</p><span class="resgister">Register<a href="register.php">Sign up</a></span>
         <!--    <button type="button" class="register">Register</button>
      -->
    </div> 
    </form>
        
        </body>
</html>