<html>
	<head>
		<title>List of fruits</title>
	</head>
	<body>
		<form action="" method="POST">
			Choose your favourite fruit<br><br>
			<select name="fruits">
				<option value="">(Please select)
				<option value="Grape">Grape
				<option value="Banana">Banana
				<option value="Chikku">Chikku
				<option value="Apple">Apple
				<option value="Orange">Orange
				<option value="Pineapple">Pineapple
			</select><br><br>
			<input type="submit" value="SELECT">
		</form>
	</body>
</html>

<?php
	if($_POST){
		echo "<h2>You have indicated that you like</h2>";
		echo $_POST['fruits'];
	}
?>
