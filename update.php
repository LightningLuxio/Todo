<?php 

	require "database.php";

	$id = $_POST['id'];
	$text1 = $_POST['text'];
	$text = strip_tags($text1);

	$sql = "UPDATE activities SET description = '$text' WHERE id = $id";

	$conn->query($sql); 

 ?>

 <html>

 <head>
 	<title>Update</title>
 	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
 </head>
 
 <body class="addbg">
 	<div class="deldiv">

 		<p><?php echo $text ?></p>

 		<a class="textcenter" href="index.php">back to space</a>
 	</div>
 </body>
 </html>