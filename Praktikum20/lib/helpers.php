<?php
    session_start();

    function base_url() {
        return "http://localhost/praktikum17";
    }

    function flash($tipe, $decorator = '', $pesan = '') {
        if (empty($pesan)) {
            $pesan = @$_SESSION[$tipe];
            unset($_SESSION[$tipe]);
            return $pesan;
        } else {
            $_SESSION[$tipe] = array('decorator' => $decorator, 'pesan' => $pesan);
        }
    }

    function cekLogin() {
        $username = @$_SESSION['username'];
        $level = @$_SESSION['level'];

        if (empty($username) and empty($level)) {
            header('location: login.php');
        }
    }

    function sudahLogin() {
        $username = @$_SESSION['username'];
        $level = @$_SESSION['level'];

        if (!empty($username) and !empty($level)) {
            header('location: index.php');
        }
    }
?>