<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get versus post method in php</title>
</head>
<body>
    <h1>Get versus post method in php</h1>
    <form action= "index.php" method="get">
	password: <input type="password" name="password"> <br>
	<input type="submit">
</form>
<br>

<?php
	echo $_GET["password"];
?>
</body>
</html>