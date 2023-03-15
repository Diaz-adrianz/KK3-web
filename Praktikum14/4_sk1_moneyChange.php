<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<title>DIAZ - money changer</title>
	</head>
	<body class="p-3">
		<form action="" method="GET" class="mx-3 p-3 border rounded">
			<h3 class="mb-3 text-center">Money Changer Transaction</h3>
			<hr />
			<table class="mx-auto">
				<tr>
					<td><p>Uang dalam Rupiah : Rp</p></td>
					<td>
						<input value="<?= isset($_GET['konv']) ? $_GET['rp'] : '' ?>" type="number" name="rp" class="mb-3 mx-3 form-control" />
					</td>
				</tr>
				<tr>
					<td><p>Mata uang asing :</p></td>
					<td>
						<select value="<?= isset($_GET['konv']) ? $_GET['asing'] : '' ?>" name="asing" class="mb-3 form-control mx-3">
							<option value="usd">Dollar Amerika</option>
							<option value="sgd">Dollar Singapura</option>
							<option value="yen">Yen Jepang</option>
							<option value="won">Won Korea</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="" colspan="2">
						<button type="submit" name="konv" class="btn btn-primary mx-auto">Konversi</button>
					</td>
				</tr>
			</table>
			<hr />

			<?php 
				function konversi($rp, $asing) {
					switch($asing) {
						case 'sgd': return $rp / 7000; break;
						case 'yen': return $rp / 4000; break;
						case 'won': return $rp / 11; break;
						default: return $rp / 12000; break; // USD amerika
					}
				}

				if (isset($_GET['konv'])) {
					$rp = $_GET['rp'];
					$asing = $_GET['asing'];

					echo "
					<p class='text-center'>
						<b>Rp. $rp = " . konversi($rp, $asing) . " $asing</b>
					</p>
					";
				}

			?>
		</form>
	</body>
</html>
