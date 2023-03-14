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
        .container {
            background-color: var(--blackey);
        }
    </style>
    <title>Blogging</title>
</head>
<body>
    <nav class="px-4 py-3 d-flex center-flex">
        <h3 class="me-auto">Literasi</h3>
        <a class="link mx-2" href="viewPost.php">postingan</a>
        <a class="link mx-2" href="">layanan</a>
        <a class="link mx-2 on" href="">profil</a>
    </nav>
    <form action="viewPost.php" method="POST" class="container p-3 m-3">
        <div class="inp-float mb-3">
            <input type="text" name="judul" id="judul" class="inp" required>
            <span>Judul</span>
        </div>
        <input class="mb-3" type="date" name="waktu" id="waktu" required>
        <div class="inp-float mb-3">
            <input type="text" name="penulis" id="penulis" class="inp" required>
            <span>Penulis</span>
        </div>
        <div class="inp-float mb-5">
            <textarea maxlength="230"  name="konten" id="konten" class="inp" style="min-height: 200px" required></textarea>
            <span>Konten</span>
        </div>

        <button type="submit" class="btn">Submit</button>
    </form>
</body>
</html>