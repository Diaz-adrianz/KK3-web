<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<style>
			.anaktangga {
				width: 50px;
				height: 50px;
				border: 1px solid white;
			}
		</style>
		<title>DIAZ - Tangga berwarna</title>
	</head>
	<body class="p-3">
		<h3 class="text-center mb-3">Tangga Berwarna</h3>
		<form action="" action="GET" class="p-3 border rounded">
			<div class="d-flex">
				<p class="m-0 text-nowrap">Jumlah Anak Tangga</p>
				<p class="m-0 mx-3">:</p>
				<input placeholder="1" type="number" value="<?= isset($_GET['buat']) ? $_GET['jumlah'] : '' ?>" name="jumlah" min="1" max="20" class="form-control" />
			</div>
			<div class="d-flex my-3">
				<p class="m-0 text-nowrap">Warna</p>
				<p class="m-0 mx-3">:</p>
				<div class="form-check px-4">
					<input type="radio" value="green" id="green" name="warna" class="form-check-input" />
					<label for="green" class="form-check-label">Hijau</label>
				</div>
				<div class="form-check px-4">
					<input type="radio" value="purple" id="purple" name="warna" class="form-check-input" />
					<label for="purple" class="form-check-label">Ungu</label>
				</div>
				<div class="form-check px-4">
					<input type="radio" value="yellow" id="yellow" name="warna" class="form-check-input" />
					<label for="yellow" class="form-check-label">Kuning</label>
				</div>
				<div class="form-check px-4">
					<input type="radio" value="blue" id="blue" name="warna" class="form-check-input" />
					<label for="blue" class="form-check-label">Biru</label>
				</div>
				<div class="form-check px-4">
					<input type="radio" value="gray" id="gray" name="warna" class="form-check-input" />
					<label for="gray" class="form-check-label">Abu</label>
				</div>
			</div>
			<button type="submit" name="buat" class="btn btn-primary">Buat tangga</button>
		</form>

		<div class="tangga mt-5 mx-auto" style="width: fit-content">

			<?php if (isset($_GET['buat'])) : ?>
				
				<?php for ($i = 1 ; $i <= $_GET['jumlah']; $i++) : ?>
					<div class="d-flex">
						<?php for ($j = 1; $j <= $i; $j++) : ?>
							<div class="anaktangga" style="background-color: <?= $_GET['warna'] ?>"></div>
						<?php endfor ?>
					</div>
				<?php endfor ?>

			<?php endif ?>
		</div>
	</body>
</html>
