<?php
/*

require 'database.php';

if(isset($_POST['role'])) {

    $role = implode(",", $_POST['role']);  

} else {

    $role = "";

}



echo $role;


*/
?>
<?php

$hostname="localhost";
$username="root";
$password="";

$my_db="online_test";

if(!@mysql_connect($hostname,$username,$password) || !@mysql_select_db($my_db))
{
die(mysql_error());
}
else
{
echo 'database connect';
}


for($i = 1; $i<=3; $i++) {
    $_POST["status_$i"] = isset($_POST["status_$i"]) ? $_POST["status_$i"] : 0;
}
var_dump($_POST);
?>
<?php
$hostname="localhost";
$username="root";
$password="";

$my_db="online_test";

if(!@mysql_connect($hostname,$username,$password) || !@mysql_select_db($my_db))
{
die(mysql_error());
}
else
{
echo 'database connect';
}

$myresult = array();

    if(!isset($_POST['status_1'])){ 
        $myresult['status_1'] = 0;
    }
    if(!isset($_POST['status_2'])){ 
        $myresult['status_2'] = 0;
    }
    if(!isset($_POST['status_3'])){ 
        $myresult['status_3'] = 0;
    }

    echo "<pre>";
    print_r($myresult);
	
foreach( $myresult as $row ) {
    $query1[] = '("'.mysql_real_escape_string($row['id']).'", '.$row['name'].')';
}
mysql_query('INSERT INTO attendance (id, name) VALUES '.implode($query1));
	echo "</pre>";

?>

<?php
/*
$hostname="localhost";
$username="root";
$password="";

$my_db="date";

if(!@mysql_connect($hostname,$username,$password) || !@mysql_select_db($my_db))
{
die(mysql_error());
}
else
{
echo 'database connect';
}
$date = date('d/m/Y h:i:s', time());
$date1 = date('Y m d', time());
echo '<br>';
echo $date;
echo '<br>';
echo $date1;

$phpdate = strtotime( $date1 );

$mysqldate = date( 'Y-m-d H:i:s', $phpdate );
 
$query = "UPDATE date SET date=string_to_date($phpdate)";
$exe=mysql_query($query);
if($exe==1)
{
echo "sucess";
}
else{
echo mysql_error();
}


/*$query1=INSERT INTO date ('date') VALUES($date1));
$query_run = mysql_query($query1);
if($query_run = mysql_query($query1)) // check whether user register or not
	{
			$num_row = mysql_num_rows($query_run);
				if($num_row==1)
				{
				echo 'done........'; 
				}
	}
	else
	{
	echo mysql_error();	
	}
*/

?>



<html>

<body>
<br>
//------------------------------------------------------------------

<form action="checkbox.php" method="post">
<input type="text" name="name">
<input type="submit" value="submit">
</form>


<form action="checkbox.php" method="POST">
date:<input type="date" name="bday">
</form>


<input type="checkbox" id="Public_Web" checked value="yes"
    name="data">
<input type="checkbox" id="Public_Web" checked value="yes"
    name="data">
<input type="checkbox" id="Public_Web" checked value="yes"
    name="data">
<input type="checkbox" id="Public_Web" checked value="yes"
    name="data">

<p id="a"></p>
<p onclick="$(this).hide();">riddhi</p>


//--------------------------------------------
<form action="checkbox.php" method="post">
riddhi<input type="checkbox" id="status_1" name="status_1" value="1" />
soni<input type="checkbox" id="status_2" name="status_2" value="1" />
riddhi1<input type="checkbox" id="status_3" name="status_3" value="1" />
<input type="submit" />
</form>


//--------------------------------------------------------
<form action="checkbox.php" method="post">
<input type="hidden" name="status_1" value="0" />
riddhi<input type="checkbox" id="status_1" name="status_1" value="1" /> Check 1 <br />
<input type="hidden" name="status_2" value="0" /> 
riddhi2<input type="checkbox" id="status_2" name="status_2" value="1" /> Check 2 <br />
<input type="hidden" name="status_3" value="0" />
riddhi3<input type="checkbox" id="status_3" name="status_3" value="1" /> Check 3 <br />
<input type="submit" />

</form>

<form name="test" method="post" action="checkbox.php" >

<input type="checkbox" name="role[]" value="1" />1

<input type="checkbox" name="role[]" value="2" />2

<input type="checkbox" name="role[]" value="3" />3

<input type="checkbox" name="role[]" value="4" />4

<input type="submit" value="Submit" >

</form>


<script type="text/javascript" src="j2.js"></script>
<script type="text/javascript" src="j1.js"></script>
</body>


</html>

<!DOCTYPE html>
<html>
<body>
<b> <input type="checkbox" id="chkSelect" /> Check/Uncheck me </b>
  <br/><br/>
  <input type="button" id="btnStatus" value="Get Checkbox status" />  
Checkbox: <input type="checkbox" id="myCheck">

<p>Click the "Try it" button to find out whether the checkbox is checked, or not.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("myCheck").checked;
    document.getElementById("demo").innerHTML = x;
}
</script>
</body>
</html>
