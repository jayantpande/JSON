<?php

$fname = $_GET['varname'];
echo "FILENAME",$fname;


$myfile = fopen("var/www/html/phpstorms/JSON/".$fname, "r") or die("Unable to open file!");
$content = fread($myfile,sizeof("/phpstorms/JSON/".$fname));
fclose($myfile);

if(isset($_POST['add'])){
    $myfile = fopen("var/www/html/phpstorms/JSON/".$fname, "w") or die("Unable to open file!");
    $content = $_POST['content'];
    fwrite($myfile,$content);
    fclose($myfile);?>
    <script type="text/javascript">
        window.location = "json.php";
    </script>
    <?php



}
// fclose($myfile);

?>

<!DOCTYPE html>
<html>
<head>
    <title>ADD json</title>
</head>
<style type="text/css">
    input[type='text']{
        width: 500px;
        height: 300px;
    }

</style>
<body>
<form action="" method="post">
    <input type="text" name="content" placeholder="JSON" value=<?php echo $content ?>><br>
    <input type="submit" name="add" value="Update!">
</form>
</body>
</html>