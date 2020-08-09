<?php
include_once '../config/db.php';
$conexion=conexion();

$sql="UPDATE historial SET npartidas = 
((SELECT npartidas FROM historial ORDER BY id_historial DESC LIMIT 1)+1)
WHERE id_historial = (SELECT id_historial FROM historial ORDER BY id_historial 
DESC LIMIT 1)";
$result=pg_query($conexion,$sql);

echo '<script> location.href="http://localhost/MinasTDD/?c=Jugador&a=Jugar";</script>';
?>