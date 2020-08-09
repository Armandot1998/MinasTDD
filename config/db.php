<?php 
	function conexion()
	{
		return $conexion=pg_connect("host=localhost port=5432 dbname=MinasBDD user=postgres password=12345");
	}

 ?>