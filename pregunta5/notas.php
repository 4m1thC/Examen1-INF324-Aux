<?php
include('header.php');
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: /pregunta5/login.php");
} elseif ($_SESSION["rol"] != "administrador") {
    header("Location: /pregunta5/index.php");
} else {
    include "login/conexion.php";
    $sql = "select CASE per.departamento 
    WHEN '01' then 'Chuquisaca'
    WHEN '02' then 'La Paz'
    WHEN '03' then 'Cochabamba'
    WHEN '04' then 'Oruro'
    WHEN '05' then 'Potosí'
    WHEN '06' then 'Tarija'
    WHEN '07' then 'Santa Cruz'
    WHEN '08' then 'Beni'
    WHEN '09' then 'Pando'
    else 'null'
    END
    departamento,AVG(ins.nota_final) media
    from persona per, inscripcion ins where per.ci=ins.ci_estudiante GROUP BY per.departamento;";
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
                echo "<td>" . $fila['departamento'] . "</td>";
                echo "<td>" . $fila['media'] . "</td>";
                echo  "</tr>";
            }
            ?>
        </table><br>
    </center>

</div>

</html>