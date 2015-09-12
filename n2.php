<?php
//echo '<font color="white">welcome to online test</font>';
session_start();
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
-webkit-box-pack:left;
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
padding-top:50px;

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

<?php
if(isset($_SESSION['id']))
{
	echo "welcome <font color='red'>".$_SESSION['id']."</font>";
}
?>


<embed src="1.mp4" autostart="true" loop="true"
width="2" height="0">
</embed>
<noembed>
<bgsound src="1.mp4" loop="infinite">
</noembed>
<a name="top"></a>

<div class="center_div">
		<img src="123.png" height="50" width="100%">
			<br><div id="e1">
						<section id="b">
									<ul>
										<li ><a href="#">&nbsp;&nbsp;&nbsp;home&#8711;</a>
										</li>
									</ul>		
							
									<ul>
										<li><a href="#">news&dtrif;</a>
											<ul> 
													<li><a href="#">class</a>
																	<ul>
										<li><a href="#">news&dtrif;</a>
											<ul> 
													<li><a href="#">class</a></li>
													<li><a href="#">school</a></li>
											</ul>
										</li>
									</ul>
							
													</li>
													
													<li><a href="#">school</a></li>
											</ul>
										</li>
									</ul>
									<ul>
										<li ><a href="login.php" >onlinetest&cudarrr;</a></li>
									</ul>
									
									<ul >
										<li ><a href="#">about us&#9660;</a></li>
									</ul>
									
									<ul >
										<li ><a href="#">contect us</a></li>
									</ul>
										
							</section>
</div>




<br><br><br><br><br><br>

<div id="b1" >
<marquee  width="300px" hight="610px" opacity:0.9
  filter:alpha(opacity=90)
direction="down"  bgcolor="white" id="m1"color="black" scrollamount="1" width="40%"onmouseover="this.stop();" onmouseout="this.start();"vspace="200">Online Test For test


</marquee>
<!--
<a href="javascript:void(0);" onClick="window.open('http://localhost/n2.php', '', 
'fullscreen=yes, scrollbars=auto');">Open Full Screen Window</a>
-->
</div>



 
</div>
<div id="c1"><a href="#top" class="element1"><font color="black">&nbsp;&nbsp;go to top</font></a> </div>

</body>
</html>
