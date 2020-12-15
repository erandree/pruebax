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
							<h3 class="card-title">Cambiar estado</h3>

                            
                            <?php foreach($proyecto as $dato): ?>

							<form action="?controller=Proyecto&action=cambiarestado&id_proyecto=<?php echo $dato['id'];?>" method="POST" class="validaciones" novalidate="">

                                <input type="hidden" name="id_proyecto" value="<?php echo $dato['id'];?>">

                                <p>Proyecto: <?php echo $dato['nombre']; ?></p>

                                <div class="form-group">
				                    <label for="estado" class="mensajes">Estado:</label>
					                    <select  class="form-control" name="estado">
  						                    <option selected hidden value="<?php echo $dato['estado']; ?>"><?php echo $dato['estado']; ?></option>
					  	                    <option value="Pendiente">Pendiente</option>
					  	                    <option value="Aprobado">Aprobado</option>
					  	                    <option value="Rechazado">Rechazado</option>
					                    </select>
			                    </div>
                                
                                <?php endforeach ?>

								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Cambiar estado
									</button>
								</div>

								<div class="mt-4 text-center">
									<a href="?controller=Proyecto&action=administracion">Salir</a>
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