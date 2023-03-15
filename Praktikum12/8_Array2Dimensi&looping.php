<!DOCTYPE html>
<html lang="en">
<head>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>DIAZ - Array  2 dimensi & looping</title>
</head>
<body class="p-3">
    <?php
        $siswa = array(
            array("1314114590", "Tony", "MIPA 1"),
            array("1314114592", "Thor", "MIPA 2"),
            array("1314114593", "Bruce", "MIPA 3")
        );

    ?>
    <h3 class="mb-3 text-center">Daftar Siswa</h3>

    <table class="table table-striped border rounded">
        <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
        </tr>
        <?php
            for ($i = 0; $i < 3; $i++) {
                echo '<tr>';
                    for ($j = 0; $j < 3; $j++) {
                        echo "<td>" . $siswa[$i][$j] . "</td>";
                    }
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>