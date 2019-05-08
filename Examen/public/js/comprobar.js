function comprobar(){
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let precio_hora=document.getElementById('precio_hora').value;
  let error=true;

  if(nombre==""){
    alert("No has introducido el nombre");
    error=false;
  }
  if (apellidos=="") {
    alert("No has introducido el apellido");
    error=false;
  }
  if (precio_hora=="") {
    alert("No has introducido el precio por hora");
    error=false;
  }
  if (error==false) {
    return false;
  }
}
