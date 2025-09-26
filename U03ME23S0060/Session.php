<?php
session_save_path ('C:\xampp\htdocs\U03ME23S0060\Sessions');
session_start();
$sessTimeout = 1;
if (isset($_SESSION['LAST_ACTIVITY'])){
    $lastAct = $_SESSION['LAST_ACTIVITY'];
    $currentTime=time();
    $timeSinceLastActivity = $currentTime - $lastAct;

    if($timeSinceLastActivity > $sessTimeout){
        session_unset();
        session_destroy();
        echo "session expired";
    }else{
        $_SESSION['LAST_ACTIVITY'] = $currentTime;
        echo "session active";
    }
}else{
    $_SESSION['LAST_ACTIVITY'] = time();
    echo "Session started"; 
}
?>