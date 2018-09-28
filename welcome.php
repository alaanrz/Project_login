<?php
session_start();
if($_SESSION['logueado']==true){
 echo "</br>";
 echo 'Bienvenido/a,'.$_SESSION['username'];
 echo '</br>';
 echo 'Horario de conexion:'.$_SESSION['time'];
 echo '</br>';
 echo '<a href="logout.php">Logout</a>';
 echo '</br>';
 echo "<h1 style='text-align:center'>Menú de Opciones</h1>";
}
else {
    header("location:index.html");
    exit();
}
?>