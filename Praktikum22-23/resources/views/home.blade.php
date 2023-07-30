<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   
    <title>DIAZ - HomePage</title>
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

    <div class="vh-100 d-flex w-100 p-5" style="background: url({{ url('/images/bigsur.jpg') }})">
        <h2 class="text-center m-auto text-white text-shadow" style="max-width: 768px">{{ @$caption }}</h2>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>