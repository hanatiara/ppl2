<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<div class=" mt-auto py-3 bg-dark text-white" >
  <div class="container">
    Header
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="/kota">Home</a>
        <a class="nav-link active" href="/kota/berita">Berita</a>
        <a class="nav-link active" href="/kota/view">Tabel Kota</a>
        <a class="nav-link active" href="/kota/create">Insert</a>
      </div>
    </div>
  </div>
</nav>

<div class="h-100">
<?= $this->renderSection('content') ?> 
</div>

<footer class="mt-auto py-3 bg-dark text-white" >
  <div class="container">
    Footer
  </div>
</footer>
</body>
</html>
