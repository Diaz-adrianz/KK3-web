<?php
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="FieldsetWithCSS.css" />
		<link
			href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu&family=JetBrains+Mono&display=swap"
			rel="stylesheet"
		/>
		<title>Informasi pinjol | Diaz</title>
        <style>
            td {
                padding-left: 0;
            }
        </style>
	</head>
	<body>
		<fieldset>
			<legend>REGISTRASI PiNJOL AWIKWOK</legend>

            <h3 class="head">WELCOME!</h3>
            <p><?= $nama ?>, anda telah berhasil daftar. Berikut data diri anda:</p>
				<table>
					<tr>
						<td><label for="nip">Tempat Tanggal Lahir</label></td>
						<td>:</td>
						<td>
                            <p><?= $ttl ?></p>
						</td>
					</tr>
					<tr>
						<td><label for="">Jenis Kelamin</label></td>
						<td>:</td>
						<td>
                            <p><?= $kelamin ?></p>
						</td>
					</tr>
					<tr>
						<td><label for="agama">Agama</label></td>
						<td>:</td>
						<td>
                            <p><?= $agama ?></p>
						</td>
					</tr>
					<tr>
						<td><label for="alamat">Alamat</label></td>
						<td>:</td>
						<td>
                            <p><?= $alamat ?></p>
                        </td>
					</tr>
					<tr>
						<td colspan="3">
							<button type="button">Lanjut</button>
						</td>
					</tr>
				</table>
		</fieldset>
	</body>
</html>
