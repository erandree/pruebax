<div class="contenedor">
		<h2>ACTIVIDADES DEL PROYECTO</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="POST">
				<input type="text" name="buscar" placeholder="Buscar" 
				value="" class="input__text">

				<input type="hidden" value="<?php $_GET['id']; ?>" name="idproye">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
		
				<a href="?controller=Actividades&action=agregar&id_proyecto=<?php echo $_GET['id_proyecto']; ?>" class="btn btn__nuevo">Nuevo</a>

			</form>
		</div>
		<table>
			<tr class="head">
				<td>Id</td>
                <td>lugar</td>
                <td>Descripción del lugar</td>
				<td>actividad</td>
				<td>horas</td>
				<td colspan="2">Acción</td>
			</tr>
            <?php if(!empty($datosactividades)){ ?>
			<?php foreach($datosactividades as $fila):?>
				<tr >
					<td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['lugar']; ?></td>
                    <td><?php echo $fila['descripcion_lugar']; ?></td>
					<td><?php echo $fila['actividad']; ?></td>
					<td><?php echo $fila['horas']; ?></td>
					<td><a href="?controller=Actividades&action=editar&id_actividad=<?php echo $fila['id']; ?>&id_proyecto=<?php echo $fila['fk_proyecto']; ?>"  class="btn btn-primary btn-sm" >Editar</a></td>
					<td><a href="?controller=Actividades&action=eliminar&id_actividad=<?php echo $fila['id']; ?>&id_proyecto=<?php echo $fila['fk_proyecto']; ?>"  class="btn btn-danger btn-sm" >Eliminar</a></td>

				</tr>
			<?php endforeach ?>
            <?php }else {echo "<h2>No hay actividades asignadas a este proyecto</h2>"; }?>

		</table>
	</div>