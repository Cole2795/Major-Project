<?php 
session_start();
include_once('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Calendar</title>
<link type="text/css" rel="stylesheet" href="jscript/style1.css"/>
<link type="text/css" rel="stylesheet" href="jscript/bootstrap/css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="jscript/bootstrap/css/bootstrap.min.css"/>
<script src="jscript/jquery.min.js"></script>
</head>
<body>
    <div class="loginout">
     
    </div>
<div id="calendar_div" class="container">
<h1 align="center">EVENT CALENDAR</h1>
 <div><?php echo $_SESSION['username']; ?>
               <br><a href="home.php">Home</a></div>
	<?php echo getCalender(); ?>
       
</div>
</body>
</html>
