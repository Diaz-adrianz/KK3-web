<?php 
    include 'lib/helpers.php';

    cekLogin();

    include 'lib/library.php';

    $sql = 'SELECT * FROM kelas';

    // fitur search 
    $search = @$_GET['search'];
    if (!empty($search)) $sql .= " WHERE nama_kelas LIKE '%$search%' OR nama_jurusan LIKE '%$search%' ";

    // fitur order
    $sort_by = @$_GET['sort'];
    $order_by = @$_GET['order'];
    if (!empty($sort_by) && !empty($order_by)) $sql .= " ORDER BY $sort_by $order_by";

    $listKelas = $mysqli -> query($sql) or die ($mysqli -> error);

    include 'views/v_indexJurusan.php';
?>