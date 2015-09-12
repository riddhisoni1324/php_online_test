


<html>
<head>
<script type="text/javascript">
var c=60;
var t;
var timer_is_on=0;

function timedCount()
{
						document.getElementById('txt').value=c;
						
						c=c-1;
						t=setTimeout("timedCount()",1000);
						if(c>=0)
						{	
						}
						else if(c==-1)
						{
										stopCount();

										alert('time up');
										alert('Thanks..for giving test');
									   document.getElementById("demo").innerHTML = "test is complited!";
									   	location.href="logout.php"
			 				   
									   
						}
						else
						{

										/*	stopCount();
											document.getElementById("demo").innerHTML = "error";
											alert('sorry!!!!!Now you cant decrese time ....');
											location.href="n2.php"
			 				   */
						}
						   //-------60000 ----for 1 min dec---------
}


function stoptest()
{
alert('oops!you quit the test!!!!!!!!!!!1');


location.href="logout.php"

}

function doTimer()
{
if (!timer_is_on)
  {
  timer_is_on=0;
  timedCount();
  }
}

function stopCount()
{
clearTimeout(t);
timer_is_on=0;
}

</script>
</head>

<body onLoad="doTimer()">
<p id="demo">test is running...</p>
<form>
<?php

//<input type="button" value="Start count!" onLoad="doTimer()">
?>
<input type="text" id="txt">
<?php
//<input type="button" value="Stop count!" onClick="stopCount()">
?>
<input type="button" value="Stop test!" onClick="stoptest()">



</form>
</body>
</html>