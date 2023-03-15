<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<title>DIAZ - daftar jurusan siswa</title>
	</head>
	<body class="p-3">
		<h3 class="text-center">Daftar Jurusan Siswa</h3>
		<hr />
		<div class="mx-auto border p-3 rounded" style="max-width: 400px">
			<h5 class="text-center mb-4">SMKN 4 Bandung</h5>
			<form action="" method="GET" class="d-flex mx-auto align-items-center">
				<p class="m-0">Masukkan jumlah data :</p>
				<input
					type="number"
					name="jumlah"
					value="<?= isset($_GET['jumlah']) ? $_GET['jumlah'] : '' ?>"
					class="mx-3 form-control"
					style="max-width: 75px"
				/>
				<button type="submit" name="ok" class="btn btn-primary">OK</button>
			</form>
		</div>

		<form action="" method="POST" class="table-responsive mt-5">
			<table class="table table-striped rounded border">
				<tbody>
					<?php if (isset($_GET['jumlah'])) : ?>
						<?php for ($i = 1; $i <= $_GET['jumlah']; $i++) : ?>
							<tr>
								<td class="text-nowrap">Nama :</td>
								<td><input type="text" name="nama<?= $i ?>" class="form-control" /></td>
								<td class="text-nowrap">Jurusan :</td>
								<td class="d-flex gap-2">
									<div class="form-check px-4">
										<input type="radio" id="rpl<?= $i ?>" name="jurusan<?= $i ?>" class="form-check-input" />
										<label for="rpl<?= $i ?>" class="form-check-label">RPL</label>
									</div>
									<div class="form-check px-4">
										<input type="radio" id="tkj<?= $i ?>" name="jurusan<?= $i ?>" class="form-check-input" />
										<label for="tkj<?= $i ?>" class="form-check-label">TKJ</label>
									</div>
									<div class="form-check px-4">
										<input type="radio" id="mm<?= $i ?>" name="jurusan<?= $i ?>" class="form-check-input" />
										<label for="mm<?= $i ?>" class="form-check-label">MM</label>
									</div>
									<div class="form-check px-4">
										<input type="radio" id="av<?= $i ?>" name="jurusan<?= $i ?>" class="form-check-input" />
										<label for="av<?= $i ?>" class="form-check-label">AV</label>
									</div>
									<div class="form-check px-4">
										<input type="radio" id="titl<?= $i ?>" name="jurusan<?= $i ?>" class="form-check-input" />
										<label for="titl<?= $i ?>" class="form-check-label">TITL</label>
									</div>
									<div class="form-check px-4">
										<input type="radio" id="toi<?= $i ?>" name="jurusan<?= $i ?>" class="form-check-input" />
										<label for="toi<?= $i ?>" class="form-check-label">TOI</label>
									</div>
								</td>
							</tr>
						<?php endfor ?>
					<?php endif ?>
					<tr>
						<td colspan="4">
							<button type="submit" class="btn btn-primary w-100">Submit</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>
