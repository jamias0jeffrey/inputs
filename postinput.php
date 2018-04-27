<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="post_example.php" method="POST">
		Input1: <br>
			<input type="text" name="input1"><br>
		Name: <br>
			<input type="text" name="name"><br><br>
			<input type="submit" value="Submit"><br><br>
	</form>


	<?php
		if(isset($_GET['input1'])){
			echo htmlspecialchars($_GET['input1']) . "<br>";
		}
		
		if(isset($_GET['name'])){
			echo htmlspecialchars($_GET['name']);
		}

	?>

</body>
</html>