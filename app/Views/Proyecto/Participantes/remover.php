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
                            <h3 class="card-title">Remover usuario del proyecto</h3>
                            
                            <?php foreach($datosproyecto  as $dato): ?>

                            <form action="?controller=Participantes&action=eliminar" method="POST" class="validaciones" novalidate="">
                            
                                
                                <input type="hidden" name="id_proyecto" value="<?php echo $dato['id'];?>">

                                <p>ID: <?php echo $dato['id']; ?></p>
                                <p>Nombre: <?php echo $dato['nombre']; ?></p>

                                

								<?php foreach($datosparticipante as $datop): ?>
								<input type="hidden" name="id_participante" value="<?php echo $datop['id'];?>">
								<p>Cédula: <?php echo $datop['cedula']; ?> </p>
								<p>Cédula: <?php echo $datop['correoutp']; ?> </p>


								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Remover usuario
									</button>
								</div>

								<div class="mt-4 text-center">
									<a href="?controller=Participantes&action=administracion&id_proyecto=<?php echo $dato['id'];?>">Salir</a>
								</div>

								<?php endforeach ?>
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