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

    <link rel="stylesheet" href="main.css">

    <style>
        body {
            height: 100vh;
        }
        .container {
            flex: 1;
            background-color: var(--blackey);        
            border-radius: 1em 1em 0 0 
        }
        figure {
            min-width: 230px;
            height: 230px;
        }
    </style>

    <?php
    $nama = ['Diaz Adriansyah', 'Dias'];
    $ttl = 'Bandung, 19 Desember 2005';
    $umur = 17;
    $tinggal = 'Bandung, jl. ibrahim adjie';
    $favorit = ['warna' => 'biru', 'makanan' => 'keju', 'minuman' => 'susu'];

    $status = [
    	'posisi' => 'pelajar',
    	'institusi' => 'SMK Negeri 4 Bandung',
    	'bidang' => 'Informasi Teknologi',
    ];
    $passion = 'teknologi';
    $penghargaan = ['web development', 'cloud', 'bussiness plan'];
    $citacita = 'web developer';

    $hobi = ['coding', 'menggambar', 'desain antarmuka', 'koleksi lego'];
    ?>
    <title>Portalfolio | Diaz</title>
</head>
<body class="d-flex-v">
    <div class="d-flex center-flex-y py-2">
        <h2 class="link accent">Portalfolio</h2>
    </div>
    <nav class="d-flex p-3" style="justify-content: space-around; border-top: 1px solid var(--silver); border-bottom: 1px solid var(--silver)">
        <a href="" class="link">Home</a>
        <a href="" class="link on">Profil</a>
        <a href="" class="link">Portofolio</a>
        <a href="" class="link">Contact Us</a>
    </nav>

    <div class="container mx-5 mt-5 p-3 d-flex">
        <figure>
            <img src="assets/me.jpg" alt="">
        </figure>
        <div class="px-3">
            <h3 class="m-0"><?= $nama[0] ?></h3>
            <span><?= $status['posisi'] ?></span>
            <p class="mt-3">
                Nama panggilan <?= $nama[1] ?>. Terlahir di <?= $ttl ?>; Umur <?= $umur ?> Tahun. 
                Menetap <?= $tinggal ?>. Warna favorit adalah <?= $favorit[
	'warna'
] ?>, 
                sedangkan makanan dan minuman saya suka yang mengandung <?= $favorit[
                	'makanan'
                ] ?> maupun <?= $favorit['minuman'] ?>. 
            </p>
            <p class="mt-3"> 
                Saat ini saya seorang <?= $status['posisi'] ?> di <?= $status[
 	'institusi'
 ] ?> di bidang <?= $status['bidang'] ?>.
                Saya memiliki ketertarikan di dunia <?= $passion ?> dan ingin selalu menekuninya.
                Sejauh ini saya meraih sertifikat dan penghargaan di bidang <?= "$penghargaan[0], " .
                	" $penghargaan[1]," .
                	" $penghargaan[2]" ?>.     
                Oleh karena itu saya bercita-cita sebagai <?= $citacita ?> terlebih dahulu.
            </p>
            <p class="mt-3">
                Di waktu luang saya senang untuk 
                <?php foreach ($hobi as $h): ?>
                    <?= ', ' . $h ?>
                <?php endforeach; ?>
                . Sekian perkenalan saya.
            </p>

            <button class="btn mt-5">Send Message</button>
        </div>
    </div>
</body>
</html>