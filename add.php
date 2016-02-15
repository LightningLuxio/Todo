<?php 

require "database.php";

$text1 = $_POST['text'];
$text = strip_tags($text1);

$sql = "INSERT INTO activities (description) VALUES ('$text');";

mysqli_query($conn, $sql);


 ?>

 <html>

 <head>
 	<title>Create</title>
 	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
 </head>
 
 <body class="addbg">
 	<div class="adddiv">
 		<a class="textcenter" href="index.php">back to space</a>
 	</div>
 </body>
 </html>