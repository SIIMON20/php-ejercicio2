<?php 

class Alumno{
    public $nombre;
    public $ID;
    public $correo;
    public $telefono;
    public $programa;

    public function AddAlumno($name,$Id,$correo,$Tel,$program){
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql= "insert into classalumno (Nombre, ID, Correo, Telefono, Programa) values(?,?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($name,$Id,$correo,$Tel,$program));
        $conn = null;
        print("El alumno $name con Id $Id, $correo, $Tel del programa $program ha sido agregado" );
        print("<a href='../views/tabla.php'>Regresar</a>");
    }

    public function borrarAlumno($ID){require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from classalumno where ID=?";
        $consulta = $conn -> prepare($sql);
        $consulta->execute((Array($ID)));
        $conn = null;
        require_once("../dao/conectar.php");
        header('location:../views/tabla.php');
    }

    public function ActualizarAlumno($name,$Id,$correo,$Tel,$program){
        require_once("../dao/concetar.php");
        $conn = connect();
        $sql = "UPDATE alumno SET Nombre = ?, Coreo=?, Telefono=?, Programa=?
        WHERE ID=?,";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($name,$Id,$correo,$Tel,$program));
        $conn=null;
        print("El alumno $name con identificacion $Id, correo $correo, con numero de contacto $Tel ha sido Actualizado.....");
        print("<br><a href='../views/tabla.php'>Regresar</a>");
    }

    public function consultarAlumno(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from classalumno";
        $consulta = $conn -> prepare($sql);
        $consulta->execute();
        return $consulta;
        $conn = null;
    }
    }

?>
