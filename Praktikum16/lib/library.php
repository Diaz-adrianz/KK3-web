<?php 
    session_start();
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'pwpb';
    $mysqli = mysqli_connect($host, $user, $pass, $db) or die('GAGAL: tidak dapat terhubung dengan database');
?>