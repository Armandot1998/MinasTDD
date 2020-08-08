<?php
class Database
{
    public static function StartUp()
    {
        $Host = "localhost";
        $BaseDatos = "MinasBDD";
        $Usuario = "postgres";
        $Clave = "12345";
        $Puerto = "5432";

        $pdo =  new PDO("pgsql:host=$Host;port=$Puerto;dbname=$BaseDatos;", $Usuario, $Clave);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
