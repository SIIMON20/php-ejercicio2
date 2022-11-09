<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../controller/controlador.php" method="post" style='width: 100%; max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center;'>
        Nombre <input type="text" name="newNameAlumno" id="newNameAlumno">
        Identificación <input type="number" name="newId" id="newId">
        Correo <input type="email" name="newEmail" id="newEmail">
        Telefono <input type="number" name="newNumber" id="newNumber">
        Programa <input type="text" name="newPrograma" id="newPrograma">
        <input type="submit" id="btnAddAlumno" name="btnAddAlumno" value="Añadir">
    </form>
</body>
</html>