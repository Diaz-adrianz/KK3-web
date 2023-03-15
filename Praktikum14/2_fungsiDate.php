<!DOCTYPE html>
<html lang="en">
<head>
    <title>DIAZ - fungsi pertanggalan</title>
</head>
<body>
    <?php 
        echo "Ini format tanggal Indonesia => " . date("d F Y") . "<br>";
        echo "Ini format tanggal System => " . date("l, F d, Y") . "<br>";
        echo "Ini format tanggal database => " . date("Y-m-d") . "<br>";
        echo "Ini format waktu System => " . date("g:i A") . "<br>";
        echo "Ini format waktu Indonesia => " . date("G:i") . "<br>";
    ?>
</body>
</html>