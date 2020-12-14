
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
							<h3 class="card-title">Registro de usuario</h3>

							<div class="form-group">
									<?php if(isset($mensaje)) echo "<h1 class=incorrectologin>".$mensaje."</h1>"; ?>
									
							</div>

							<form action="?controller=Usuario&action=guardar" method="POST" class="validaciones" novalidate="">

								<div class="form-group">
									<label for="cedula" class="mensajes">Cédula:</label>
										<input type="text" class="form-control" name="cedula" value="" required autofocus>
										<div class="invalid-feedback">
											Cédula es requerida
										</div>
								</div>

								<div class="form-group">
									<label for="nombre" class="mensajes">Nombre:</label>
										<input type="text" class="form-control" name="nombre" value="" required autofocus>
										<div class="invalid-feedback">
											Nombre es requerido
										</div>
								</div>

								<div class="form-group">
									<label for="apellido" class="mensajes">Apellido:</label>
										<input type="text" class="form-control" name="apellido" value="" required autofocus>
										<div class="invalid-feedback">
											Apellido es requerido
										</div>
								</div>

								<div class="form-group">
									<label for="correoutp" class="mensajes">Correo Institucional:</label>
										<input type="text" class="form-control" name="correoutp" value="" required autofocus>
										<div class="invalid-feedback">
											Correo es requerido
										</div>
								</div>

								<div class="form-group">
									<label for="contrasena" class="mensajes">Contraseña:</label>
										<input type="password" class="form-control" name="contrasena" value="" required autofocus>
										<div class="invalid-feedback">
											Contraseña es requerida
										</div>
								</div>

								<div class="form-group">
									<label for="celular" class="mensajes">Celular:</label>
										<input type="text" class="form-control" name="celular" value="" autofocus>
								</div>


								

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