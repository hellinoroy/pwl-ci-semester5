<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrasi - Undira</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<style>
  body {
    background-image:url(<?php echo base_url('images/bangunanUndira.jpg'); ?>);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;

    font-family: 'Roboto', sans-serif;
  }

  #tint {
    background-color: rgba(0, 0, 255, 0.2);
  }

  label{
    font-size: 18px;
  }

</style>


<!-- ganti input jadi input-group bootstrap -->
<body class="vh-100">
  <div class="w-100 h-100 d-flex align-items-center justify-content-center position-relative" id="tint">

    <a href="/login" class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-0-hover position-absolute top-0 end-0 m-5"><button type="button" class="btn btn-primary p-3">< Kembali Ke Login</button></a>
  
    <main class="container d-flex flex-column p-3 rounded bg-secondary-subtle" style="width: 500px">
    

      <h3 class="mx-auto mb-4 fw-bold">REGISTRASI</h3>

      <form action="<?= base_url('/register');?> " method="POST" class="d-flex flex-column d-flex gap-2">

        <input type="text" name="NAMA" class="form-control" placeholder="Nama Lengkap" required>

        <div class="d-flex flex-row gap-2">
          <input type="text" name="AGAMA" class="form-control" placeholder="Agama" required>
          <input type="text" name="TEMPATLAHIR" class="form-control" placeholder="Tempat Lahir" required>
        </div>

        <div class="d-flex flex-row gap-2">
          <input type="number" name="TINGGIBADAN" class="form-control" placeholder="Tinggi Badan" onkeypress="validateNumberInput(event)" required>
          <input type="number" name="BERATBADAN" class="form-control" placeholder="Berat Badan" onkeypress="validateNumberInput(event)" required>
        </div>

        <input type="text" name="NAMAHUBUNGAN" class="form-control" placeholder="Nama Hubungan" required>
        
        <div class="d-flex flex-row gap-2">
          <input type="text" name="JENIS_DOKUMEN" class="form-control" placeholder="Jenis Dokumen" required>
          <input type="number" name="NOMOR_DOKUMEN" class="form-control" placeholder="Nomor Dokumen" onkeypress="validateNumberInput(event)" required>
        </div>

        <input type="text" name="NAMAHOBBY" class="form-control" placeholder="Nama Hobby" required>
        <input type="text" name="ALAMAT" class="form-control" placeholder="Alamat" required>

        <!-- <div class="d-flex flex-row justify-content-evenly align-items-center py-2" required>
          <label><p class="mb-0">Jenis Kelamin:</p></label>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_laki2" checked>
            <label class="form-check-label" for="jenis_kelamin_laki2">
              Laki-laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_perempuan">
            <label class="form-check-label" for="jenis_kelamin_perempuan" required>
              Perempuan
            </label>
          </div>
        </div>

        <input type="date" name="tanggal_lahir" class="form-control" required> -->

        <input type="text" name="USERNAME" class="form-control" placeholder="Username" required>
        <input type="password" name="PASSWORD" class="form-control" placeholder="Password" required>


      <button type="submit" class="btn btn-success mt-2">Register</button>




      </form>
    </main>
  </div>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
function validateNumberInput(event) {
  var key = event.key;
  if (key.length === 1 && !/^\d$/.test(key)) {
    event.preventDefault();
  }
}
</script>
</html>
