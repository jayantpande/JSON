<?php

if(isset($_POST['add'])){
$fname = $_POST['fname'];
$content = $_POST['content'];


$myfile = fopen("var/www/html/phpstorms/JSON/".$fname, "c+") or die("Unable to open file!");
echo fwrite($myfile,$content);
fclose($myfile);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD json</title>
</head>
<body>
<form action="" method="post">
	
	<input type="text" name="fname" placeholder="FILENAME"><br>
	<input type="text" name="content" placeholder="JSON"><br>
	<input type="submit" name="add" value="ADD!">
</form>
</body>
</html>