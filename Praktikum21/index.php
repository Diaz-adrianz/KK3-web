<?php 
    include 'lib/helpers.php';

    cekLogin();

    include 'lib/library.php';
    $sql = 'SELECT * FROM siswa INNER JOIN kelas on siswa.id_kelas = kelas.id_kelas';

    // fitur search 
    $search = @$_GET['search'];
    if (!empty($search)) $sql .= " WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR kelas LIKE '%$search%' OR jurusan LIKE '%$search%' OR alamat LIKE '%$search%' OR gol_darah LIKE '%$search%' OR nama_ibu_kandung LIKE '%$search%' ";

    // fitur order
    $sort_by = @$_GET['sort'];
    $order_by = @$_GET['order'];
    if (!empty($sort_by) && !empty($order_by)) $sql .= " ORDER BY $sort_by $order_by";

    $listSiswa = $mysqli -> query($sql) or die ($mysqli -> error);
    $alert = flash('alert');

    include 'views/v_index.php';
?>