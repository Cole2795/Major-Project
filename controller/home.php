<?php
session_start();
require_once '../model/database.php';
	require_once 'functions.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
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
           <div><?php echo $_SESSION['username']; ?>
               <br><a href="logout.php">Logout</a></div>
     
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
<!-- Comment like what you have on ur mind-->
<!--Page what people said like comment box-->
            <div class="success">
                <img src="../images/boy1.png.png" alt="profile" class="comment">
                <strong>Keith</strong>
                <p>Great News, I passed my driving test</p>
                <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                <a href="../comment/index.php">Comment</a>
<!--                <button id="myBtn">Comment2</button>-->

                <!-- The Modal -->
<!--                <div id="myModal" class="modal">

                   Modal content 
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="close">&times;</span>
                      
                      <h2>Comment</h2>
                    </div>
                    <div class="modal-body">
                      <p>Well Done, bring me for spin</p>
                      <p>Well Done, Hope your parent give you a new car</p>
                    </div>
                    <div class="modal-footer">
                    <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                    <a href="comment.php">comment</a>
                    </div>
                      <a href="../comment/index.php">Comment</a>
                  </div>
                  
             


                </div>
                <script>
                     function myFunction(x) {
                        x.classList.toggle("fa-thumbs-down");
                    }
                </script>-->
             </div>
             <div class="info">
                 <img src="../images/img_avatar2.png" alt="profile" class="comment">
                  <strong>Ashley</strong>
                  <p>Add me Snapchat Ashley1838</p>
                  <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                  <a href="../comment/index.php">Comment</a>
<!--                  <button id="myBtn">Comment2</button>

                 The Modal 
                <div id="myModal1" class="modal">

                   Modal content 
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="close">&times;</span>
                      <h2>Comment</h2>
                    </div>
                    <div class="modal-body">
                      <p>I add you already</p>
                      <p>Sorry I don't have it, see you tomorrow</p>
                    </div>
                    <div class="modal-footer">
                    <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                    
                    </div>
                  </div>
                
             </div>-->
             </div>
             
            <div class="bgimg">
              <div class="topleft">
                <h6>New York City</h6>
              </div>
              <div class="middle">
                <h1>COMING SOON</h1>
                <hr>
                <h6>35 days left</h6>
              </div>
              <div class="bottomleft">
                  <button><a href="book.php">Book it NOW</a></button>
                  <button><a href="../comment/index.php">Comment</a></button>
                </div>
                
            </div>
 
<footer><h5>Nicole Campbell 2017</h5></footer>
    </div>
  
</body>
</html>
</html>
  <script>
                    // Get the modal
                    var modal = document.getElementById('myModal');

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal 
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                    </script>

