<!DOCTYPE html>
<html lang="en">
<head>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>DIAZ - menghitung hari</title>
</head>
<body>
    <?php 
        $hari = date('l');
        $tanggal = date('d');
        $bulan = date('m');
        $tahun = date('y');
        
        // dibuat pada tuesday tanggal 14
        if ($hari == 'sunday') {
            if ($tanggal <=10) {
                echo "Selamat berakhir pekan pada tanggal muda :D";
            } else {
                echo "Selamat berakhir pekan pada tanggal tua dan tetap cumungut :D";
            }
        } else {
            echo "Semoga hari anda menyenangkan <br>";
            echo "Sampai jumpa di akhir pekan";
        }
        echo "<br><i class='small'>Tanggal $hari, $tanggal $bulan $tahun</i>";
    ?>
</body>
</html>