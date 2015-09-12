


<?php
include 'database.php';

if (isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['cpassword'])&&isset($_POST['email'])&&isset($_POST['number']))
{
$name=$_POST['name'];

$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];
$number=$_POST['number'];
echo $number;
	if (!empty($_POST['name'])&&!empty($_POST['password'])&&!empty($_POST['cpassword'])&&!empty($_POST['email'])&&!empty($_POST['number']))
	{
		if($password==$cpassword)
		{
			$query1= "SELECT id FROM `test` WHERE name='$name' AND password='$password'";//user register or not???
			
			if($query_run1 = mysql_query($query1))
			{
			$num_row = mysql_num_rows($query_run1);
				if($num_row==1) // yes register
				{
				echo 'you have already register...';
				}
				else // not register before
				{		
					$query = "INSERT INTO `test` (`id`, `name`, `password`, `email`, `phoneno`) VALUES ('','$name','$password','$email','$number')";
					if($query_run = mysql_query($query))
					{
					echo 'done!';
					}
					else
					{
					echo 'insertion fail....';
					}
				}
			}
		}
		else
		{
		echo 'password doesn\'t match';
		}
	}
	else
	{
	echo 'all field required..';	
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



<form action="index.php" method="POST">

<font color="white">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="text" name="name">
<br><br>
<font color="white">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="password" name="password"><br><br>
<font color="white">C Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="password" name="cpassword"><br><br>
<font color="white">E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="email" name="email"><br><br>
<font color="white">Phone number:&nbsp;&nbsp;&nbsp</font><input type="text" maxlength="10" name="number"><br><br>
<input type="submit"  value="register">
<a href="login.php"><input type="button"  value="login"></a>


</form>





 
</div>
<div id="c1"><a href="#top" class="element1"><font color="black">&nbsp;&nbsp;go to top</font></a> </div>

</body>
</html>



