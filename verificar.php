<?php
$dato;
session_start();

    if (!empty($_POST['nombre']) && !empty($_POST['pass'])) {
        $nom = $_POST['nombre'];
        $contra = $_POST['pass'];
        if($nom == "administrador" && $contra == "asd"){
            $_SESSION['nombre']= $nom;
            $_SESSION['pass']= $contra;
            
            header('Location: /dashboard.php');
            die();
        }elseif($nom == "cliente" && $contra == "123"){
            $_SESSION['nombre']= $nom;
            $_SESSION['pass']= $contra;
            echo "<script>alert('Usuario inicio sesion');</script>";
            header('Location: /index.php');
            die();
            
        }else{
            echo'<script type="text/javascript">alert("Datos incorrectos, verifique e intente nuevamente :)"); window.location.href="login.php"; </script>';
        } 
    } else {
        echo'<script type="text/javascript">alert("Alguno de los campos esta vacio verifique su entrada de datos :)"); window.location.href="login.php"; </script>';

    }


?>