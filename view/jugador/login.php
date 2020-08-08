<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Jugador'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Jugador">Jugador</a></li>
  <li class="active"><?php echo $alm->id_jugador != null ? $alm->Nombre : 'Como te llamas?'; ?></li>
</ol>

<form id="frm-jugador" action="?c=Jugador&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_jugador" value="<?php echo $alm->id_jugador; ?>" />
    
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $alm->username; ?>" class="form-control" placeholder="Ingrese su nickname" data-validacion-tipo="requerido|min:3" />
    </div> 
    <div class="text-right">
        <button class="btn btn-success">Comenzar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-jugador").submit(function(){
            return $(this).validate();
        });
    })
</script>