<?php 
if (isset($_POST['hitung'])) {
	$nama = $_POST['nama'];
	$nTugas = $_POST['tugas'] * 20/100;
	$nHarian = $_POST['tesharian'] * 10/100;
	$nUTS = $_POST['uts'] * 30/100;
	$nUAS = $_POST['uas'] * 40/100;

	$total = $nTugas + $nHarian + $nUTS + $nUAS;
	
	if ( $total < 50 ) {
		$index = ['E', 'red'];
	} elseif ($total < 60) {
		$index = ['D', 'orange'];
	} elseif ($total < 70) {
		$index = ['C', 'yellow'];
	} elseif ($total < 80) {
		$index = ['B', 'blue'];
	} else {
		$index = ['A', 'green'];
	}
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
		<title>DIAZ - Nilai Rapot dan Index</title>
	</head>
	<body class="p-3">
		<h1 class="mx-auto text-center mb-5">Nilai Rapot dan Index</h1>

		<?php if (!isset($_POST['hitung'])) : ?>
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
							<td>Nilai Tugas</td>
							<td><input type="number" min="0" max="100" name="tugas" class="form-control" /></td>
						</tr>
						<tr>
							<td>Nilai Tes Harian</td>
							<td><input type="number" min="0" max="100" name="tesharian" class="form-control" /></td>
						</tr>
						<tr>
							<td>Nilai UTS</td>
							<td><input type="number" min="0" max="100" name="uts" class="form-control" /></td>
						</tr>
						<tr>
							<td>Nilai UAS</td>
							<td><input type="number" min="0" max="100" name="uas" class="form-control" /></td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit" name="hitung" class="btn btn-primary w-100 mx-auto">Hitung</button>
							</td>
						</tr>
					</tbody>
				</table>
			</form>

		<?php else : ?>
			<table class="table border table-striped mx-auto" style="max-width: 500px">
				<thead>
					<tr>
						<th colspan="2">
							<h4 class="text-center"><?= $nama ?></h4>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nilai Akhir</td>
						<td><input type="number" value="<?= $total ?>" readonly class="form-control" /></td>
					</tr>
					<tr>
						<td>Index</td>
						<td><b style="color: <?= $index[1] ?>"><?= $index[0] ?></b></td>
					</tr>
					<tr>
						<td colspan="2">
							<a href="" class="btn btn-secondary w-100 mx-auto">Lagi</a>
						</td>
					</tr>
				</tbody>
			</table>
		<?php endif ?>
	</body>
</html>
