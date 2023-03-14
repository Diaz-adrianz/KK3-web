<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="dekorasi.css">
        <title>Hola dalam PHP | DIAZ</title>
    </head>
    <body>
        <h1 class="head">DATA PRIBADI GWEH</h1>
        <p>
            <?php
            $nama = 'Zaid';
            $kelas = 'XI PPLG 1';
            $nis = '212211xxxx';
            $umur = '17';
            $bb = 55;

            echo "Nama saya $nama <br/>";
            echo "Sekarang kela $kelas dan NIS saya $nis <br />";
            echo 'Umut saya sekarang adalah ' . $umur . ' tahun <br />';
            echo "Berat badan saya $bb Kg ";
            ?>
        </p>
    </body>
</html>