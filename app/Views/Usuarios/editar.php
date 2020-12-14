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
                            <h3 class="card-title">Editar usuario</h3>
                            
                            <?php foreach($usuario as $dato): ?>
                            <form action="?controller=Usuario&action=actualizar&id_usuario=<?php echo $dato['id']; ?>" method="POST" class="validaciones" novalidate="">
                            
                                
                                <input type="hidden" name="id_usuario" value="<?php echo $dato['id'];?>">

								<div class="form-group">
									<label for="cedula" class="mensajes">Cédula:</label>
										<input type="text" class="form-control" name="cedula" value="<?php echo $dato['cedula'];?>" required autofocus>
										<div class="invalid-feedback">
											Cédula es requerida
										</div>
								</div>

								<div class="form-group">
									<label for="nombre" class="mensajes">Nombre:</label>
										<input type="text" class="form-control" name="nombre" value="<?php echo $dato['nombre'];?>" required autofocus>
										<div class="invalid-feedback">
											Nombre es requerido
										</div>
								</div>

								<div class="form-group">
									<label for="apellido" class="mensajes">Apellido:</label>
										<input type="text" class="form-control" name="apellido" value="<?php echo $dato['apellido'];?>" required autofocus>
										<div class="invalid-feedback">
											Apellido es requerido
										</div>
								</div>

								<div class="form-group">
									<label for="correoutp" class="mensajes">Correo Institucional:</label>
										<input type="text" class="form-control" name="correoutp" value="<?php echo $dato['correoutp'];?>" required autofocus>
										<div class="invalid-feedback">
											Correo es requerido
										</div>
								</div>

								<div class="form-group">
									<label for="contrasena" class="mensajes">Contraseña:</label>
										<input type="text" class="form-control" name="contrasena" value="<?php echo $dato['contrasena'];?>" required autofocus>
										<div class="invalid-feedback">
											Contraseña es requerida
										</div>
								</div>

								<div class="form-group">
									<label for="celular" class="mensajes">Celular:</label>
										<input type="text" class="form-control" name="celular" value="<?php echo $dato['celular'];?>" autofocus>
								</div>


                                <?php endforeach ?>
								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Registrar
									</button>
								</div>

								<div class="mt-4 text-center">
									<a href="?controller=Menu&action=index">Salir</a>
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