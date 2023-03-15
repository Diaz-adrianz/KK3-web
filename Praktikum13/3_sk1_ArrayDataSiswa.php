<!DOCTYPE html>
<html lang="en">
<head>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>DIAZ - FOR mantan (ada gituh?)</title>
</head>
<body class="p-3">
    <?php
        $siswa = array(
            "1314115690" => ["nama" => "Bruce Banner", "kelas" => "MIF 1", "jurusan" => "MIF"],
            "1314115692" => ["nama" => "Stephen asing", "kelas" => "MIF 2", "jurusan" => "MIF"],
            "1314115693" => ["nama" => "Matt murtad", "kelas" => "MIF 3", "jurusan" => "MIF"],
            "1314115699" => ["nama" => "Peter parkour", "kelas" => "MIF 1", "jurusan" => "MIF"],
        );
    ?>

    <h3 class="text-center mb-3">DATA SISWA MIF</h3>
    
    <table class="table table-striped border">
        <thead >
            <tr class="bg-info text-white">
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $nis => $data) : ?>
                <tr>
                    <td><?= $nis ?></td>
                    <td><?= $data["nama"] ?></td>
                    <td><?= $data["kelas"] ?></td>
                    <td><?= $data["jurusan"] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>