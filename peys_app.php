<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Peys App</title>
</head>
<body>
	<form method="post">
		<h1>Pey App</h1>
		<label for="rSize">Select Photo Size: </label>
		<input type="range" name="rSize" id="rSize" step="10" min="10" max="100"><br>
		<label for="clrBorder">Select Border Color: </label>
		<input type="color" name="clrBorder" id="clrBorder"><br>
		<button type="submit" name="btnProcess" id="btnProcess">Process</button><br><br><br>
		<img src="img/profile.jpg" style="border:5px solid <?php 
		if (isset($_POST['clrBorder'])) {
			echo $_POST['clrBorder'];
		}else{
			echo 'black';
		} ?> ;width:<?php 
		if (isset($_POST['rSize'])) {
			echo $_POST['rSize'];
		}else{
			echo '30';
		}  ?>%;">
	</form>

	
</body>
</html>