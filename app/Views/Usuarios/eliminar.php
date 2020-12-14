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
                            <h3 class="card-title">Eliminar usuario</h3>
                            
                            <?php foreach($usuario as $dato): ?>

                            <form action="?controller=Usuario&action=eliminarusuario&id_usuario=<?php echo $dato['id']; ?>" method="POST" class="validaciones" novalidate="">
                            
                                
                                <input type="hidden" name="id_usuario" value="<?php echo $dato['id'];?>">

                                <p>Cédula: <?php echo $dato['cedula']; ?></p>
                                <p>Nombre: <?php echo $dato['nombre']; ?></p>
                                <p>Apellido: <?php echo $dato['apellido']; ?></p>
                                <p>Correo: <?php echo $dato['correoutp']; ?></p>
                                <p>Correo: <?php echo $dato['celular']; ?></p>

                                <?php endforeach ?>
								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Eliminar Usuario
									</button>
								</div>

								<div class="mt-4 text-center">
									<a href="?controller=Usuario&action=administracion">Salir</a>
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