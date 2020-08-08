<?php
class Jugador
{
	private $pdo;
	
	public $id_jugador;
    public $username;
	public $clave;
	public $tiempo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT jugadores.username AS username, historial.puntuacion AS puntuacion, historial.tiempo AS tiempo
			 FROM jugadores INNER JOIN historial ON historial.id_jugador = jugadores.id_jugador");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Jugador()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT username FROM jugadores ORDER BY id_jugador DESC LIMIT 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Registrar(Jugador $data)
	{
		try 
		{
		$sql = "INSERT INTO jugadores (username) 
		        VALUES (?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->username
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}