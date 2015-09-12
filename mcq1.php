<?php
session_start();
?>
<?php
$counter=0;

if(isset($_POST['submit']))
{
require 'database.php';
	if(empty($_POST['option']))
	{
	echo "not ok";
	}
			else
			{
			$ans_submit=$_POST['option'];
			$query_select = "SELECT id FROM check_ans";
				if($query_select_run = mysql_query($query_select))
				{
				count1();
				
						$id=mysql_result($query_select_run,0,'id');
						$query_select1 = "SELECT answer FROM mcq WHERE id=$id";
						if($query_select_run1 = mysql_query($query_select1))
						{			$ans=mysql_result($query_select_run1,0,'answer');
									if($ans_submit==$ans)
									{		if(isset($_SESSION['id']))
											{
													echo $session_id=$_SESSION['id'];
													$query = "SELECT mark FROM test WHERE name='$session_id'";
													if($query_run=mysql_query($query))
													{
													while($query_row = mysql_fetch_assoc($query_run))
													{
														$question = $query_row ['mark'];
														echo $question;
														$marks=$question+1;
														$sql_mark= "UPDATE test SET mark='$marks' WHERE name='$session_id'";
														mysql_query($sql_mark) or die(mysql_error());
													}
													}
													else{echo mysql_error();}
											}
										echo "your ans is correct....";
									}
									else
									{echo 'your ans  wrong....';}
						}
						else
						{echo mysql_error();}
				}
				else
				{echo mysql_error();}
		}
}

?>



<?php

require 'database.php';
echo $r=rand(1,30);


$query = "SELECT DISTINCT id,question,option1,option2,option3,option4 FROM mcq WHERE id=$r LIMIT  1";


	if($query_run=mysql_query($query))
	{
		while($query_row = mysql_fetch_assoc($query_run))
		{
		$question = $query_row ['question'];
		$option1 = $query_row ['option1'];
		$option2 = $query_row ['option2'];
		$option3 = $query_row ['option3'];
		$option4 = $query_row ['option4'];
		$id= $query_row['id'];
		$query_ans = "UPDATE check_ans SET id= $id";
			if($query_ans_run = mysql_query($query_ans))
			{
			echo 'doneee';
			}
			else
			{
			echo mysql_error();
			}
				count2();
				echo '<br>' .$question .'<br>' . 'A)  '. $option1.'<br>' . 'B)  '. $option2.'<br>' .  'C)  '.$option3.'<br>' .  'D)  '.$option4 . '<br>';
			check();
		}
	}
	else
	{
	echo mysql_error();
	}
?>
<?php
function check(){

echo "<form action='mcq1.php' method='POST'>";
echo "<input type='radio' name='option' id='answer' value='a'>A";
echo "<input type='radio' name='option' id='answer' value='b'>B";
echo "<input type='radio' name='option' id='answer' value='c'>C";
echo "<input type='radio' name='option' id='answer' value='d'>D";
echo "<input type='submit' name='submit' value='Submit'><br>";
echo "</form>";
}
?>

<?php // max que attemped

function count2()
{
$file='count1.txt';
$handle=fopen($file,'r');
$current=fread($handle,filesize($file));
if($current==6)
{
header("Location: ty.php");
}



$inc=$current+1;
$handle1=fopen($file,'w');
fwrite($handle1,$inc);
fclose($handle1);

}

?>

<?php
// this is for how many que attemted
function count1()
{
$file='attemptedque.txt';
$handle=fopen($file,'r');
$current=fread($handle,filesize($file));



$inc=$current+1;
$handle1=fopen($file,'w');
fwrite($handle1,$inc);
fclose($handle1);

}

?>