<?php // max que attemped

function count2()
{
$file='count1.txt';
$handle=fopen($file,'r');
$current=fread($handle,filesize($file));
if($current==6)
{
header("Location: login.php");
}
fclose($handle);
}


?>