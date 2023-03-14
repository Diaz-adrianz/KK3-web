<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="dekorasi.css">
        <title>POST | DIAZ</title>
    </head>
    <body style="background: url(assets/mac1.jpg)">
        <h1 class="head">Hasil Pengukuran Berat Badan</h1>
        <p>
            <?php
            $nama = $_POST['nama'];
            $bb = $_POST['bb'];
            $sifat;

            if ((int) $bb < 40) {
            	$sifat = 'kurus';
            } elseif ((int) $bb < 70) {
            	$sifat = 'Ideal';
            } else {
            	$sifat = 'gendut';
            }

            echo "Holaaa $nama <br/>";
            echo 'Berat kamu ' . $bb . "kg, $sifat banget kamu :v <br/>";
            echo 'awokawok';
            ?>
        </p>
    </body>
</html>