<?php
class Trabajador extends Conexion
{
  private $nombre;
  private $apellidos;
  private $precio_horas;
  private $horas;
  function __construct()
  {
  }
  public function comprobarCampos($post){
     $error=null;
     if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["horas"])||!isset($post["precio_hora"])){
       $error="";
     }elseif($post["nombre"]==""){
       $error="No has intoducido el nombre";
     }elseif($post["apellidos"]==""){
       $error="No has introducido el apellido";
     }elseif($post["precio_hora"]==""){
       $error="No has introducido precio por hora";

     }elseif($post["horas"]==""){
       $error="No has introducido las horas";
     }else{
       $error=false;
       $this->nombre=$post["nombre"];
       $this->apellidos=$post["apellidos"];
      $this->precio_horas=$post["precio_hora"];
       $this->horas=$post["horas"];
     }
     return $error;
  
   }
   public function insertarDatos()
   {
      $consulta="INSERT INTO trabajador (nombre, apellidos, precio_hora)
      VALUES ('$this->nombre', '$this->apellidos', $this->precio_horas)";
      $this->conexion->query($consulta);
    }
    public function ultimoRegistro()
    {
      $consulta="SELECT * FROM trabajador ORDER BY id DESC LIMIT 1";
      $resultado=$this->conexion->query($consulta);
      foreach($resultado as $value){
        $idTrabajador=$value["id"];
      }
      return $idTrabajador;
    }
    public function insertarProyecto($trabajador,$proyecto)
    {
      $consulta="INSERT INTO trabajador_proyecto (id_trabajador, id_proyecto, horas)
      VALUES ($trabajador, $proyecto, $this->horas)";
      $this->conexion->query($consulta);
    }
}
 ?>
