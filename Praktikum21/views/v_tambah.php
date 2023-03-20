<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


    <?php 
        $action = 'tambah';
        if (!empty($siswa)) {
            $action = 'edit';            
        }
    ?>

    <title>DIAZ - <?= $action ?> siswa</title>
</head>
<body class="p-3">
    

    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3 class="m-0"><?= strtoupper($action) ?> Siswa</h3>
        <a href="./" class="btn btn-primary">Kembali</a>
    </div>

    <hr>

    <?php if (@$_SESSION['alert'] ) : ?>
        <div class="alert alert-<?= $_SESSION['alert']['decorator'] ?>"><?= $_SESSION['alert']['pesan'] ?></div>
    <?php endif ?>
    
    <form method="POST" action="<?= $action ?>.php" enctype="multipart/form-data" class="mx-auto">
        <table class="table border table-bordered table-striped mx-auto" style="max-width: 500px">            
            <tr>
                <td>NIS</td>
                <td><input required type="number" name="nis" value="<?= intval(@$siswa['nis']) ?>" <?= @$siswa['nis'] ? 'readonly' : '' ?> class="form-control" /></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" value="<?= @$siswa['nama_lengkap'] ?>" class="form-control" /></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>
                        Laki-Laki
                    </label>
                    <label class="mx-3">
                        <input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>
                        Perempuan
                    </label>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                    <select name="id_kelas" class="form-control">
                        <option value="">[ Pilih Kelas ]</option>
                        <?php while  ($kelasnya = $dataKelas->fetch_array()) : ?>
                            <option value="<?= $kelasnya['id_kelas'] ?>" <?= $kelasnya['id_kelas'] == @$siswa['id_kelas'] ? 'selected' : '' ?>>
                                <?= $kelasnya['nama_kelas'] ?>
                            </option>
                        <?php endwhile ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <?php if ($action == 'edit') : ?>
                        <img src="<?= @$siswa['file'] ? $siswa['file'] :'assets/images/default_picture.png' ?>" class="mb-3" width="100">
                        <input type="hidden" name="foto" value="<?= @$siswa['file'] ?>">
                    <?php endif ?>

                    <input class="form-control" type="file" name="foto" accept="image/*">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?= @$siswa['alamat'] ?>" class="form-control" /></td>
            </tr>
            <tr>
                <td>Gol. Darah</td>
                <td>
                    <select name="gol_darah" class="form-control">
                        <option value="A" <?= @$siswa['gol_darah'] == 'A' ? 'selected' : '' ?>>A</option>
                        <option value="AB" <?= @$siswa['gol_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
                        <option value="B" <?= @$siswa['gol_darah'] == 'B' ? 'selected' : '' ?>>B</option>
                        <option value="O" <?= @$siswa['gol_darah'] == 'O' ? 'selected' : '' ?>>O</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ibu Kandung</td>
                <td><input type="text" name="ibu_kandung" value="<?= @$siswa['nama_ibu_kandung'] ?>" class="form-control" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit" class="btn btn-primary w-100 mx-auto d-flex align-items-center gap-2 justify-content-center">
                        <i class="ri-save-2-line"></i>
                        Simpan
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>