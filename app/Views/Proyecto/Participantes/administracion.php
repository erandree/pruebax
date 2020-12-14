<div class="contenedor">
		<h2>PARTICIPANTES DEL PROYECTO</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="POST">
				<input type="text" name="buscar" placeholder="Buscar" value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">

				<a href="?controller=Participantes&action=asignar&id_proyecto=<?php echo $_GET['id_proyecto']; ?>" class="btn btn__nuevo">Nuevo</a>

			</form>
		</div>
		<table class="table table-striped">
			<caption>Participantes del proyecto</caption>
				<thead>
					<tr class="head">
						<th scope="col">Id</th>
						<th scope="col">Cédula</th>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido</th>
						<th scope="col">Correo</th>
						<th scope="col">Celular</th>
						<th scope="col">Función</th>
						<th scope="col" colspan="2">Acción</th>
					</tr>
				</thead>
				<tbody>
				<?php if(!empty($datosparticipantes)){ ?>
				<?php foreach($datosparticipantes as $fila):?>
					<tr >
						<td><?php echo $fila['id']; ?></td>
						<td><?php echo $fila['cedula']; ?></td>
						<td><?php echo $fila['nombre']; ?></td>
						<td><?php echo $fila['apellido']; ?></td>
						<td><?php echo $fila['correoutp']; ?></td>
						<td><?php echo $fila['celular']; ?></td>
						<td><?php echo $fila['funcion']; ?></td>
						<td><a href="?controller=Participantes&action=editar&id_proyecto=<?php echo $fila['id_proyecto']; ?>&id_participante=<?php echo $fila['id_participante']; ?>"  class="btn btn-primary btn-sm" >Editar</a></td>
						<td><a href="?controller=Participantes&action=remover&id_proyecto=<?php echo $fila['id_proyecto']; ?>&id_participante=<?php echo $fila['id_participante']; ?>"  class="btn btn-danger btn-sm" >Remover</a></td>
					</tr>
				<?php  endforeach ?>
				<?php }else {echo "<h2>No hay participantes aún en este proyecto</h2>"; }?>
				</tbody>
		</table>
	</div>