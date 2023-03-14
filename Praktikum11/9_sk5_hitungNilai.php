<?php 
if (isset($_POST['hitung'])) {
    $NIM = $_POST['nim'];
	$nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
	$nTugas = $_POST['tugas'] * 10/100;
	$nHarian = $_POST['tesharian'] * 20/100;
	$nUTS = $_POST['uts'] * 30/100;
	$nUAS = $_POST['uas'] * 40/100;

	$total = $nTugas + $nHarian + $nUTS + $nUAS;
}
?> 

<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<title>DIAZ - Nilai Akhir</title>
	</head>
	<body class="p-3">
		<h1 class="mx-auto text-center mb-5">Nilai Akhir</h1>

        <form method="POST" action="" class="mx-auto">
            <table class="table border table-striped mx-auto" style="max-width: 500px">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h4 class="text-center">SMKN 4 Bandung</h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" value="<?= isset($_POST['hitung']) ? $NIM : '' ?>" name="nim" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" value="<?= isset($_POST['hitung']) ? $nama : '' ?>" name="nama" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td><input type="text" value="<?= isset($_POST['hitung']) ? $jurusan : '' ?>" name="jurusan" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Nilai Tugas</td>
                        <td><input type="number"  value="<?= isset($_POST['hitung']) ? $nTugas : '' ?>" min="0" max="100" name="tugas" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Nilai Tes Harian</td>
                        <td><input type="number"  value="<?= isset($_POST['hitung']) ? $nHarian : '' ?>" min="0" max="100" name="tesharian" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td><input type="number" value="<?= isset($_POST['hitung']) ? $nUTS : '' ?>" min="0" max="100" name="uts" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Nilai UAS</td>
                        <td><input type="number" value="<?= isset($_POST['hitung']) ? $nUAS : '' ?>" min="0" max="100" name="uas" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Nilai AKHIR</td>
                        <td><b><?= isset($_POST['hitung']) ? $total : '' ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="hitung" class="btn btn-primary w-100 mx-auto">Hitung</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

	</body>
</html>
