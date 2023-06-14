<?php
/*Require_once es la manera de importar en php */
require_once('Database.php');
$database = new Database();
$resultado = $database->getAll();
$cabecera = ['id', 'marca', "modelo", "precio", "descripcion"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="create.php">Crear</a>
    <table>
        <thead>
            <?php
            echo "<tr>";
            echo '<th>id</th>';
            echo '<th>marca</th>';
            echo '<th>modelo</th>';
            echo '<th>precio</th>';
            echo '<th>descripcion</th>';
            echo '<th>Acciones</th>';
            echo '</tr>';
            ?>
        </thead>
        <tbody>
            <?php
            
            foreach ($resultado as $linea) {/*solo sale uno porque arriba en el select solo hay un id */
                echo '<tr>';
                echo '<td>' . $linea['id'] . "</td>";
                echo '<td>' . $linea['marca'] . "</td>";
                echo '<td>' . $linea['modelo'] . "</td>";
                echo '<td>' . $linea['precio'] . "</td>";
                echo '<td>' . $linea['descripcion'] . "</td>";
                echo "<td> <a href='edit.php?id=".$linea['id']."'>Editar</a>
                <a href='delete.php?id=".$linea['id']."'>Eliminar</a>
                </td>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>