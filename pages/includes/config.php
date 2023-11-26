<?php
    session_start();
    $_SESSION['lang'] = $_SESSION['lang'] ?? 'en';
    $_SESSION['lang'] = $_GET['lang'] ?? $_SESSION['lang'];

    echo "choose language ".$_SESSION['lang'];
?> 