<?php
//1. Recoger el id de la url. Ver si existe y en tal caso recogerlo.
$id = $_GET['id'];

//2. Importar la clase 'database.php'.
require_once('Database.php');

//3. Necesito ejecutar la funcion 'delete' que esta dentro del fichero 'database.php'.
$ordenador = Database::findById($id);

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
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $ordenador['id'] ?>">
        <input type="text" name="marca" value="<?php echo $ordenador['marca'] ?>" placeholder="Actualiza una marca">
        <input type="text" name="modelo" value="<?php echo $ordenador['modelo'] ?>" placeholder="Actualiza un modelo">
        <input type="text" name="precio" value="<?php echo $ordenador['precio'] ?>" placeholder="Actualiza un precio">
        <input type="text" name="descripcion" value="<?php echo $ordenador['descripcion'] ?>" placeholder="Actualiza una descripcion">
        <button type="submit">Enviar</button>
    </form>

</body>

</html>