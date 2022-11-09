<?php 
include_once("../models/classAlumno.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id']= 0;
}
    if(!isset($_REQUEST['alumno'])){

        if(isset($_REQUEST['btn-Alumno'])){
                
            header("location:../views/alumno/addAlumno.php");
        }

        elseif(isset($_REQUEST['id'])&&($_REQUEST['value']=='borra')){
            $id=$_REQUEST['id'];
            $alumno= new Alumno();
            $alumno-> borrarAlumno($id);
        }
        elseif(isset($_REQUEST['btn-Alumno'])){
            header('location:../views/alumno/addAlumno.php');
        }
        elseif(isset($_REQUEST['btnAddAlumno'])&& ($_REQUEST['btnAddAlumno'] !=null)){
            $name = $_REQUEST['newNameAlumno'];
            $Id = $_REQUEST['newId'];
            $correo = $_REQUEST['newEmail'];
            $Tel = $_REQUEST['newNumber'];
            $program = $_REQUEST['newPrograma'];
            $alumno = new Alumno();
            $alumno -> AddAlumno($name,$Id,$correo,$Tel,$program);
        }
        elseif(($_REQUEST['id']!= null)&&($_REQUEST['value']=='Actualiza')){
            header('location:../views/alumno/formualrio.php?id='.$_REQUEST['id']);
        }elseif(isset($_POST['btnActAlumno'])&&($_REQUEST["btnActAlumno"]!=null)){
            $name = $_REQUEST['ActNameAlumno'];
            $Id = $_REQUEST['ActIdAlumno'];
            $correo = $_REQUEST['ActCorreoAlumno'];
            $Tel = $_REQUEST['ActTelAlumno'];
            $program = $_REQUEST['ActProgramAlumno'];
            $alumno = new Alumno();
            $alumno -> ActualizarAlumno($name,$Id,$correo,$Tel,$program);
        }

        elseif(($_REQUEST['id'] !=null)&&($_REQUEST['value']=='Actualiza')){
            hader('location:..views/alumno/formulario.php?id='.$_REQUEST['id']);
        }
    }
    elseif($_REQUEST['alumno']==1){
        header("location:../views/tabla.php");
    }
?>
