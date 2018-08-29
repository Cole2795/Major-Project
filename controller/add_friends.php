<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
                <link href="../css/styles1.css" rel="stylesheet" type="text/css">
                <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<!--		<script type="text/javascript" src="../js/jquery-ui-1.8.custom.min.js"></script>
		<script type="text/javascript">
                    $(document).ready(function() {

                        $("#player").autocomplete({
                            //define callback to format results
                            source: function(req, add){
				//pass request to server
				$.getJSON("../model/people.php", req, function(data) {
							
				//create array for response objects
				var suggestions = [];
							
				//process response
				$.each(data, function(i,val){								
					suggestions.push(val);
                                    });
							
				//pass array to callback
				add(suggestions);
                                });
                            },					
                            //define select handler
                            select: function(e, ui) {
				 $("#player").val(ui.item.value);		

                            },
  
			});	
                    });
		</script>-->

<!--        <script src = "../js/main.js"> </script>-->
        <title>Pals Social</title>
    </head>
    
   
       
<body>
    <!--    <form action="home.php">-->
<?php
    if (isset($_SESSION['message'])){
         echo "<div id='error_msg'>" .$_SESSION['message']. "</div>"; 
         unset($_SESSION['message']); 
         
    }
?>
<!--    <form action="home.php">-->
<img src='../images/social.png' alt="profile" class="logo">
        <h1>WELCOME TO PALS SOCIAL</h1> 
          <div class="loginout">
           <div><?php echo $_SESSION['username']; ?> <br><a href="logout.php">Logout</a></div>
     
        </div>
        <div class="home">
            <img src="../images/img_avatar2.png" alt="profile" class="profile">
        </div>
       
<!--    </form>-->
      <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="add_friends.php">Add Friends</a></li>
          <li><a href="message.php">Message</a></li>
          <li><a href="event.php">Event</a></li>
          <li><a href="snappicture.php">SnapPicture</a></li>
           <li><a href="profile.php">Profile</a></li>
          <li><a href="setting.php">Setting</a></li>
           
          
      </ul>
        <div class="friend">
        <a href="../controller/addfriend/index_1.php">Click me here please<</a>
        
        <div class="w3-container">
             <h2>Add Friend</h2>

                <div class="w3-card-4 w3-dark-grey" style="width:50%">

            <div class="w3-container w3-center">
              <h3>Friend Request</h3>
              <img src="../images/img_avatar2.png" alt="Avatar" style="width:80%">
              <p>Ashley Richardson</p>

              <div class="w3-section">
                  
                <button class="w3-button w3-green">Accept</button>
                <button class="w3-button w3-red">Decline</button>
              </div>
            </div>

          </div>
</div>
        
        
        </div>  

        
    </body>
</html>
