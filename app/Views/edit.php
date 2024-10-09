<!-- Nanti -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<style>
  p {
    margin-bottom:0;
    height: 38px;

  }

</style>

<div class="container">
  <form action="<?= base_url('edit/' . $ambildata['ID_PENDAFTARAN']) ?>" method="POST">
    <div class="container-sm bg-secondary-subtle my-3 px-3 pt-3 border border-secondary" style="width: 500px ">
      <h1 class="row justify-content-center py-1 fw-bold">Edit Data</h1>
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
          <input type="text" name="NAMA" class="form-control" value="<?= esc($ambildata['NAMA']) ?>" required>
          <input type="text" name="AGAMA" class="form-control" value="<?= esc($ambildata['AGAMA']) ?>" required>
          <input type="text" name="TEMPATLAHIR" class="form-control" value="<?= esc($ambildata['TEMPATLAHIR']) ?>" required>
          <input type="number" name="TINGGIBADAN" class="form-control" value="<?= esc($ambildata['TINGGIBADAN']) ?>" onkeypress="validateNumberInput(event)" required>
          <input type="number" name="BERATBADAN" class="form-control" value="<?= esc($ambildata['BERATBADAN']) ?>" onkeypress="validateNumberInput(event)" required>
          <input type="text" name="NAMAHUBUNGAN" class="form-control" value="<?= esc($ambildata['NAMAHUBUNGAN']) ?>" required>
          <input type="text" name="JENIS_DOKUMEN" class="form-control" value="<?= esc($ambildata['JENIS_DOKUMEN']) ?>" required>
          <input type="number" name="NOMOR_DOKUMEN" class="form-control" value="<?= esc($ambildata['NOMOR_DOKUMEN']) ?>" onkeypress="validateNumberInput(event)" required>
          <input type="text" name="NAMAHOBBY" class="form-control" value="<?= esc($ambildata['NAMAHOBBY']) ?>" required>
          <input type="text" name="ALAMAT" class="form-control" value="<?= esc($ambildata['ALAMAT']) ?>" required>
          <p class="border border-secondary p-1"><?= esc($ambildata['USERNAME']) ?></p>
        </div>
      </div>
      <div class="row p-3"><button type="submit" class="btn btn-success mt-2">Simpan</button></div>
    </div>
  </form>

  
</body>
</html>