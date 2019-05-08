<?php
require "../src/conexion.php";
require "../src/trabajador.php";
$a=new Trabajador();
echo "Todo esta correcto!";
$error=$a->comprobarCampos($_POST);
if($error){
  echo $error;
}else{
  $a->conectar();
  $a->insertarDatos();
  $idTrabajador=$a->ultimoRegistro();
  $a->insertarProyecto($idTrabajador,$_POST["proyecto"]);
}
?>
<html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
