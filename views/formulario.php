<?php

require_once ("../../models/classAlumno.php");
$id = $_REQUEST['id'];
$alumno = new Alumno();
$datos = $alumno -> consultarAlumnoxId($id);
while($data = $datos -> fetch(PDO::FETCH_ASSOC)){

  
print'
<!DOCTYPE html>
<html lang="es">

<form method="request" action="tabla.php"
style="width: 100%; max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center;">

<label>Escriba su nombre</label>
<input type="hidden" value="'.$data['nombre'].'" class="inputForm" id="ActNameAlumno" name="ActNameAlumno" placeholder="Nombre">
<label>Identificacion</label>
<input type="hidden" value="'.$data['id'].'" class="inputForm" id="ActIdAlumno" name="ActIdAlumno" placeholder="id">
<label>Escriba su coreo electronico</label>
<input type="hidden" class="inputForm" id="ActCorreoAlumno" name="ActCorreoAlumno" placeholder="correo">
<label>Telefono</label>
<input type="hidden" class="inputForm" name="telefono" placeholder="Tel">
<label>Programa</label>
<input type="text" class="inputForm" name="programa" placeholder="progama de formacion">
<button type="submit" class="btn btn-primary"> Enviar </button>
<form>

<body>
    
</body>
</html>
';} 
?>