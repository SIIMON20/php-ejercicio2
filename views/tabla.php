<?php
require_once("../models/classAlumno.php");
$alumno = new Alumno();
$datos = $alumno -> consultarAlumno();

print("<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css'>


    <title>Document</title>
</head>
<body>
    <form action='../controller/controlador.php' method='request'>
    <input type='submit' id='btn-Alumno' name='btn-Alumno' value='Añadir'>
    </form>
    <table id='example' class='' style='width:100%'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Identificacion</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Programa</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>");
        while($data = $datos->fetch(PDO::FETCH_ASSOC)){
            print ('<tr>
                <td>'. $data['Nombre'].'</td>
                <td>'. $data['ID'].'</td>
                <td>'. $data['Correo'].'</td>
                <td>'. $data['Telefono'].'</td>
                <td>'. $data['Programa'].'</td>
                <td>
                <a href="../controller/controlador.php?id='. $data['ID'].'&value=borra"><input type="button" value="Borrar"/></a>
                </td>
                <td><a href="../controller/controlador.php?id='. $data['ID'].'&value=actualiza"><input type="button" value="Actualizar"/></a></td>');
        }
        
print("
    <form action='navegacion.php'><input type='submit' id='Volver' name='BorrarAlumno' value='Volver a la barra de inicio'></form>
    <a href='#'></a>
</body>
</html>

<script>
        function validar(id){
            var dato = confirm('¿Seguro que quiere actualizar el registro.?' + id);
            if(!dato){
                window.location.href='../views/tabla.php';
            }else{
                window.location.href='../controller/controlador.php?id'+ id + '&value=Actualiza';
            }
        }
</script>

<script>
        function borrar(id){
            var dato = confirm('¿Borrar este registro.?' + id);
            if(!dato){
                window.location.href='../views/tabla.php';
            }else{
                window.location.href='../controller/controlador.php?id'+ id + '&value=Borra';
            }
        }
</script>


<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script type='text/javascript' charset='utf8' src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js'></script>
<script>
    $(document).ready( function () {
$('#example').DataTable();
} );
</script>
"); 
?>