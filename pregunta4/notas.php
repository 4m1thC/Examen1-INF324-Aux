<?php
include('header.php');
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: /pregunta4/login.php");
} elseif ($_SESSION["rol"] != "administrador") {
    header("Location: /pregunta4/index.php");
} else {
    include "login/conexion.php";
    $sql = "select departamento,AVG(ins.nota_final) media
    from persona per, inscripcion ins where per.ci=ins.ci_estudiante GROUP BY per.departamento;";
    $departamentos = array('Chuquisaca', 'La Paz', 'Cochabamba', 'Oruro', 'Potosí', 'Tarija', 'Santa Cruz', 'Beni', 'Pando');
    $resultado = mysqli_query($con, $sql);
}
?>

<div class="contenido_b">
    <h1>PANEL DE ADMINISTRADORES</h1>
    <center>
        <table>
            <tr>
                <td>Departamento</td>
                <td>Promedio de notas</td>
            </tr>
            <?php
            while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $departamentos[intval($fila['departamento'])-1] . "</td>";
                echo "<td>" . $fila['media'] . "</td>";
                echo  "</tr>";
            }
            ?>
        </table><br>
    </center>

</div>

</html>