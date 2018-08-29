<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/styles1.css" rel="stylesheet" type="text/css">
       
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

        
          <div class="loginout">
              <h1>WELCOME TO PALS SOCIAL</h1> 
           <div><?php echo $_SESSION['username']; ?>
               <br><a href="home.php">home</a></div>
          </div>
        
        <h2 style="text-align:center">Booking Pricing Tables</h2>
        <div class="columns">
          <ul class="price">
            <li class="header">Madrid, Spain</li>
            <li class="grey">€299.99 for 3 nights </li>
            <li>free wifi</li>
            <li>swimming pool</li>
            <li>pub</li>
            
            <li class="grey"><a href="https://www.ebookers.ie/" class="button">Book it</a></li>
          </ul>
        </div>

        <div class="columns">
          <ul class="price">
            <li class="header" style="background-color:#4CAF50">Orlando Florida</li>
            <li class="grey">€3,000 for 10 nights</li>
            <li>unversial studios</li>
            <li>NSA</li>
            <li>pub</li>
            <li>waterpark</li>
            <li class="grey"><a href="https://www.ebookers.ie/" class="button">Book it</a></li>
          </ul>
        </div>

        <div class="columns">
          <ul class="price">
            <li class="header">UK</li>
            <li class="grey">€189.99 for 2 nights</li>
            <li>wifi</li>
            <li>flight </li>
            <li>harry potter studio</li>
            <li>5GB Bandwidth</li>
            <li class="grey"><a href="https://www.ebookers.ie/" class="button">Book it</a></li>
          </ul>
        </div>

</body>
</html>