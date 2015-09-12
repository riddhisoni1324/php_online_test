<?php
require 'database.php';
$a=array();

for($j=0;$j<5;$j++)

{

$a[$j]=$j+3;
echo $a[$j];

}


$string=implode(', ',$a);

echo $string;
$file='impode.txt';
$handle=fopen($file,'w');
fwrite($handle,$string);
fclose($handle);
echo "<br>";
$file1='impode.txt';
//$file='explode.txt';
$handle=fopen($file1,'r');
$data=fread($handle,filesize($file1));
$a1=explode(', ',$data);

//$handle1=fopen($file,'w');

echo 'The array has ' . count($a1) . ' words.<br />';

 echo "<br>";
// loop through and print all the words
for ($i = 0; $i < count($a1); $i++)
{
    echo ' ' . $i . ' - ' . $a1[$i] . '<br />';
	$sql="SELECT question FROM mcq WHERE id=$a1[$i]";
	if($query_run=mysql_query($sql))
	{
	while($query_row = mysql_fetch_assoc($query_run))
		{
		$question = $query_row ['question'];
		echo $question;
		echo "<br>";
		}
	}
	else{echo mysql_error();}


	
	
	
}



/*foreach($a1 as $a2)
{
echo $a2;
fwrite($handle1,$a2);


}**/
/*$file_handle = fopen("impode.txt", "rb");

while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);
$parts = explode(',', $line_of_text);

echo $parts[0] ."<br>". $parts[1]. "<br>";

}

fclose($file_handle);
*/
//fclose($handle1);
fclose($handle);



?>