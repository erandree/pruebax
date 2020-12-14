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
                            
                            <?php foreach($actividad  as $dato): ?>

                            <form action="?controller=Actividades&action=eliminar&id_actividad=<?php echo $dato['id'];?>" method="POST" class="validaciones" novalidate="">
                            
                                
                                <input type="hidden" name="id_actividad" value="<?php echo $dato['id'];?>">
                                <input type="hidden" name="id_proyecto" value="<?php echo $dato['fk_proyecto'];?>">

                                <p>ID: <?php echo $dato['id']; ?></p>
                                <p>Lugar: <?php echo $dato['lugar']; ?></p>
                                <p>Descripción del lugar: <?php echo $dato['descripcion_lugar']; ?></p>
                                <p>Actividad: <?php echo $dato['actividad']; ?></p>
                                <p>Horas: <?php echo $dato['horas']; ?></p>



								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Remover actividad
									</button>
								</div>

								<div class="mt-4 text-center">
									<a href="?controller=Actividades&action=administracion&id_proyecto=<?php echo $dato['fk_proyecto'];?>">Salir</a>
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