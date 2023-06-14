<?php

    echo 'Hemos recogido el valor del id : ' . $_GET['id'];

    //1. Recoger el id de la url,  ver si existe y en tal caso recogerlo.
    $id = $_GET['id'];



    //2. Importar la clase Database.php
    require_once('Database.php');

    //3. Invocar la funcion delete de la clase Database.php
    Database::delete($id);  

    //4. Retornar al index.php para ver los cambios
    header('Location: index.php');

?>

