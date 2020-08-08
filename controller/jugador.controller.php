<?php
require_once 'model/jugador.php';

class JugadorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Jugador();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/jugador/jugador.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Jugador();
        
        if(isset($_REQUEST['id_jugador'])){
            $alm = $this->model->Obtener($_REQUEST['id_jugador']);
        }
        
        require_once 'view/header.php';
        require_once 'view/jugador/login.php';
        require_once 'view/footer.php';
    }

    public function Jugar(){ 
        require_once 'view/header.php';
        require_once 'view/juego/buscaminas.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Jugador();
    
        $alm->username = $_REQUEST['username'];
        $alm->clave = $_REQUEST['clave'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: ?c=Jugador&a=Jugar');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_jugador']);
        header('Location: index.php');
    }
}