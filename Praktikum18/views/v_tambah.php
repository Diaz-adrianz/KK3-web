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
    <?php 
        $action = 'tambah';
        if (!empty($siswa)) $action = 'edit';
    ?>

    <title>DIAZ - <?= $action ?> siswa</title>
</head>
<body class="p-3">
    
    

    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3 class="m-0"><?= strtoupper($action) ?> Siswa</h3>
        <a href="./" class="btn btn-primary">Kembali</a>
    </div>

    <hr>

    
    <form method="POST" action="<?= $action ?>.php" class="mx-auto">
        <table class="table border table-bordered table-striped mx-auto" style="max-width: 500px">            
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis" value="<?= intval(@$siswa['nis']) ?>" <?= @$siswa['nis'] ? 'readonly' : '' ?> class="form-control" /></td>
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
                    <select name="kelas" class="form-control">
                        <option value="XI-RPL1" <?= @$siswa['kelas'] == 'XI-RPL1' ? 'selected' : '' ?>>XI-RPL1</option>
                        <option value="XI-RPL2" <?= @$siswa['kelas'] == 'XI-RPL2' ? 'selected' : '' ?>>XI-RPL2</option>
                        <option value="XI-RPL3" <?= @$siswa['kelas'] == 'XI-RPL3' ? 'selected' : '' ?>>XI-RPL3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?= @$siswa['jurusan'] ?>" class="form-control" /></td>
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
                    <button type="submit" name="submit" class="btn btn-primary w-100 mx-auto">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>