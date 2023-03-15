<!DOCTYPE html>
<html lang="en">
<head>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <title>DIAZ - Simple nested looping</title>
</head>
<body class="p-3">
    <?php
        $jumlah = rand(1, 20);

        for ($i = 1; $i <= $jumlah; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo 'X ';
            }
            echo('<br />');
        }
    ?>
</body>
</html>