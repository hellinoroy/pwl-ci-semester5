<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<main class="container d-flex flex-column p-3 rounded bg-secondary-subtle">
  <?php $session = service('session'); if($session->getFlashdata()) : ?>
    <div class="toast position-absolute top-0 start-0 m-5" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header 
      <?php if($session->getFlashdata("success")){ echo "bg-primary";} else {echo "bg-danger";} ?>">
        <strong class="me-auto">Info</strong>  
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">

        <?php
          if ($session->getFlashdata("success")) {
            echo $session->getFlashdata("success");
          } else if ($session->getFlashdata("error")) {
            echo $session->getFlashdata("error");
          }
        ?>

      </div>
    </div>
  <?php endif; ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id Pendaftaran</th>
        <th scope="col">Nama</th>
        <th scope="col">Agama</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tinggi Badan</th>
        <th scope="col">Berat Badan</th>
        <th scope="col">Jenis Dokumen</th>
        <th scope="col">Nomor Dokumen</th>
        <th scope="col">Nama Hobby</th>
        <th scope="col">Alamat</th>
        <th scope="col">Username</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($ambildatasemua as $data): ?>
        <tr>
          <td><?= esc($data['ID_PENDAFTARAN']) ?></td>
          <td><?= esc($data['NAMA']) ?></td>
          <td><?= esc($data['AGAMA']) ?></td>
          <td><?= esc($data['TEMPATLAHIR']) ?></td>
          <td><?= esc($data['TINGGIBADAN']) ?></td>
          <td><?= esc($data['BERATBADAN']) ?></td>
          <td><?= esc($data['NAMAHUBUNGAN']) ?></td>
          <td><?= esc($data['JENIS_DOKUMEN']) ?></td>
          <td><?= esc($data['NOMOR_DOKUMEN']) ?></td>
          <td><?= esc($data['ALAMAT']) ?></td>
          <td><?= esc($data['USERNAME']) ?></td>
          <td>
            <a href="<?= base_url('edit/' . $data['ID_PENDAFTARAN']) ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i></a>
            <a href="<?= base_url('delete/' . $data['ID_PENDAFTARAN']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fa-solid fa-trash"></i></a>

          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>








</main>

</body>
<script>
  window.onload = (event) => {
    let myAlert = document.querySelectorAll('.toast')[0];
    if (myAlert) {
      let bsAlert = new bootstrap.Toast(myAlert);
      bsAlert.show();
    }
  };
</script>


</html>