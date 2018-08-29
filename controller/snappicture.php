
<?php
session_start();
$msg = ""; 
//if upload
if(isset($_POST['upload'])){
$target = "../images/" .basename($_FILES['image']['name']);

$db = mysqli_connect("localhost", "root", "", "majorproject1");
$image = $_FILES['image']['name'];
$text = $_POST['text'];
$sql = "INSERT INTO images (image, text) VALUES('$image', '$text')";
mysqli_query($db, $sql);

if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    $msg = "Image uploaded successfully";
}else{
    $msg = "there was a problem uploading image";
}
}
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
<aside>
<!-- <div class="home">
                 <img src="../images/img_avatar2.png" alt="home" class="home"><strong>Ashley</strong>
                 <br><img src="../images/img_avatar2.png" alt="home" class="home"><strong>Sonia</strong>
                 <br><img src="../images/img_avatar2.png" alt="home" class="home"><strong>Marie</strong>
                  <br><img src="../images/boy1.png.png" alt="home" class="home"><strong>Keith</strong>
   </div -->
</aside>
<article>
<div class="list">
         <div id="content">
               <?php
                $db = mysqli_connect("localhost", "root", "", "majorproject1");
                $sql = "SELECT * FROM images";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<div id='img_div'>";
                    echo "<img src='../images/".$row['image']. "' >";
                    echo "<p>".$row['text']. "</p>";
                    echo "</div>";
                }
               ?>
             <form method="post" action="snappicture.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="10000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea name="text" cols="40" rows="4" placeholder="Say Something about this images"></textarea>
                </div>
                <div>
                    <input type="submit" name="upload" value="Upload Image">
                </div>
                
            </form>
        </div>
</article>
    </body>
</html>
