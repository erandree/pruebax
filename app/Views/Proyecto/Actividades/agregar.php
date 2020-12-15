
<div class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
				<div class="brand">
						<img src="https://vectorified.com/images/enrollment-icon-24.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h3 class="card-title">Registro de actividad</h3>

							<form action="?controller=Actividades&action=guardar&id_proyecto=<?php echo $_GET['id_proyecto']; ?>" method="POST" class="validaciones" novalidate="">

								<div class="form-group">
									<label for="lugar" class="mensajes">Lugar:</label>
										<input type="text" class="form-control" name="lugar" value="" pattern=".{1,50}$" required autofocus>
										<div class="invalid-feedback">
											*El lugar es requerido y debe ser hasta un máximo de 50 caracteres.
										</div>
								</div>

								<input type="hidden" name="id_proyecto" value="<?php echo $_GET['id_proyecto']; ?>">

								<div class="form-group">
									<label for="nombre" class="mensajes">Descripcion del lugar:</label>
										<textarea type="text" class="form-control" name="descripcion_lugar" value="" pattern=".{1,60}$" required autofocus></textarea>
										<div class="invalid-feedback">
											*La descripción del lugar es requerida y debe ser hasta un máximo de 60 caracteres.
										</div>
								</div>

								<div class="form-group">
									<label for="actividad" class="mensajes">Actividad:</label>
										<input type="text" class="form-control" name="actividad" value="" pattern=".{1,50}$" required autofocus>
										<div class="invalid-feedback">
											*La actividad es requerida y debe ser hasta un máximo de 50 caracteres.
										</div>
								</div>

								<div class="form-group">
									<label for="horas" class="mensajes">Horas:</label>
										<input type="number" step="0.1" class="form-control" name="horas" min="0" value="" required autofocus>
										<div class="invalid-feedback">
										*La hora es requerida, no debe ser negativa, no debe tener mas de un decimal después del punto (.) y no deben haber dos o más puntos(.)
										</div>
								</div>


								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Guardar
									</button>
								</div>

								<div class="mt-4 text-center">
									<a href="?controller=Actividades&action=administracion&id_proyecto=<?php echo $_GET['id_proyecto'];?>">Salir</a>
								</div>

							</form>
						</div>
					</div>
					<div class="footer">
						Todos los derechos reservados
					</div>
				</div>
			</div>
		</div>
	</section>
</div>