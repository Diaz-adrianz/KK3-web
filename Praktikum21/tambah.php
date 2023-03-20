<?php 
    include 'lib/helpers.php';

    cekLogin();

    include 'lib/library.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis = @$_POST['nis'];
        $nama = @$_POST['nama_lengkap'];
        $jk = @$_POST['jenis_kelamin'];
        $jrsn = @$_POST['jurusan'];
        $alamat = @$_POST['alamat'];
        $goldar = @$_POST['gol_darah'];
        $ibu = @$_POST['ibu_kandung'];
        $idKelas = @$_POST['id_kelas'];

        $foto = $_FILES['foto'];

        if (empty($nis)) {
            flash("alert", "warning", "Mohon masukkan <b>NIS</b> dengan benar");
        } else if (empty($nama)) {
            flash("alert", "warning", "Mohon masukkan <b>NAMA</b> dengan benar");
        } else {
            if (!empty($foto) AND $foto['error'] == 0) {
                $file_name = $foto['name'];
                $file_tmp = $foto['tmp_name'];
                $file_destination = "assets/images/".$file_name;
                $imageFileType = strtolower(pathinfo($file_destination,PATHINFO_EXTENSION));
    
    
                // Check if file already exists
                if (file_exists($file_destination)) {
                    flash("alert", "warning", "File sudah ada");
                    header('location: index.php');
                    return;
                }
    
                // Check file size
                if ($foto["size"] > 3000000) {
                    flash("alert", "warning", "Ukuran file melebihi batas 3mb");
                    header('location: index.php');
                    return;
                }
                
                $ext = ['png', 'jpg', 'jpeg', 'gif'];
                
                if ( !in_array($imageFileType, $ext)) {
                    flash("alert", "warning", "File hanya JPG, JPEG, PNG & GIF yang diperbolehkan");
                    header('location: index.php');
                    return;
                }   
                
                $upload = move_uploaded_file($file_tmp, $file_destination);
                if (!$upload) {
                    flash("alert", "error", "upload file gagal");
                    header('location: index.php');
                    return;
                } 
            }

            flash("alert", "success", "Tambah data siswa berhasil");
    
            $mysqli -> query("INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, jurusan, alamat, gol_darah, nama_ibu_kandung, file, id_kelas ) VALUES ($nis, '$nama', '$jk', '$jrsn', '$alamat', '$goldar', '$ibu', '$file_destination', '$idKelas' )") or die ($mysqli -> error);
    
            header('location: index.php');
        }
    
    }
    
    $dataKelas = $mysqli -> query("SELECT * FROM kelas") or die($mysqli->error);

    include 'views/v_tambah.php';
?>