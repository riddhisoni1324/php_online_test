<?php

session_start();
$timeout = 60; // Number of seconds until it times out.
echo 'harsh'; 
// Check if the timeout field exists.
if(isset($_SESSION['timeout'])) {
    // See if the number of seconds since the last
    // visit is larger than the timeout period.
    $duration = time() - (int)$_SESSION['timeout'];
    if($duration > $timeout) {
        // Destroy the session and restart it.
        session_unset();
        //session_start();
		alert('hvmgvkh');
    }
}

?>