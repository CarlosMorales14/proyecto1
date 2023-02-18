<?php 
session_start();
if (empty($_SESSION["nombre"])||$_SESSION["nombre"]=="cliente") {
  header("location: /login.php");
}
?>
<?php
function getArray (){
    mt_srand (time());
    $dataPoints = array( 
        array("label"=>"Samsung","y"=>mt_rand(0,100)),
        array("label"=>"Xiaomi", "y"=>mt_rand(0,100)),
        array("label"=>"Apple", "y"=>mt_rand(0,100)),
        array("label"=>"Google","y"=>mt_rand(0,100)),
        array("label"=>"Huawei", "y"=>mt_rand(0,100)),
        array("label"=>"Oppo", "y"=>mt_rand(0,100)),
        array("label"=>"Motorola", "y"=>mt_rand(0,100)),
        array("label"=>"Otros", "y"=>mt_rand(0,100)),
     
    );
    return $dataPoints;
}
function getNames(){
  return ["Samsung","Xiaomi","Apple","Google","Huawei","Oppo","Motorola", "Otros"];
}
function getValues(){
  mt_srand (time());
  return [mt_rand(0,1000),mt_rand(0,1000),mt_rand(0,1000),mt_rand(0,1000),mt_rand(0,1000),mt_rand(0,1000),mt_rand(0,1000),mt_rand(0,1000)];
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ADMIN Dashboard
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
      <div class="container">
        <div class="row justify-content-center align-items-center"> 
            <a href="" class="simple-text">
              <i  class="nc-icon nc-badge">
              </i>  Administrador
            </a>
          </div>
        </div>
      </div>
      

      <div class="sidebar-wrapper" >
        <ul class="nav">
          <li class="active ">
            <a href="">
              <i class="nc-icon nc-bank"></i>
              <p>Clientes</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-money-coins"></i>
              <p>Recompensas</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-circle-10"></i>
              <p>Perfil</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel " style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-atom"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Mas Acciones</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Clientes</a>
                  <a class="dropdown-item" href="#">Acerca de</a>
                  <a class="dropdown-item" href="util.php">Cerrar Sesión</a>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12 position-sticky">
            <!--<h3 class="description">Your content here</h3>-->
            <div class="container">
             <div class="row justify-content-center align-items-center">

                  <div class="col">
                  <div id="chart" style="height: 400px; width: 100%;"></div>
                  </div>
                  <div>
                  <div class="col">
                  <canvas id="myChart"style="height: 300px; width: 90%;"></canvas>
                  </div>
                  </div>
            <?php echo $_SESSION["nombre"]=="cliente";?>

          </div>
        </div>
      </div>

    </div>
  </div>

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

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  var x= new Chart(ctx, {
    type: 'line',
    data: {
      labels: <?php echo json_encode(getNames(), JSON_NUMERIC_CHECK); ?>,
      datasets: [{
        label: 'Marcas mas vendidas ultimo año',
        borderColor: '#76d7c4 ',
        backgroundColor: ' #76d7c4 ',
        fill: false,
        data: <?php echo json_encode(getValues(), JSON_NUMERIC_CHECK); ?>,
        borderWidth: 2
      }]
    },
  
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
x.defaults.backgroundColor = '#9BD0F5';  
</script>
<script>
window.onload = function () {
 
 var chart = new CanvasJS.Chart("chart", {
   animationEnabled: true,
   exportEnabled: true,
   title:{
     text: "Gráfica Marcas de celulares mas vendidos en en mes"
   },
   subtitles: [{
     text: ""
   }],
   data: [{
     type: "pie",
     showInLegend: "true",
     legendText: "{label}",
     indexLabelFontSize: 16,
     indexLabel: "{y}",
     yValueFormatString: "#",
     dataPoints: <?php echo json_encode(getArray(), JSON_NUMERIC_CHECK); ?>
   }]
 });
 chart.render();
  
 }
</script>


