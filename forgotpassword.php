<?php
include 'database.php';


if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['number']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];

	if (!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['number']))
	{
		$query_password="SELECT * FROM test WHERE name='$name' AND email='$email' AND phoneno=$number";
				if($query_password_run=mysql_query($query_password))
				{
						$num_row = @mysql_num_rows($query_password);
						if($num_row==1)
						{
			
								while($query_row = mysql_fetch_assoc($query_password_run))
								{
									echo $mail=$query_row['email'];
									echo $oldpassword = $query_row ['password'];
									require 'send.php';								
									$to =$mail;
									$subject = "Mail on forget password";
									$body = "Hi...your old password is<br> $oldpassword"; // HTML  tags
									if(Send_Mail($to,$subject,$body))
									{echo "mail sent";}
									else{echo "some errror in sending mail.";}
								}
						}
						else
						{
						echo "information must match";
						}
				}
				else
				{
				echo mysql_error();
				}
		
		
	}
	else
	{
	echo 'all field required..';	
	}
}
?>



<form action="forgotpassword.php" method="POST">

<font >Name:</font><input type="text" name="name">
<font >E-mail:</font><input type="email" name="email"><br><br>
<font >Phone number:</font><input type="text" maxlength="10" name="number"><br><br>

<input type="submit"  value="submit">



</form>





 


