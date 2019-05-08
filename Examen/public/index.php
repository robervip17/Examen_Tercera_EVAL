<?php
require "../src/conexion.php";
require "../src/Proyecto.php";
$e=new Proyecto();
$e->conectar();
$resultado=$e->listarProyectos();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>REGISTRO DE ASISTENTE</h2>
    <form  action="registro.php" method="post">
      Nombre<br>
      <input type="text" name="nombre" id="nombre" value="">
      <br>Apellidos<br>
      <input type="text" name="apellidos" id="apellidos" value="">
      <br>Precio por hora<br>
      <input type="text" name="precio_hora" id="precio_hora" value="">
      <br>Horas<br>
      <input type="text" name="horas" id="horas" value="">
      <br>Evento<br>
      <select class="" name="proyecto" id="proyecto">
        <?php
          foreach ($resultado as $proyecto) {
            $id=$proyecto["id"];
            $nombre=$proyecto["nombre"];
            echo "<option value='$id'>$nombre</option>";
          }
        ?>
     </select>
      <br><br>
      <input type="submit" name="" value="REGISTRAR" onclick="return comprobar();">
    </form>
  </body>
  <script type="text/javascript" src="./js/comprobar.js"></script>
</html>
