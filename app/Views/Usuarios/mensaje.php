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
                            <h3 class="card-title">Mensaje:</h3>
                        </div>
                        <div class="form-group">
									<p class="subcard-title"><?php echo $mensaje; ?></p>
                        </div>
                        
                        <div class="form-group m-0">
                            <a href=" <?php echo $direccion; ?>">
									<button name="registrarlo" class="btn btn-primary btn-block">
										<?php echo $mensajeboton; ?>
                                    </button> 
                            </a>
						</div>

						<div class="mt-4 text-center">
							<a href="?controller=Menu&action=index">Salir</a>
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