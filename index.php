<!DOCTYPE html>
<?php
require "database.php";

$sql = "SELECT * FROM activities";
$result = mysqli_query($conn, $sql);

$entry = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<html>

<head>
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
	<meta charset ="UTF-8">
</head>





<body>
	<div class="header">
		<h1>Star do list far far away</h1>
	</div>

	<div class="container">

		<div class="todo">
			<form class="add" action="add.php" method="post">
				<input class="input" type="text" name="text" placeholder="What do you need todo?"> 
				<input class="submit" type="submit" value="Create">
			</form>	 
			<table class="tafel">
<?php foreach ($entry as $part) {?>
				<tr>
					<td><?= $part['description']?></td>
					<td class="edit"><a href="edit.php?id=<?= $part['id']; ?>">Edit</a></td>
					<td class="hilt"></td>
					<td class="delete"><a href="delete.php?id=<?= $part['id']; ?>">Destroy</a></td>
				</tr>
<?php } ?>
			</table>
		</div>

	</div>

</body>
 

</html>