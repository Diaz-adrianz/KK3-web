<?php
    session_start();
    session_destroy();
    header('location: login.php'); // ke login langsung ajah
?>