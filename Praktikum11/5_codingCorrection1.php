<!DOCTYPE html>
<html lang="en">
<head>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>DIAZ - Contoh penggunaan ternary</title>
</head>
<body class="p-3">
    <?php
        $nilai = rand(0, 100);

        // PAKAI TERNARY - lebih singkat
        echo "<h5>Pakai Ternary</h5>";
        $hasil = ($nilai > 70 ? "baik" : "buruk");
        echo "Hasilnya adalah " . strtoupper($hasil) . " dengan bilangan $nilai";

        // TANPA TERNARY - mabok kurung kurawal
        echo "<h5 class='mt-3'>Tanpa Ternary</h5>";
        if ($nilai > 70) {
            echo "BAIK";
        } else {
            echo "BURUK";
        }
    ?>
</body>
</html>