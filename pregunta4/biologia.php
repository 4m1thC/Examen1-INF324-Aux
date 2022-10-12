<?php include('header.php'); 

session_start();
if (!isset($_SESSION["usuario"])) {
  header("Location: /pregunta4/login.php");
}
?>

<div id="carrera">
    <h1>
        BIOLOGIA
    </h1>
    <center>
        <img src="images/biologia.png" height="200px" alt="">
    </center>

    <div id="descripcion">

        <div class="parrafo">

            <h1>MISIÓN</h1>
            <p>
                La Carrera de Biología de la Universidad Mayor de San Andrés, es líder en la generación y transmisión de conocimientos científicos y formación de recursos humanos altamente calificados y competitivos en el campo de las ciencias biológicas, con énfasis en la planificación y gestión de la conservación y aprovechamiento sostenible de los recursos de la biodiversidad y en la resolución de los problemas ambientales, respondiendo a su alto compromiso con el desarrollo económico-social sostenible de la región y del país.
            </p>
        </div>
        <div class="parrafo">
            <h1>VISIÓN</h1>
            <p>
                La Carrera de Biología de la Universidad Mayor de San Andrés es una institución de educación superior de gran dinámica y alta calidad académica y científica, cuyos contenidos académicos responden a la demanda social, acreditada nacionalmente, y ligada internacionalmente como líder en la generación de conocimientos científicos y formación de recursos humanos de calidad.
            </p>
        </div>
    </div>
</div>