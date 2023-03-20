<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>DIAZ - Login</title>
</head>
<body class="d-flex py-5 px-3 bg-dark">

    <form action="login.php" method="POST" style="max-width: 350px" class="bg-white w-100 rounded m-auto border p-3">
        <h3 class="mb-4">Login</h3>
        <?php if (@$error) : ?>
            <div class="alert alert-danger py-1"><?= $error ?></div>    
        <?php endif ?>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" name="username" placeholder="0">
            <label for="username">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="0">
            <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</body>
</html>