<!DOCTYPE html>
<html lang="en">
<head>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>DIAZ - Tanpa Ternary If & If Else</title>
</head>
<body class="p-3">
    <?php
        $t = date('d');

        // IF DOANG
        echo "<h5>IF doang</h5>";
        if ( $t <= 10) {
            echo "Sekarang awal bulan dek!";
        }

        // ADA ELSENYA
        echo "<h5 class='mt-3'>Tambah ELSE</h5>";
        if ( $t <= 10) {
            echo "Sekarang awal bulan dek!";
        } else {
            echo "Sudah lewat awal bulan, duit gajian habis kak :(";
        }
    ?>
</body>
</html>