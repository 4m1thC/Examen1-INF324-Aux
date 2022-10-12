<?php include('header.php') ?>

<body>

    <div class="container">
        <br><br>
        <h3 class="text-center text-uppercase"> <b> Lista de Personas </b></h3>

        <br>
        <table class="table table-dark table-striped text-center">
            <thead class="text-uppercase">
                <tr>
                    <th scope="col">CI</th>
                    <th scope="col">Nombre completo</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Departamento</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($personas as $persona) {
                    echo "<tr>";
                    echo "<td>" . $persona->ci . "</td>";
                    echo "<td>" . $persona->nombre_completo . "</td>";
                    echo "<td>" . $persona->fecha_nacimiento . "</td>";
                    echo "<td>" . $persona->departamento . "</td>";
                ?>
                    <td> <a href="editar/<?= $persona->ci ?>" class="btn btn-secondary btn-block" role="button">Editar</a></td>
                    <td> <a href="eliminar/<?= $persona->ci ?>" class="btn btn-danger btn-blocks" role="button">Eliminar</a></td>
                <?php
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="crear" class="btn btn-dark btn-lg" role="button" aria-pressed="true">Nueva Persona</a>

    </div>
    </form>
</body>

</html>