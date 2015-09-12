<?php



require 'database.php';

if (isset($_POST['name'])&&isset($_POST['password']))
{
$name=$_POST['name'];
$password=$_POST['password'];
	if (!empty($_POST['name'])&&!empty($_POST['password']))
	{
	$query= "SELECT id FROM `test` WHERE name='$name' AND password='$password'";
	
		if($query_run = mysql_query($query)) // check whether user register or not
			{
			$num_row = mysql_num_rows($query_run);
				if($num_row==0)
				{
				echo 'password and username doesn\'t exist plz do register first'; 
				}
				else if($num_row==1) //user register
				{
					
					$query_check= "SELECT id FROM `login` WHERE name='$name' AND password='$password'"; //check wheter user logged in before or not
						if($query_check_run=mysql_query($query_check))
						{
							$num_c_row=mysql_num_rows($query_check_run);
							
							if($num_c_row==1)
							{
							echo 'you can\'t give again..';
							} 
							else
							{
							$query = "INSERT INTO `login` (`id`, `name`, `password`) VALUES ('','$name','$password')";//if user logged in first time then insert it's info in login

								if($query_run = mysql_query($query))
								{
												ob_start();
												session_start();
											
												$userid=mysql_result($query_run,0,'id');
												//alert($userid);
												//$_SESSION['id']=$userid;
												$_SESSION['id']=$name;
													
												header('Location:mcq.php');
												
								}
								else
								{
								die(mysql_error());
								}

		
	//						}
						}
				}
			}
			else
		{
		die(mysql_error());
		}
	}
	else
	{
	echo 'both field required..';	
	}
}
}
?>


<!DOCTYPE html>
<html>
<head>


<style>
a:link,a:visited
{
padding:0;
margin:0;
z-index:1;
display:block;
width:100%;
font-weight:bold;
color:Black;
text-align:center;
text-decoration:none;
text-transform:uppercase;
}


a:hover,a:active
{
color:black;
background-color:none;
}		

#s1
{
background-color:none;
}
body
{
padding:0;
margin:0;
background-repeat:no-repeat;
background-attachment:fixed;
}


#b
{
padding:0;
margin:0;

display: -webkit-box;
-webkit-box-orient:horizontal;
-webkit-box-pack:center;
-webkit-box-flex:1;
width:94.125%;
}

#b1
{
padding:0;
margin:0;

display: -webkit-box;
-webkit-box-orient:horizontal;
-webkit-box-pack:center;
-webkit-box-flex:1;
}






.center_div
{
padding-top:0;
width:80%;
height:1000px;
margin:auto;
background-color:gray;	
-webkit-box-flex:1;
}


#e1{
position:fixed;
width:85%;
margin:0;
padding:0;

}

img
{
width:80%;
position:fixed;
z-index:1;
-webkit-box-flex:1;
}


marquee
{
margin-right:0;
resize:both;
overflow:scroll;
}


#c1
 {
position:fixed;
bottom:0;
right:0;
width:10%;
}
#d3
{
display: -webkit-box;
-webkit-box-orient:horizontal;
-webkit-box-pack:center;

-webkit-box-flex:1;
}
*
{
margin:0px;
padding:0px;
}
ul
{
text-align:center;
width:20%;
text-decoration:none;
list-style:none;
}

ul li
{
width:100%;     /*------imp------------otherwise breakdown------*/

float:left;
padding-right:10px;

position:relative;
}

ul a
{
display:table-cell;
vertical-align:middle;
background:gray;
color:black;
padding-top:2px;

}

ul a:hover{
width:100%;
background-color:red;
}

li > ul{
display:none;
position:absolute;
left:0;
top:100%;

}


li:hover>ul{
width:100%;
display:block;
}


li>ul li
{
padding:0;
padding-top:2px;
}


li>ul li>ul
{

left:100%;
top:0;
padding-left:1px;

}


li>ul li>ul li{
width:100%;
}

li:hover>a
{
background:red;
}
</style>
</head>
<body >
<a name="top"></a>


<div class="center_div">



<form action="login.php" method="POST" >

<font color="white">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</font><input type="text" name="name"><br><br>
<font color="white">Password:</font><input type="password" name="password"><br><br>
<input type="submit"  value="login">

<br>
<a href="index.php"><input type="button"value="register"></a>
</form>

<!--<a href="changepassword.php"color="white">change password</a><a href="forgotpassword.php"color="white">forgot password</a>-->



 
</div>
<div id="c1"><a href="#top" class="element1"><font color="black">&nbsp;&nbsp;go to top</font></a> </div>

</body>
</html>


