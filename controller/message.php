<?php
session_start();

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
<!--        <script src = "../js/main.js"> </script>-->
        <title>Pals Social</title>
        <script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
	</script>
    </head>
    
   
       
<body>
    <!--    <form action="home.php">-->
<?php
    if (isset($_SESSION['message'])){
         echo "<div id='error_msg'>" .$_SESSION['message']. "</div>"; 
         unset($_SESSION['message']); 
         
    }
?>
    <img src='../images/social.png' alt="profile" class="logo">
<!--    <form action="home.php">-->

        <h1>WELCOME TO PALS SOCIAL</h1> 
          <div class="loginout">
           <div><?php echo $_SESSION['username']; ?> <br><a href="logout.php">Logout</a></div>

        
        </div>
        <div class="home">
            <img src="../images/img_avatar2.png" alt="profile" class="profile">
        </div>
       
<!--  -->
<ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="add_friends.php">Add Friends</a></li>
          <li><a href="message.php">Message</a></li>
          <li><a href="event.php">Event</a></li>
          <li><a href="snappicture.php">SnapPicture</a></li>
           <li><a href="profile.php">Profile</a></li>
          <li><a href="setting.php">Setting</a></li>
           
          

        </ul>
        <body onload="ajax();">

<div id="container">
		<div id="chat_box">
		<div id="chat"></div>
		</div>
		<form method="post" action="message.php">
		<input type="text" name="name" placeholder="enter name"/> 
		<textarea name="msg" placeholder="enter message"></textarea>
		<input type="submit" name="submit" value="Send it"/>
		
		</form>
		<?php 
		if(isset($_POST['submit'])){ 
		
		$name= $_POST['name'];
		$msg = $_POST['msg'];
		
		$query = "INSERT INTO chat (name,message) values ('$name','$msg')";
		
		$run = $con->query($query);
		
		if($run){
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
		}
		
		
		}
		?>

</div>

    
  
</body>
</html>
</html>

