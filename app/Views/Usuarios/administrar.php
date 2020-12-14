<div class="contenedor">
		<h2>ADMINISTRACIÓN DE PARTICIPANTES</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">

				<input type="text" name="buscar" placeholder="Buscar" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="?controller=Usuario&action=registrar" class="btn btn__nuevo">Nuevo</a>

			</form>
		</div>
		<table>
			<caption>Administración de participantes</caption>
				<thead>
					<tr class="head">
						<td scope="col">Id</td>
						<td scope="col">Cédula</td>
						<td scope="col">Nombre</td>
						<td scope="col">Apellido</td>
						<td scope="col">Correo Institucional</td>
						<td scope="col">Celular</td>
						<td scope="col">Fecha de creación</td>
						<td scope="col" colspan="2">Acción</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($datos as $dato):?>
					<tr >
						<td><?php echo $dato['id']; ?></td>
						<td><?php echo $dato['cedula']; ?></td>
						<td><?php echo $dato['nombre']; ?></td>
						<td><?php echo $dato['apellido']; ?></td>
						<td><?php echo $dato['correoutp']; ?></td>
						<td><?php echo $dato['celular']; ?></td>
						<td><?php echo $dato['fecha_creacion']; ?></td>
						<td><a href="?controller=Usuario&action=editar&id_usuario=<?php echo $dato['id']; ?>"  class="btn__update" >Editar</a></td>
						<td><a href="?controller=Usuario&action=eliminar&id_usuario=<?php echo $dato['id']; ?>" class="btn__delete">Eliminar</a></td>
					</tr>
				</tbody>
					<?php endforeach ?>
		</table>
	</div>