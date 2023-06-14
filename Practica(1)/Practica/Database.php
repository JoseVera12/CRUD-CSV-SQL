<?php
class Database
{/*Se encarga de la conexion */
    public static function conectar()
    {

        $driver = "mysql";
        $host = "127.0.0.1";
        $port = "3306";
        $user = "root";
        $password = "";
        $db = "OrdenadoresPractica";
        $dns = "$driver:dbname=$db;host=$host;port=$port";

        try {
            $gbd = new PDO($dns, $user, $password);
            echo "Conectado correctamente";
        } catch (PDOException $e) {
            echo "Error: fallo en la conexión" . $e->getMessage();
        }

        return $gbd;
    }

    public function getAll()
    {

        $sql = "SELECT * from ordenadores";
        $resultado = self::conectar()->query($sql);
        return $resultado;
    }


    //funcion que elimina un coche por id
    public static function delete($id)
    {

        $sql = "DELETE FROM ordenadores WHERE id=$id";
        self::conectar()->exec($sql); //ejecuta la sentencia sql pero no devuelve nada
    }

    public static function save($datos)
    {

        $sql = "INSERT INTO ordenadores (marca, modelo, precio, descripcion) VALUES ('$datos[0]', '$datos[1]', $datos[2], '$datos[3]')";
        self::conectar()->exec($sql);
    }

    public static function findById($id)
    {

        $sql = "SELECT  * from ordenadores where id=$id";
        $resultado = self::conectar()->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($datos){
        $sql = "UPDATE ordenadores SET marca = '$datos[1]', modelo = '$datos[2]', precio = $datos[3], descripcion = '$datos[4]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }
}
