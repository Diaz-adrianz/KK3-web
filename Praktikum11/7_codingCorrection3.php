<!DOCTYPE html>
<html lang="en">
<head>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>DIAZ - Pake Ternary KIDS</title>
</head>
<body class="p-3">
    <?php
        $hari = date('d');

        // 1 AKSI 
        echo "<h5>1 Aksi AJAH</h5>";
        echo "Hari ini adalah ", ($hari <= 10 ? "awal bulan" : '');

        // 2 AKSI
        echo "<h5 class='mt-3'>Mode duo</h5>";
        echo "Hari ini adalah ", ($hari <= 10 ? "Awal bulan" : "Sudah lewat awal bulan");
        
        // 3 AKSI
        echo "<h5 class='mt-3'>Mode trio</h5>";
        echo "Hari ini adalah ", ($hari <= 10 ? "Awal bulan" : ($hari <= 20 ? 'Pertengahan bulan' : 'Akhir bulan'));
    ?>
</body>
</html>