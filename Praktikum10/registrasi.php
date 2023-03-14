<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="FieldsetWithCSS.css" />
		<link
			href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu&family=JetBrains+Mono&display=swap"
			rel="stylesheet"
		/>
		<title>Registrasi pinjol | Diaz</title>
	</head>
	<body>
		<fieldset>
			<legend>REGISTRASI PiNJOL AWIKWOK</legend>

			<form method="POST" action="lihat.php">
				<table>
					<tr>
						<td><label for="nama">Nama</label></td>
						<td>:</td>
						<td>
							<input type="text" name="nama" id="nama" placeholder="John Doe" />
						</td>
					</tr>
					<tr>
						<td><label for="nip">Tempat Tanggal Lahir</label></td>
						<td>:</td>
						<td>
							<input type="text" name="ttl" id="ttl" placeholder="Ngawi, 30 Februari 1998" />
						</td>
					</tr>
					<tr>
						<td><label for="">Jenis Kelamin</label></td>
						<td>:</td>
						<td>
							<label>
								<input type="radio" name="kelamin" value="pria" />
								pria
							</label>
							<label>
								<input type="radio" name="kelamin" value="wanite" />
								Wanita
							</label>
							<label>
								<input type="radio" name="kelamin" value="tak" disabled />
								<s>Tidak keduanya</s>
							</label>
						</td>
					</tr>
					<tr>
						<td><label for="agama">Agama</label></td>
						<td>:</td>
						<td>
							<select name="agama" id="agama">
								<option value="islam">islam</option>
								<option value="kristen">kristen</option>
								<option value="katolik">katolik</option>
								<option value="hindu">hindu</option>
								<option value="budha">budha</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="alamat">Alamat</label></td>
						<td>:</td>
						<td><textarea name="alamat" id="alamat" placeholder="jl. inajadulu kel. uarga kec. antikan kota kansaja" cols="30" rows="10" required></textarea></td>
					</tr>
					<tr>
						<td colspan="3">
							<button type="reset">Reset</button>
							<button type="submit">Simpan</button>
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>
