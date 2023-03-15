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

        $mysqli -> query("UPDATE siswa SET nis = '$nis', nama_lengkap = '$nama', jenis_kelamin = '$jk', kelas = '$kelas', jurusan = '$jrsn', alamat = '$alamat', gol_darah = '$goldar', nama_ibu_kandung = '$ibu' WHERE nis = '$nis' ") or die ($mysqli -> error);

        header('location: index.php');
    }
    $nis = $_GET['nis'];

    if (empty($nis)) header('location: index.php');

    $query = $mysqli->query("SELECT * FROM siswa WHERE nis = '$nis' ");
    $siswa = $query->fetch_array();

    if (empty($siswa)) header('location: index.php');

    include 'views/v_tambah.php';

?>