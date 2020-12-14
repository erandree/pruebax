
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
							<h3 class="card-title">Editar actividad</h3>

                            <?php foreach($actividad as $dato): ?>

							<form action="?controller=Actividades&action=modificar&id_actividad=<?php echo $dato['id']; ?>&id_proyecto=<?php echo $dato['fk_proyecto']; ?>" method="POST" class="validaciones" novalidate="">

                            <input type="hidden" name="id_actividad" value="<?php echo $dato['id']; ?>">
                            <input type="hidden" name="id_proyecto" value="<?php echo $dato['fk_proyecto']; ?>">

								<div class="form-group">
									<label for="lugar" class="mensajes">Lugar:</label>
										<input type="text" class="form-control" name="lugar" value="<?php echo $dato['lugar']; ?>" required autofocus>
										<div class="invalid-feedback">
                                            Lugar es requerida
										</div>
								</div>


								

								<div class="form-group">
									<label for="nombre" class="mensajes">Descripcion del lugar:</label>
										<textarea type="text" class="form-control" name="descripcion_lugar" value="<?php echo $dato['descripcion_lugar']; ?>" required autofocus></textarea>
										<div class="invalid-feedback">
											Descripción es requerida
										</div>
								</div>

								<div class="form-group">
									<label for="actividad" class="mensajes">Actividad:</label>
										<input type="text" class="form-control" name="actividad" value="<?php echo $dato['actividad']; ?>" required autofocus>
										<div class="invalid-feedback">
                                            Actividad es requerido
										</div>
								</div>

								<div class="form-group">
									<label for="horas" class="mensajes">Horas:</label>
										<input type="number" step="0.1" class="form-control" name="horas" value="<?php echo $dato['horas']; ?>" required autofocus>
										<div class="invalid-feedback">
											horas es requerida
										</div>
								</div>

                                

								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Guardar
									</button>
								</div>

								<div class="mt-4 text-center">
									<a href="?controller=Actividades&action=administracion&id_proyecto=<?php echo $dato['fk_proyecto']; ?>">Salir</a>
								</div>

                                <?php endforeach ?>

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