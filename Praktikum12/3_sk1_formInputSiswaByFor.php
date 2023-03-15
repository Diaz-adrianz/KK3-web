<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<title>DIAZ - input siswa</title>
	</head>
	<body class="p-3">
		<h3>Form Input Data Siswa</h3>
		<hr />
		<form action="" method="GET" class="d-flex mb-5 align-items-center" style="max-width: 350px">
			<p class="text-nowrap m-0">Masukkan Jumlah Siswa :</p>
			<input type="number" name="jumlah" value="<?= isset($_GET['jumlah']) ? $_GET['jumlah'] : '' ?>" class="mx-3 form-control" />
			<button type="submit" name="ok" class="btn btn-primary">OK</button>
		</form>

		<form action="" method="POST">
			<table class="w-100 table border table-striped" style="min-width: 768px; max-width: 1080px">
				<thead>
					<tr>
						<th><h6 class="text-center">No.</h6></th>
						<th><h6 class="text-center">NIS</h6></th>
						<th><h6 class="text-center">Nama</h6></th>
						<th><h6 class="text-center">Alamat</h6></th>
					</tr>
				</thead>
				<tbody>
                    <?php if (isset($_GET['jumlah'])) : ?>
						<?php for ($i = 1; $i <= $_GET['jumlah']; $i++) : ?>
							<tr>
								<td><input type="number" value="<?= $i ?>" class="form-control text-center" /></td>
								<td><input type="number" class="form-control" /></td>
								<td><input type="text" class="form-control" /></td>
								<td><input type="text" class="form-control" /></td>
							</tr>
						<?php endfor ?>
					<?php endif ?>
				</tbody>
			</table>
		</form>
	</body>
</html>
