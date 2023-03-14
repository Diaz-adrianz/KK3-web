<!DOCTYPE html>
<html lang="en">
<head>
    <title>DIAZ - bentuk ternary</title>
</head>
<body>
    <?php
        $var = rand(-20, 20);
        $hasil = ($var >= 0 ? 'positif' : 'negatif');
        
        echo "Angka $var adalah bilangan $hasil";
    ?>
</body>
</html>