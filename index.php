<?php 
session_start();

if (!isset($_REQUEST['ok'])&&(empty($_SESSION["nombre"])||$_SESSION["nombre"]=="administrador")) {
  header("location: /login.php");
}

?>
<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tienda Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .logo img {

      max-width: auto;
      height: auto;

    }
    .box {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    </style>
</head>
<header>
<nav class="navbar navbar-expand-lg" style="background-color:rgb(248,244,236);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo"Tienda online"; ?> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Acerca de</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="util.php">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <form class="d-flex p-3"> <!-- carrito form-->
                        <a href="/carrito.php" type="button" class="btn btn-primary">
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                          </a>
                    </form>
    </div>
  </div>
</nav>
</header>

<body>

<div>
  <h1 class=" container border border-dark box mt-4" style="background-color:rgb(248,244,236);">Productos Destacados<br></h1>
  <div class="container overflow-hidden text-center align-items-center mt-5">
  <div class="row gy-5 align-items-center">
    <div class="col-6 box">
      <div class="">
      <div class="card" style="background-color:rgb(248,244,236);" style="width: 28rem;">
        <img src="/img/google.jpg" class="box img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">Google Pixel 6</h5>
          <h3 class="card-text">Precio: $13,199.00</h3>
          <form  method="POST"> 
            <input type="hidden" name="producto" value="Google Pixel 6">
            <input type="hidden" name="precio" value="13199.99">
            <div class="container align-items-center">
            <input class="input mt-3" type="number" name="cant" value="1" style="width:60px; height: 40px;">
            </div>
            <input class="btn btn-warning mt-3" type="submit" value="Agregar al carrito" name="btnCarrito">
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="col-6 box">
      <div class="">
      <div class="card" style="background-color:rgb(248,244,236);" style="width: 28rem;">
      <img src="/img/iphone.jpg" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">Iphone 14 Pro MAX</h5>
          <h3 class="card-text">Precio: $31,999.00</h3>
          <form method="POST"> 
            <input type="hidden" name="producto" value="Iphone 14 Pro MAX">
            <input type="hidden" name="precio" value="31999.99">
            <div class="container align-items-center ">
            <input class="input mt-3" type="number" name="cant" value="1" style="width:60px; height: 40px;">
            </div>
            <input class="btn btn-warning mt-3" type="submit" value="Agregar al carrito" name="btnCarrito">
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="col-6 box">
      <div class="">
      <div class="card" style="background-color:rgb(248,244,236);" style="width: 28rem;">
      <img src="/img/huawei.jpg"  class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">Huawei P50 PRO</h5>
          <h3 class="card-text">Precio: $31,999.00</h3>
          <form  method="POST"> 
            <input type="hidden" name="producto" value="Huawei P50 PRO">
            <input type="hidden" name="precio" value="31999.99">
            <div class="container align-items-center ">
            <input class="input mt-3" type="number" name="cant" value="1" style="width:60px; height: 40px;">
            </div>
            <input class="btn btn-warning mt-3" type="submit" value="Agregar al carrito" name="btnCarrito">
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="col-6 box">
      <div class="">
      <div class="card" style="background-color:rgb(248,244,236);" style="width: 28rem;">
      <img src="/img/moto.png"  class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">Motorola EDGE</h5>
          <h3 class="card-text">Precio: $10,000.00</h3>
          <form  method="POST"> 
            <input type="hidden" name="producto" value="Motorola EDGE">
            <input type="hidden" name="precio" value="10000.00">
            <div class="container align-items-center ">
            <input class="input mt-3" type="number" name="cant" value="1" style="width:60px; height: 40px;">
            </div>
            <input class="btn btn-warning mt-3" type="submit" value="Agregar al carrito" name="btnCarrito">
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="col-6 box">
      <div class="">
      <div class="card" style="background-color:rgb(248,244,236);" style="width: 28rem;">
      <img src="/img/oppo.png"  class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">Oppo RENO 7</h5>
          <h3 class="card-text">Precio: $8,000.00</h3>
          <form method="POST"> 
            <input type="hidden" name="producto" value="Oppo RENO 7">
            <input type="hidden" name="precio" value="8000.00">
            <div class="container align-items-center ">
            <input class="input mt-3" type="number" name="cant" value="1" style="width:60px; height: 40px;">
            </div>
            <input class="btn btn-warning mt-3" type="submit" value="Agregar al carrito" name="btnCarrito">
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="col-6 box">
      <div class="">
      <div class="card" style="background-color:rgb(248,244,236);" style="width: 28rem;">
      <img src="/img/x.jpg"  class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xiaomi POCO X4 PRO</h5>
          <h3 class="card-text">Precio: $7,000.00</h3>
          <form  method="POST"> 
            <input type="hidden" name="producto" value="Xiaomi POCO X4 PRO">
            <input type="hidden" name="precio" value="7000.00">
            <div class="container align-items-center ">
            <input class="input mt-3" type="number" name="cant" value="1" style="width:60px; height: 40px;">
            </div>
            <input class="btn btn-warning mt-3" type="submit" value="Agregar al carrito" name="btnCarrito">
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</body>
</html>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
<?php

if (isset($_REQUEST['btnCarrito'])) {

    $producto = $_REQUEST['producto'];
    $cantidad = $_REQUEST ['cant'];
    $precio = $_REQUEST['precio'];


if (isset($_SESSION['carrito'][$producto]['cant'])) {

  $_SESSION['carrito'][$producto]['cant'] = $_SESSION['carrito'][$producto]['cant']+$cantidad;
  $_SESSION['carrito'][$producto]['precio']= $precio;
header("location: /index.php");


}else {

  $_SESSION['carrito'][$producto]['cant']= $cantidad;
  $_SESSION['carrito'][$producto]['precio']= $precio;

  header("location: /index.php");


}



}

?>


