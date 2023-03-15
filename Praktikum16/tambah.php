<?php 
    include 'lib/library.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis = $_POST['nis'];
        $nama = $_POST['nama_lengkap'];
        $jk = $_POST['jenis_kelamin'];
        $kelas = $_POST['kelas'];
        $jrsn = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $goldar = $_POST['gol_darah'];
        $ibu = $_POST['ibu_kandung'];

        $mysqli -> query("INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, kelas, jurusan, alamat, gol_darah, nama_ibu_kandung) VALUES ($nis, '$nama', '$jk', '$kelas', '$jrsn', '$alamat', '$goldar', '$ibu')") or die ($mysqli -> error);

        header('location: index.php');
    }

    include 'views/v_tambah.php';
?>