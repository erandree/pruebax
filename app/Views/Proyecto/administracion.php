<div class="contenedor">
		<h2>TODOS LOS PROYECTOS</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="Buscar" 
				value="" class="input__text">
				
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="?controller=Proyecto&action=registro" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table class="table table-striped">
			<caption>Administración de proyectos</caption>
			<thead>
				<tr class="head">
					<th scope="col">Id</th>
					<th scope="col">Nombre</th>
					<th scope="col">Tipo</th>
					<th scope="col">Nivel</th>
					<th scope="col">Clasificación</th>
					<th scope="col">Categoría</th>
					<th scope="col">Modalidad</th>
					<th scope="col">Proponente</th>
					<th scope="col">Estado</th>
					<th scope="col" colspan="5">Acción</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach($datos as $dato):?>
				<tr>
					<td><?php echo $dato['id']; ?></td>
					<td><?php echo $dato['nombre']; ?></td>
					<td><?php echo $dato['tipo']; ?></td>
					<td><?php echo $dato['nivel']; ?></td>
					<td><?php echo $dato['clasificacion']; ?></td>
					<td><?php echo $dato['categoria']; ?></td>
					<td><?php echo $dato['modalidad']; ?></td>
					<td><?php echo $dato['proponente']; ?></td>
					<td><?php echo $dato['estado']; ?></td>
					<td><a href="?controller=Proyecto&action=editar&id_proyecto=<?php echo $dato['id']; ?>"  class="btn btn-primary btn-sm" >Editar</a></td>
					<td><a href="?controller=Participantes&action=administracion&id_proyecto=<?php echo $dato['id']; ?>" class="btn btn-info btn-sm">Participantes</a></td>
					<td><a href="?controller=Actividades&action=administracion&id_proyecto=<?php echo $dato['id']; ?>"  class="btn btn-dark btn-sm" >Actividades</a></td>
					<td><a href="?controller=Proyecto&action=detalles&id_proyecto=<?php echo $dato['id']; ?>" class="btn btn-warning btn-sm">Detalles</a></td>

				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>