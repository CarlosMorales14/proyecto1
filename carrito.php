<html>
    <head>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body style="background-color:rgb(248,244,236);">
<br>

<?php 
session_start();

$subtot =0;
if (isset($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $indice => $valores) {
?>

  <div class="">
<?php 
        echo "<h7 class='row ms-4'>Producto: ".$indice."</h7>";
        $subtot += $valores["cant"]*$valores["precio"];
?>
<?php 

foreach ($valores as $key => $value) {
    echo "<h8 class='row ms-4'>".$key.": ".number_format($value,0)."</h8> ";
}
echo "<div class=' ms-4'>";
echo "<a type='button' class='btn btn-secondary' href='carrito.php?item=$indice' > eliminar item </a>";
echo "</div>";
?>
    <hr>
<?php    
    }
?>
</div>
</div>
<div class='text-center align-items-center mt-5'>
<a href="index.php?ok=true" class="btn btn-warning mt-3"> Regresar al menú de compras </a>  
<a href="carrito.php?vaciar=true" class="btn btn-warning mt-3"> Vaciar Carrito </a>  
</div>
<?php 
}else {
    echo "<h4 class='mr-1'>En este momento no hay nada por mostrar en el carrito</h4>";
    ?>
    <a href="index.php" class="btn btn-warning mt-3  "> Regresar al menú de compras </a>  
    <?php

}
if (isset($_REQUEST["vaciar"])) {
    unset($_SESSION['carrito']);
    header("location: /carrito.php");

}
if (isset($_REQUEST["item"])) {
    $p=$_REQUEST["item"];
    unset($_SESSION['carrito'][$p]);
    echo "<script>alert('Se elimino el producto: $p');</script>";
    header("location: /carrito.php");

}
?>


<?php 
    echo "<h4 class='text-center align-items-center mt-4'>Subtotal: $ ".number_format($subtot,2)."</h4>";   
    echo "<h4 class='text-center align-items-center'>IVA: $ ".number_format(($subtot*0.16),2)."</h4>";    
    echo "<h4 class='text-center align-items-center'>Total: $ ".number_format(($subtot*1.16),2)."</h4>";    
?>
</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

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