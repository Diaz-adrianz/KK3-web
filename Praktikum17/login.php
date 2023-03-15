<?php
    include 'lib/helpers.php';

    sudahLogin();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'lib/library.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = $mysqli->query("SELECT * FROM login WHERE username = '$username' AND password = SHA1('$password') ") or die($mysqli->error);

        if ($data->num_rows != 0) {
            $row = mysqli_fetch_object($data);
            $_SESSION['username'] = $row->username;
            $_SESSION['level'] = $row->level;

            header('location: index.php');
        } else {
            $error = "Username atau password salah";
        }
    }

    include 'views/v_login.php';
?>