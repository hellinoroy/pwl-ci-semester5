<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login - Undira</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
</style>


<!-- Mengecek jika ada response dari controller register -->

<!-- ganti input jadi input-group bootstrap -->
<body class="vh-100">
  <div class="w-100 h-100 d-flex align-items-center justify-content-center position-relative" id="tint">
    
    <a href="/" class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-0-hover position-absolute top-0 end-0 m-5"><button type="button" class="btn btn-primary p-3">< Kembali Ke Home</button></a>

    <div>

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

    
    </div>

    <main class="container d-flex flex-column p-3 rounded bg-secondary-subtle" style="width: 500px">

      <img src="<?php echo base_url('images/logoUndira.png'); ?>" class="img-fluid mb-3">

      <form action="<?= base_url('/login');?>" method="POST" class="d-flex flex-column d-flex gap-2">
        <div class="input-group mb-3">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <input type="text" name="USERNAME" class="form-control" placeholder="Username">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text"><i class="fas fa-key"></i></span>
          <input type="password" name="PASSWORD" class="form-control" placeholder="Password">
        </div>

      <button type="submit" class="btn btn-success mt-2">Login</button>

      <div class="container d-flex flex-row align-items-center justify-content-evenly my-2">
        <a href="#" class="link-warning  link-underline-opacity-0 link-underline-opacity-0-hover ">Lupa Password ?</a>
        <a href="/register" class="link-warning  link-underline-opacity-0 link-underline-opacity-0-hover ">Buat Akun Baru</a>
      </div>


      </form>
    </main>



  </div>




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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
