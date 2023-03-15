<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<title>DIAZ - hitung jumlah huruf</title>
	</head>
	<body class="p-3">
		<h3>Hitung Jumlah Huruf</h3>
		<hr />
		<form action="" method="get" class="border rounded p-3 d-flex align-items-center">
			<p class="m-0">Masukkan kalimat :</p>
			<input type="text" name="teks" class="mx-3 form-control" style="max-width: 300px" />
			<div class="d-inline-flex">
				<div class="form-check px-4">
					<input type="radio" value="a" id="a" name="vokal" class="form-check-input" />
					<label for="a" class="form-check-label">A</label>
				</div>
				<div class="form-check px-4">
					<input type="radio" value="i" id="i" name="vokal" class="form-check-input" />
					<label for="i" class="form-check-label">I</label>
				</div>
				<div class="form-check px-4">
					<input type="radio" value="u" id="u" name="vokal" class="form-check-input" />
					<label for="u" class="form-check-label">U</label>
				</div>
				<div class="form-check px-4">
					<input type="radio" value="e" id="e" name="vokal" class="form-check-input" />
					<label for="e" class="form-check-label">E</label>
				</div>
				<div class="form-check px-4">
					<input type="radio" value="o" id="o" name="vokal" class="form-check-input" />
					<label for="o" class="form-check-label">O</label>
				</div>
			</div>
			<button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
		</form>

        <?php if (isset($_GET['hitung'])) : ?>
			<?php
				$teks = $_GET['teks'];
				$vokal = $_GET['vokal'];
				$jumlah = 0;
				$i = 0;
				while ($i < strlen($teks)) {
					if ($teks[$i] == $vokal) $jumlah += 1;

					$i++;
				}
			?>
			<div class="p-3 mt-3 border rounded">
				<h5 class="m-0">
					Jumlah huruf
					<b><?= $vokal ?></b>
					pada kalimat
					<b><?= $teks ?></b>
					adalah <?= $jumlah ?>
				</h5>
			</div>
		<?php endif ?>
	</body>
</html>
