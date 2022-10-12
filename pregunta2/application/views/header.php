<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facultad</title>

    <style type="text/css">
        /*estilos del header*/
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
            position: fixed;
            right: 0%;
            top: 0;
            height: 50px;
            width: 100%;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }


        li a:hover {
            background-color: #111111;
        }

        body {
            margin: 0%;
            padding: 0%;
        }

        /* estilos del index */
        #main {
            padding: 0%;
            margin-top: 50px;
            height: 100vh;
            background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(141, 153, 174, 1) 100%);
        }

        #lista {
            display: grid;
            grid-gap: 1rem;
            grid-template-columns: 33% 33% 33%;
            grid-template-rows: 150px 150px;
        }

        .parrafo {
            margin: 50px;
            text-align: center;

        }

        .parrafo img {
            height: 100px;
        }

        /* estilos de las carreras */
        #carrera {
            padding: 0%;
            margin-top: 50px;
            height: 100vh;
            background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(141, 153, 174, 1) 100%);
        }

        #descripcion {
            display: grid;
            grid-gap: 1rem;
            grid-template-columns: 50% 50%;
            grid-template-rows: 150px 150px;
        }

        .parrafo {
            margin: 50px;
            text-align: center;
        }

        h1 {
            text-align: center;
        }
    </style>

</head>

<body>


    <header>
        <nav>
            <ul>
                <li style="float: left;"><a href="<?php echo base_url(); ?>">
                        <img src="https://i.ytimg.com/an/ziXp6vAr6dQMfgz_dy_hNA/featured_channel.jpg?v=5ecd7a22" height="30px" alt="">
                        Principal
                    </a></li>
                <li><a href="<?php echo base_url(); ?>biologia">Biologia</a></li>
                <li><a href="<?php echo base_url(); ?>fisica">Fisica</a></li>
                <li><a href="<?php echo base_url(); ?>matematica">Matematica</a></li>
            </ul>
        </nav>

    </header>