<?php 

require "database.php";

$id = $_GET['id'];

$sql = "SELECT * FROM activities WHERE id='$id'";

$result = $conn->query($sql);

$entry = $result->fetch_assoc();


 ?>

 <html>

 <head>
 	<title>Edit</title>
 	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
 </head>
 
 <body class="addbg">
 	<div class="deldiv">


 		<form class="add" action="update.php" method="post">
 				<input type="hidden" name="id" value="<?php echo $entry['id']; ?>">

				<input class="input" type="text" name="text" placeholder="<?php echo $entry['description']; ?>"> 
				<input class="submit" type="submit" value="save">
		</form>	 


 		<a class="textcenter" href="index.php">back to space</a>
 	</div>
 </body>
 </html>