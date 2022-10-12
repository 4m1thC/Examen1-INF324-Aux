<?php 
session_start();
if (!isset($_SESSION["usuario"])) {
  header("Location: /pregunta4/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/carreras.css">
    <link rel="stylesheet" href="styles/notas.css">
    
    <title>Facultad</title>
</head>

<body>


    <header>
        <nav>
            <ul>
                <li style="float: left;"><a href="index.php">
                    <img src="images/facultad.jpg" height="30px" alt="">
                    Principal
                </a></li>
                <li><a href="biologia.php">Biologia</a></li>
                <li><a href="fisica.php">Fisica</a></li>
                <li><a href="matematica.php">Matematica</a></li>
                <li class="salir"><a href="/pregunta4/login/log_out.php">Cerrar sesion</a></li>

                
            </ul>
        </nav>

    </header>