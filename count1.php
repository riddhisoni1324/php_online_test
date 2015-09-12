 <?php
session_start();
if (!isset($_SESSION['endOfTimer'])){
    $endOfTimer = time() + 60;
    $_SESSION['endOfTimer'] = $endOfTimer;
}

if(($_SESSION['endOfTimer'] - time()) < 0) {
      $timeTilEnd = 0;
}
else {
      $timeTilEnd = $_SESSION['endOfTimer'] - time();
}

if($timeTilEnd <= 0) { 
session_destroy();
}

?>
You have <span id="timer">

<?php echo (ceil($timeTilEnd/60)); ?></span> Minutes left


<script type="text/javascript">
var TimeLeft = <?php echo $timeTilEnd; ?>;

function countdown()
{
      if(TimeLeft > 0) {
            TimeLeft -= 1;
            document.getElementById('timer').innerHTML = Math.ceil(TimeLeft/60);
      }
if(TimeLeft < 1) {
            window.location = "endingpage.html";
      }
}
CountFunc = setInterval(countdown,1000);
</script>