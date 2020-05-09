<h1>Confirmacion de datos</h1>
<?php
$nombre=$_POST['txtnombre'];
$email=$_POST['txtemail'];
$telefono=$_POST['txtelefono'];
$f_nac=$_POST['dtfecha'];

$fecha_nacimiento = new DateTime($f_nac);
$hoy=new DateTime();
$edad = $hoy->diff($fecha_nacimiento);
echo"hola ",$nombre,": Por la informacion proporcionada sabemos que usted tiene ",$edad->y," años y que su  numero telefonico es ",$telefono;
?>