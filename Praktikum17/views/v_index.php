<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>DIAZ - Daftar Siswa</title>
</head>
<body class="p-3">
    <div class="d-flex align-items-center mb-3">
        <a href="logout.php" class="btn btn-outline-danger border-0 fs-2 fw-bold bg-transparent text-danger ri-logout-box-line"></a>
        <h3 class="m-0">Daftar Siswa</h3>
        <a href="tambah.php" class="ms-auto btn btn-primary">Tambah</a>
    </div>

    <hr>

    <div class="table-responsive">
        <table class="table border table-striped table-bordered mx-auto">
            <thead>
                <tr class="bg-info text-white">
                    <th>Aksi</th>
                    <th>#</th>
                    <th>NIS</th>
                    <th class="text-nowrap">Nama Lengkap</th>
                    <th class="text-nowrap">Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th class="text-nowrap">Gol. Darah</th>
                    <th class="text-nowrap">Ibu Kandung</th>
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