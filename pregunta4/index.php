<?php include('header.php');
session_start();
if (!isset($_SESSION["usuario"])) {
  header("Location: /pregunta4/login.php");
}
?>
<div id="main">

  <h1>BIENVENIDO</h1>
  <center>
    <h4><?php echo $_SESSION["nombre"]; ?></h4>
  </center>

  <div id="lista">
    <div class="parrafo">
      <img src="images/estudiar.png" alt="">
      <h1>PREUNIVERSITARIO</h1>
      <p>
        El Curso Pre universitario tiene como objetivo, nivelar y reforzar los conocimientos necesarios en áreas que exige la carrera de interés, existen dos etapas para tomar estos cursos: Prueba de suficiencia académica y Curso Preuniversitario.
      </p>
    </div>
    <div class="parrafo">
      <img src="images/licenciatura.png" alt="">
      <h1>LICENCIATURA</h1>
      <p>
        EL objetivo principal es la formación de profesionales de alta calidad, con conocimientos, destrezas y habilidades que hacen posible su inserción creativa en la sociedad, preparados para impulsar y promover la innovación científica y tecnológica.
      </p>
    </div>
    <div class="parrafo">
      <img src="images/maestria.png" alt="">
      <h1>MAESTRÍA</h1>
      <p>
        La maestría en ciencias tiene como finalidad la de otorgar al graduado las condiciones para desarrollar estudios que demuestren el dominio de los instrumentos conceptuales y metodológicos esenciales en el área de formación académica.
      </p>
    </div>
  </div>
</div>