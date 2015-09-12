<?php
include 'database.php';
if (isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['cpassword'])&&isset($_POST['npassword']) &&isset($_POST['email'])&&isset($_POST['number']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$npassword=$_POST['npassword'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	if (!empty($_POST['name'])&&!empty($_POST['password'])&&!empty($_POST['npassword'])&&!empty($_POST['cpassword'])&&!empty($_POST['email'])&&!empty($_POST['number']))
	{	$query_password="SELECT password FROM test WHERE name='$name' AND email='$email' AND phoneno=$number";
				$num_row = @mysql_num_rows($query_password_run);
						if($num_row==1)
						{				if($query_password_run=mysql_query($query_password))
										{	
														while($query_row = mysql_fetch_assoc($query_password_run))
														{
															$oldpassword = $query_row ['password'];
															if($oldpassword==$password)
															{
																if($cpassword==$npassword)
																{
																$query_update_password="UPDATE test SET password='$npassword' WHERE name='$name'";
																mysql_query($query_update_password) or die(mysql_error());
																}
															}
														}
										}
										else
										{
										echo mysql_error();
										}

						}
						else
						{
						echo "information must match";
						}
										
		
	}
	else
	{
	echo 'all field required..';	
	}
}
?>



<form action="changepassword.php" method="POST">

<font >Name:</font><input type="text" name="name">
<font >E-mail:</font><input type="email" name="email"><br><br>
<font >Phone number:</font><input type="text" maxlength="10" name="number"><br><br>

<br><br>
<font >Old Password:</font><input type="password" name="password"><br><br>
<font >New Password:</font><input type="password" name="npassword"><br><br>

<font >Conform Password:</font><input type="password" name="cpassword"><br><br>
<input type="submit"  value="submit">



</form>





 


