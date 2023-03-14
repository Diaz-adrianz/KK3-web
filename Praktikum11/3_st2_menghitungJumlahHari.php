<!DOCTYPE html>
<html lang="en">
<head>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>DIAZ - menghitung hari</title>
</head>
<body>

    <h1 class="text-center mb-3">Menghitung Jumlah Hari</h1>

    <form action="" method="POST" class="mx-auto" style="max-width: 450px">
        <table class="table table-striped" >
            <tbody>
                <tr>
                    <td>Bulan</td>
                    <td>:</td>
                    <td>
                        <select name="bulan" class="form-control">
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><input type="number" class="form-control" name="tahun"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit" class="btn btn-primary w-100" name="hitung">Hitung</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
            if(isset($_POST['hitung'])) {
                $bulan = $_POST['bulan'];
                $tahun = $_POST['tahun'];
                $hari = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun) ;
                // $namaBulan = DateTime::CreateFromFormat('!m', $bulan) -> format('F');
                $namaBulan; 
                
                switch($bulan) {
                    case 2: $namaBulan = 'Februari'; break;
                    case 3: $namaBulan = 'Maret'; break;
                    case 4: $namaBulan = 'April'; break;
                    case 5: $namaBulan = 'Mei'; break;
                    case 6: $namaBulan = 'Juni'; break;
                    case 7: $namaBulan = 'Juli'; break;
                    case 8: $namaBulan = 'Agustus'; break;
                    case 9: $namaBulan = 'September'; break;
                    case 10: $namaBulan = 'Oktober'; break;
                    case 11: $namaBulan = 'November'; break;
                    case 12: $namaBulan = 'Desember'; break;
                    default: $namaBulan = 'Januari'; break;
                }
                
                echo "<p class='w-100'>
                    pada bulan $namaBulan di tahun $tahun ada $hari hari
                </p>";
            }
        ?>
    </form>

</body>
</html>