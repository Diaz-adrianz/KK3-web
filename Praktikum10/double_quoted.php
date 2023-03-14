<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="dekorasi.css">
        <title>String double quote | DIAZ</title>
    </head>
    <body class="win2">
        <h1 class="head">Masih dalam penggunaan tanda kutip</h1>

            <?php
            $tulisan = 'Menggunakan PHP';
            echo 'ini adalah suatu string' . '<br/>';
            echo 'Luwh bisa menyisipkan baris baru dalam string, kawas kieu.' .
            	'<br/>';
            echo "Assalamu 'alaikum " . '<br\>';
            echo 'Nama saya Zaid' . '<br/>';
            echo 'Gweh senang belajar web di SMKN 4 Bandung ' . '<br/>';
            echo "$tulisan" . '<br/>';
            ?>
    </body>
</html>