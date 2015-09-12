
<html>

<a href="login.php" target="_parent"></a>

<?php
echo "thanks";

$file='count1.txt';
$handle=fopen($file,'r');
$current=fread($handle,filesize($file));
$c=$current-1;
echo "in temp file total qstn is=".$c;
echo "<br>";

$file='attemptedque.txt';
$handle=fopen($file,'r');
$current=fread($handle,filesize($file));
echo "in attemptedque file total attempted qstn is=".$current;
echo "<br>";









?>

</html>