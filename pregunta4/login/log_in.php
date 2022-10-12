<?php
include "conexion.php";
if(isset($_GET['usuario'])){
    
    $sql= "select * from acceso ac, persona pe where ac.ci=pe.ci and ac.usuario='".$_GET['usuario']."' and ac.password='".$_GET['password']."'";
    $resultado=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    if($row==null){
        header("Location: /pregunta4/login.php");
        die();
        mysqli_close($con);
    }else{
        session_start();
        $_SESSION["usuario"]=$_GET['usuario'];
        $_SESSION["pass"]=$_GET['password'];
        $_SESSION["nombre"]=$row['nombre_completo'];
        $_SESSION["rol"]=$row['rol'];
        if($_SESSION["rol"]=="administrador"){
            header("Location: /pregunta4/notas.php");
        }else{
            header("Location: /pregunta4/index.php");
        }
    }
}else{
    header("Location: /pregunta4/login.php");
}
?>