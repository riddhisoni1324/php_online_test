


<?php
//<body onLoad="setTimeout('delayer()', 15000)">
?>
<?php
require 'sw.php';
//require 'extra.php';
session_start();
if(!isset($_SESSION['id']))
{
	header('Location: login.php');
}
?>


<!DOCTYPE html>
<html>
<head>

<meta http-equiv="pragma" content="no-cache" />
 <script type="text/javascript">
 /*document.onkeydown = checkKeycode();
 
    function checkKeycode(e) {
        var keycode;
        if (window.event)
            keycode = window.event.keyCode;
        else if (e)
            keycode = e.which;

        // Mozilla firefox
        if ($.browser.mozilla) {
            if (keycode == 116 ||(e.ctrlKey && keycode == 82)) {
                if (e.preventDefault)
                {
                    e.preventDefault();
                    e.stopPropagation();
                }
            }
        } 
        // IE
        else if ($.browser.msie) {
            if (keycode == 116 || (window.event.ctrlKey && keycode == 82)) {
                window.event.returnValue = false;
                window.event.keyCode = 0;
                window.status = "Refresh is disabled";
            }
        }
    }
 */
 
 /*function onFeforeUnloadAction(){
var flag=window.confirm("You are closing the window. do you want to continue. Click 'Ok' to close or click 'Cancel' to stay back");

if(flag) { 
alert("bye");
} else { 
// Stop the closing browser 
//....
}
 
  /*if (window.addEventListener) {  // all browsers except IE before version 9
            window.addEventListener ("beforeunload", OnBeforeUnLoad, false);
        }
        else {
            if (window.attachEvent) {   // IE before version 9
                window.attachEvent ("onbeforeunload", OnBeforeUnLoad);
            }
        }

            // the OnBeforeUnLoad method will only be called in Google Chrome and Safari
      */ /* function OnBeforeUnLoad () {
            return "All data that you have entered will be lost!";
        }
 //*/


/* window.onbeforeunload = function() 
	{	alert("sure??");
	


	  return "Dude, are you sure you want to leave? Think of the kittens!";
	  
	  
    }*/
	/*window.onbeforeunload = function(evt) {
            var message = 'Are you sure you want to leave?';
            if (typeof evt == 'undefined') {
                evt = window.event;
            }       
            if (evt) {
                evt.returnValue = message;
            }
            return;
        } */
	window.onbeforeunload = confirmExit;

function confirmExit(){
return 'Exit without save';

}
	
	
	/*
window.onbeforeunload = confirmWinClose();
function confirmWinClose() {
var confirmClose = confirm('Close?');
if(confirmClose==true)
{
window.location = "logout.php";

}
else

{

window.location = "ty.php";
window.location = "logout.php";

}

}*/



/*function getConfirmation(){
   var retVal = confirm("Do you want to continue ?");
   if( retVal == true ){
      alert("User wants to continue!");
	  return true;
   }else{
      alert("User does not want to continue!");
	  return false;
   }
}
getConfirmation();
//alert("sure??<input type=\"radio\">a<\input>");



}*/



function delayer(){

    window.location = "logout.php";
		
}
//-->
</script>
<head>
</head>
<body onLoad="setTimeout('delayer()', 50000)">
<p></p>
<br><br>
<iframe src="mcq1.php" name="iframe_a" height="60%" width="60%"></iframe>
<form><a href="logout.php"><input type="button" value="logout"></a>
</form>

</body>
</html>






