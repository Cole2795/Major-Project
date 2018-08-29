<?php
	require_once '../comment/database.php';
	require_once '../comment/functions.php';
?>
<!doctype html>
<html>
	<head>
		<title>Comment</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
                 <a href="../controller/home.php">------Home-------</a>
		<?php
			get_comments('1234');
		?>
       
	</body>
</html>