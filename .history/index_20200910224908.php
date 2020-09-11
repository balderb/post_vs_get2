<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get versus post method in php</title>
</head>

<body>
    <h1>Get versus post method in php</h1>
    <form action= "index.php" method="post">
	    <input type="checkbox" name="password"> <br>
	<input type="submit">
</form>
<br>

<?php
	echo $_POST["password"];
?>
</body>
</html>