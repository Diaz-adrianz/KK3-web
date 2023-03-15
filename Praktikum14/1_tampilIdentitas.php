<!DOCTYPE html>
<html lang="en">
<head>
    <title>DIAZ - tampilkan nama</title>
</head>
<body>
    <?php
        function tampilIdentitas($nama, $kelas, $alamat) {
            echo "Nama saya $nama <br>";
            echo "Kelas saya $kelas <br>";
            echo "Alamat saya di $alamat <br>";
        }

        function hitungUmur($tahun_lahir, $tahun_sekarang) {
            return $tahun_sekarang - $tahun_lahir;
        }

        tampilIdentitas('Si Imoet', 'Tataboga', 'Ngawi');

        $umur_saya = hitungUmur(2002, 2023);
        echo "Umur saya $umur_saya tahun";
    ?>
    
</body>
</html>