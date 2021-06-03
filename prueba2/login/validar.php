<?php
include('db.php');
$Email=$_POST['E-mail'];
$usuario=$_POST['Usuario'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","admin123","admin@duoc.cl","loggin");

$consulta="SELECT*FROM Usuarios where Usuario='$usuario' and Usuario='$Usuario'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
