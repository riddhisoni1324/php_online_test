<?php

ob_start();
session_start();
unset($_SESSION["id"]);
count1();
count2();
require 'temp.txt';
require 'result.txt';
session_destroy();

header('Location:login.php');

?>

<?php // max que attemped

function count2()
{
$file='count1.txt';
$handle=fopen($file,'r');
$current=fread($handle,filesize($file));


/*$file='temp.txt';
$handle=fopen($file,'w');
$current=fwrite($handle,$current);
fclose($handle);
*/


}

?>

<?php
// this is for how many que attemted
function count1()
{
$file='attemptedque.txt';
$handle=fopen($file,'r');
$current=fread($handle,filesize($file));

/*$file='result.txt';
$handle=fopen($file,'w');
$current=fwrite($handle,$current);
fclose($handle);
*/

echo "attemped qstn is".$current;

}

?>