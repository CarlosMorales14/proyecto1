

<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<style>
.gradient-custom-2 {
background: #fccb90;
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>    
</head>

<body style="background-color:rgb(248,244,236);">
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Por favor Inicie sesión</h2>
            <form method="POST" action="verificar.php">
              <!-- 2 column grid layout with text inputs for the first and last names -->

              <!-- Email input -->
              <div>
                <input type="text" name="nombre" class="form-control" />
                <label class="form-label" for="nombre">Usuario</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" name="pass" class="form-control" />
                <label class="form-label" for="pass">Contraseña</label>
              </div>

              <!-- Checkbox -->

              <!-- Submit button -->
              <button type="submit" name="ingresar" class="btn btn-primary btn-block mb-4">
                Iniciar Sesión
              </button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://dciittg.com/static/img/tecnm.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>

</section>
</body>

</html>