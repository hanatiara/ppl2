<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  <main class="form-signin">
        <div class="container w-50">
        <form method="post" action="<?= base_url('c_login/auth'); ?>">
            <h1 class="h3 mb-2 mt-4 fw-normal">Login</h1>
            <input type="text" name="username" id="username" placeholder="Username" class="mb-2 form-control" required autofocus>
            <input type="password" name="password" id="password" placeholder="Password" class="mb-2 form-control" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
        </form>
        </div>
    </main>
  </body>
</html>