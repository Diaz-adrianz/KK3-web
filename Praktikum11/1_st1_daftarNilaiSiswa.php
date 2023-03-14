<?php
	if (isset($_POST['hitung'])) {
		$nama = $_POST['nama'];
		$total = ($_POST['indonesia'] + $_POST['matematika'] + $_POST['inggris'] + $_POST['kejuruan']) / 4;
		$predikat = "sangat baik";
		
		if ($total < 70 ) {
			$predikat = 'buruk';
		} elseif ($total < 80) {
			$predikat = 'cukup baik';
		} elseif ($total < 90 ) {
			$predikat = 'baik';
		}

		echo "
		<h1>Hasil Akhir $nama</h1>
		<p>Total nilai $total dengan predikat <b>$predikat</b></p>
		";
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
		<title>DIAZ - Daftar Nilai Siswa</title>
	</head>
	<body class="p-3">
		<?php if (!isset($_POST['hitung'])) : ?>
			<h1 class="mx-auto text-center mb-5">Daftar Nilai UN SISWA</h1>

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
							<td>Nama</td>
							<td><input type="text" name="nama" class="form-control" /></td>
						</tr>
						<tr>
							<td>Nilai B. Indonesia</td>
							<td><input type="number" name="indonesia" class="form-control" /></td>
						</tr>
						<tr>
							<td>Nilai Matematika</td>
							<td><input type="number" name="matematika" class="form-control" /></td>
						</tr>
						<tr>
							<td>Nilai B. Inggris</td>
							<td><input type="number" name="inggris" class="form-control" /></td>
						</tr>
						<tr>
							<td>Nilai Teori Kejuruan</td>
							<td><input type="number" name="kejuruan" class="form-control" /></td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit" name="hitung" class="btn btn-primary w-100 mx-auto">Hitung</button>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		<?php endif ?>
	</body>
</html>
