<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="dekorasi.css">
        <title>POST | DIAZ</title>
    </head>
    <body class="win1">
        <h1 class="head">Program Pengukur Berat Badan (get)</h1>
           <form method="GET" action="getProses.php">
                Masukkan namamu: <br>
                <input type="text" name="nama" id="nama" placeholder="John Doe"> <br>
                Masukkan Berat badanmu (kg): <br>
                <input type="number" name="bb" placeholder="0" id="bb"> <br>
                <button type="submit" class="btn">Kirim</button>
           </form>
    </body>
</html>