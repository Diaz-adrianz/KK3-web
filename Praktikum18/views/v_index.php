<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>DIAZ - Daftar Siswa</title>

    <style>
        .link {
            text-decoration: none !important;
        }
    </style>
</head>
<body class="p-3">
    <div class="d-flex align-items-center mb-3">
        <h3 class="m-0">Daftar Siswa</h3>
        <a href="logout.php" class="ms-auto btn btn-outline-danger border-0 fs-2 fw-bold bg-transparent text-danger ri-logout-box-line"></a>
    </div>

    <hr>

    <div class="d-flex mb-3 align-items-center gap-3">
        <div>
            <form method="GET" action="" class="input-group">
                <?php if (!empty($sort_by) && !empty($order_by)) : ?>
                    <input type="hidden" value="<?= $sort_by ?>" name="sort">
                    <input type="hidden" value="<?= $order_by ?>" name="order">
                <?php endif ?>
                <input type="text" name="search" class="form-control" placeholder="Cari disini">
                <button type="submit" class="btn btn-primary ri-search-line"></button>
            </form>
        </div>
        <a href="?" class="btn btn-secondary ri-refresh-line"></a>
        <a href="tambah.php" class="ms-auto btn btn-primary">Tambah</a>
    </div>

    <hr>

    <div class="table-responsive">
        <table class="table border table-striped table-bordered mx-auto">
            <thead>
                <tr class="bg-dark text-white">
                    <th>Aksi</th>
                    <th>#</th>
                    <th class="text-nowrap ">
                        NIS
                        <a href="?sort=nis&order=asc" class="link">🔼</a>
                        <a href="?sort=nis&order=desc" class="link">🔽</a>
                    </th>
                    <th class="text-nowrap">Nama Lengkap
                        <a href="?sort=nama_lengkap&order=asc" class="link">🔼</a>
                        <a href="?sort=nama_lengkap&order=desc" class="link">🔽</a>
                    </th>
                    <th class="text-nowrap">Jenis Kelamin
                        <a href="?sort=jenis_kelamin&order=asc" class="link">🔼</a>
                        <a href="?sort=jenis_kelamin&order=desc" class="link">🔽</a>
                    </th>
                    <th class="text-nowrap">Kelas
                        <a href="?sort=kelas&order=asc" class="link">🔼</a>
                        <a href="?sort=kelas&order=desc" class="link">🔽</a>
                    </th>
                    <th class="text-nowrap">Jurusan
                        <a href="?sort=jurusan&order=asc" class="link">🔼</a>
                        <a href="?sort=jurusan&order=desc" class="link">🔽</a>
                    </th>
                    <th class="text-nowrap">Alamat
                        <a href="?sort=alamat&order=asc" class="link">🔼</a>
                        <a href="?sort=alamat&order=desc" class="link">🔽</a>
                    </th>
                    <th class="text-nowrap">Gol. Darah
                        <a href="?sort=gol_darah&order=asc" class="link">🔼</a>
                        <a href="?sort=gol_darah&order=desc" class="link">🔽</a>
                    </th>
                    <th class="text-nowrap">Ibu Kandung
                        <a href="?sort=nama_ibu_kandung&order=asc" class="link">🔼</a>
                        <a href="?sort=nama_ibu_kandung&order=desc" class="link">🔽</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 1;
                    while ($siswa = $listSiswa -> fetch_array() ) {
                ?>
                    <tr>
                        <td class="d-flex">
                            <a href="edit.php?nis=<?= $siswa['nis'] ?>" class="btn btn-secondary ri-edit-fill" style="margin-right: .5rem"></a>
                            <a href="delete.php?nis=<?= $siswa['nis'] ?>" class="btn btn-danger ri-delete-bin-fill"></a>
                        </td>
                        <td class="text-nowrap"><?= $i++ ?></td>
                        <td class="text-nowrap"><?= $siswa['nis'] ?></td>
                        <td class="text-nowrap"><?= $siswa['nama_lengkap'] ?></td>
                        <td class="text-nowrap"><?= $siswa['jenis_kelamin'] ?></td>
                        <td class="text-nowrap"><?= $siswa['kelas'] ?></td>
                        <td class="text-nowrap"><?= $siswa['jurusan'] ?></td>
                        <td class="text-nowrap"><?= $siswa['alamat'] ?></td>
                        <td class="text-nowrap"><?= $siswa['gol_darah'] ?></td>
                        <td class="text-nowrap"><?= $siswa['nama_ibu_kandung'] ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>