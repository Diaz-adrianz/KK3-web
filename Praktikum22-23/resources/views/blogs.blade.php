<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   
    <title>DIAZ - {{ @$brand }} Page</title>
</head>
<body>
    <header class="d-flex bg-white sticky-top p-3 border-bottom align-items-center">
        <h2 class="text-primary">{{ @$brand }}</h2>
        <nav class="ms-auto d-flex gap-3">
            <a href="{{ url('/') }}" class="nav-link {{ @$routeNow == 'home' ? 'text-primary fw-bold' : '' }} ">Home</a>
            <a href="{{ url('/store') }}" class="nav-link {{ @$routeNow == 'store' ? 'text-primary fw-bold' : '' }} ">Store</a>
            <a href="{{ url('/blogs') }}" class="nav-link {{ @$routeNow == 'blogs' ? 'text-primary fw-bold' : '' }} ">Blogs</a>
        </nav>
    </header>

    <div class="p-5">
        <table class="table table-striped w-100">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Topik</th>
                    <th scope="col">Waktu Baca</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $p)
                    <tr>
                        <th scope="row">{{ $loop -> index + 1 }}</th>
                        <td>{{ $p['judul'] }}</td>
                        <td>Rp{{ $p['topik'] }}</td>
                        <td>Rp{{ $p['minread'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>