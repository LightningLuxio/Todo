<?php 

$id = $_GET['id'];

require "database.php";

$sql = "DELETE FROM activities WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

 ?>


 <html>

 <head>
 	<title>Destroy</title>
 	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
 </head>
 
 <body class="delbg">
 	<div class="adddiv">
 		<a class="textcenter" href="index.php">back to space</a>
 	</div>
 </body>
 </html>