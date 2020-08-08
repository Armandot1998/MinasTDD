<h1 class="page-header">Busca Minas - PHP - Postgres</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Jugador&a=Crud">Jugar</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Username</th>
            <th style="width:180px;">Puntuacion</th>
            <th style="width:180px;">Tiempo</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->username; ?></td>
            <td><?php echo $r->puntuacion; ?></td>
            <td><?php echo $r->tiempo; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
