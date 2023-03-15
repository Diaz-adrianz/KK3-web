<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>DIAZ - Daftar Siswa</title>
</head>
<body class="p-3">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3 class="m-0">Daftar Siswa</h3>
        <a href="tambah.php" class="btn btn-primary">Tambah</a>
    </div>

    <hr>

    <div class="table-responsive">
        <table class="table border table-striped table-bordered mx-auto">
            <thead>
                <tr class="bg-info">
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