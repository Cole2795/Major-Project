<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
<!--        <meta charset="UTF-8">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
            <img src="../images/girl1.png.png" alt="profile" class="profile">
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
         
    <figure>
            <img src="../images/img5.png" alt="The Pulpit Rock" width="100%" height="228">
       </figure>
<div class="page">
       <div class="profiles">
           
           <img src="../images/girl1.png.png" alt="profiles" class="profiles"> 
             <div><?php echo $_SESSION['username']; ?></div> 

        </div>
    
       
        <figure>
            <a class="social-item" href="comment.php" target="social"><span class="icon post-sm"><img src="../images/post.png" alt="" height="100" width="100"/></span></a>
             <a class="social-item" href="update.php" target="social"><span class="icon post-sm"><img src="../images/update.png" alt="" height="100" width="100"/></span></a>
            <a class="social-item" href="activity.php" target="social"><span class="icon post-sm"><img src="../images/activitylog.png" alt="" height="100" width="100"/></span></a>
            <a class="social-item" href="more.php" target="social"><span class="icon post-sm"><img src="../images/more.png" alt="" height="100" width="100"/></span></a>
      
        </figure>
          <figure>
              <img src="../images/dkit.png" alt="college" width="60" height="50">Dundalk Instite College
              <br><img src="../images/work.png"alt="college" width="60" height="50">Google
              <br><img src="../images/relationship.png" alt="college" width="60" height="50">Single
              
              <p><div class="w3-container"></p>                   
                <a href="about.php" class="w3-button w3-red">About</a>
                <a href="snappicture.php" class="w3-button w3-purple">Picture</a>
                <a href="event.php" class="w3-button w3-pink">Event</a>
          
                <p><p> <h4>Friends(34)</h4></p>
            <img src="../images/img_avatar2.png" alt="profile" class="comment">
            <img src="../images/boy1.png.png" alt="profile" class="comment">
            <img src="../images/boy2.png.png" alt="profile" class="comment">
            <img src="../images/img_avatar2.png" alt="profile" class="comment">
          
              
              </div>
           
          </figure>
          <!--- What are you mind comment>-->
           <div class="info">
              <img src="../images/img_avatar2.png" alt="profile" class="comment" height="90" width="200">
                  <strong>Me</strong>
                  <p>Thank god Summer Holiday</p>
                  <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                 <a href="../comment/index.php">Comment</a>
      
          
     </div>
    
          
            
            
                 
                

    </body>
</html>
