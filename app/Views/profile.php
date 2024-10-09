<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/profile">Profile</a>
        </li>
    </ul>

    <div class="d-flex nav-item flex-row gap-3">
      <a class="nav-link" aria-current="page" href="/logout"><button type="button" class="btn btn-danger">Logout</button></a>
    </div>  
  </div>
</nav>

<main>

  <div class="container-sm bg-secondary-subtle my-3 p-3 border border-secondary" style="width: 500px ">
    <h1 class="row justify-content-center py-1 fw-bold">Profile</h1>
    <hr>
    <div class="row">
      <div class="col-4">
        <p class="border py-1">ID Pendaftaran:</p>
        <p class="border py-1">Nama:</p>
        <p class="border py-1">Agama:</p>
        <p class="border py-1">Tempat Lahir:</p>
        <p class="border py-1">Tinggi badan:</p>
        <p class="border py-1">Berat Badan:</p>
        <p class="border py-1">Nama Hubungan:</p>
        <p class="border py-1">Jenis Dokumen:</p>
        <p class="border py-1">Nomor Dokumen:</p>
        <p class="border py-1">Nama Hobby:</p>
        <p class="border py-1">Alamat: </p>
        <p class="border py-1">Username: </p>
      </div>
      <div class="col">
        <p class="border border-secondary p-1"><?= esc($ambildata['ID_PENDAFTARAN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['NAMA']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['AGAMA']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['TEMPATLAHIR']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['TINGGIBADAN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['BERATBADAN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['NAMAHUBUNGAN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['JENIS_DOKUMEN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['NOMOR_DOKUMEN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['NAMAHOBBY']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['ALAMAT']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['USERNAME']) ?></p>
      </div>
    </div>

  </div>
  
</main>


</body>
</html>