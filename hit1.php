<?php
function count2()
{
$file='count1.txt';
$handle=fopen($file,'r');
$current=fread($handle,filesize($file));


$inc=$current+1;
$handle1=fopen($file,'w');
fwrite($handle1,$inc);
fclose($handle1);

}
?>