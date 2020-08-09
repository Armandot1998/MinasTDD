<h1 class="page-header">Busca Minas - PHP - Postgres</h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
        <h3 class="text-primary">Jugador:&nbsp;</h3>
		</div>
		<div class="col-md-11">
        <h3 class="text-muted"><?php foreach($this->model->Jugador() as $r): echo $r->username;  endforeach;?></h3>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" align="center">
        <div id="tablero"></div>
        <div id="estado"><div>Nº de minas restante: <span id="numMinasRestantes"></sapn></div></div>
		</div>
	</div>
</div>
<form action="./controller/score.php" method="post" >
    <div class="text-right">
        <button class="btn btn-success">Nueva Partida</button>
        <a class="btn btn-default" href="http://localhost/MinasTDD/">Salir</a>
    </div>
</form>


