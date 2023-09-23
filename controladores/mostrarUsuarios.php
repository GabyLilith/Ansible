<?php
    include("../../persistencia/UsuarioDao.php");

    $usuarioDao= new UsuarioDao();
    $csql = "select * from usuario";
    $result = $usuarioDao->consulta($csql);


    echo "<h2> Lista de usuarios </h2>";
    echo '
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
            ';

    foreach($result as $fila){
        echo "<tr>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['alias']."</td>";
        echo "<td>".$fila['contrasena']."</td>";
        echo "</tr>";
    }
    echo "</tbody> </table>"
?>