<?php

if (isset($_POST)) {
	$judul = $_POST['judul'];
	$waktu = $_POST['waktu'];
	$penulis = $_POST['penulis'];
	$konten = $_POST['konten'];
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu&family=JetBrains+Mono&display=swap"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="../main.css">

    <style>
        .item {
            background-color: var(--blackey);
        }
    </style>
    <title>Blogging</title>
</head>
<body>
    <nav class="px-4 py-3 d-flex center-flex">
        <h3 class="me-auto">Literasi</h3>
        <a class="link mx-2 on" href="">postingan</a>
        <a class="link mx-2" href="">layanan</a>
        <a class="link mx-2" href="newPost.php">profil</a>
    </nav>
    
    <div class="container p-3">

        <?php if (isset($judul)): ?> 
            <div class="item p-3 mb-3 rounded">
                <h3 class="m-0"><?= $judul ?></h3>
                <span><?= $penulis ?> | <?= date_format(
 	date_create($waktu),
 	'd M Y'
 ) ?></span>
                <p class="mt-2">
                    <?= $konten ?>
                </p>
            </div>
        <?php endif; ?>
        
        <div class="item p-3 mb-3 rounded">
            <h3 class="m-0">Keseruan Dalam Rumah Tangga</h3>
            <span>Zaid | 21 jan 2020</span>
            <p class="mt-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores reiciendis assumenda necessitatibus beatae odio animi ut quos eos doloremque commodi!
            </p>
        </div>
        
        <div class="item p-3 mb-3 rounded">
            <h3 class="m-0">Sumatra was a best place</h3>
            <span>Roger | 32 feb 2021</span>
            <p class="mt-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores reiciendis assumenda necessitatibus beatae odio animi ut quos eos doloremque commodi!
            </p>
        </div>
    </div>
</body>
</html>