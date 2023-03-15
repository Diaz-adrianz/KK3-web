<!DOCTYPE html>
<html lang="en">
<head>
    <title>DIAZ - Array Asosiatif</title>
</head>
<body class="p-3">
    <?php
        $siswa = array(
            "1314115698" => "Wanda pisyen",
            "1314115699" => "Nakia hp kuat",
            "1314115700" => "Carol ok",
        );

        foreach($siswa as $nis => $nm_siswa) {
            echo "$nm_siswa memiliki NIS $nis <br>";
        }

    ?>
</body>
</html>