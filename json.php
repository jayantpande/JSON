<?php
$dir    = '/home/justdial/json1';
$files = scandir($dir);
$i=0;

for($i = 2;$i<sizeof($files);$i++){
echo $files[$i]; 
print "<a href=edit.php?varname=";echo $files[$i]; print ">  EDIT</a>";
print "<br>";

}


print " <form method='post' action='add.php'><input type=submit value=ADD!></form>";


?>