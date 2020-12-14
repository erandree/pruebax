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
                            
                            <?php foreach($datosparticipantesroyecto as $dato): ?>
                            <form action="?controller=Participantes&action=actualizar&id_proyecto=<?php echo $dato['id_proyecto']; ?>&id_participante=<?php echo $dato['id_participante']; ?>" method="POST" class="validaciones" novalidate="">

                                <?php foreach($datosproyecto as $dato2): ?>
                                <div class="form-group">
                                    <p>Nombre de proyecto: <?php echo $dato2['nombre'] ?></p>
                                </div>
                                <?php endforeach ?>
                            

								<div class="form-group">
                                <p>Cédula: <?php echo $dato['cedula'] ?></p>
                                </div>
                                
                                <div class="form-group">
                                <p>Cédula: <?php echo $dato['correoutp'] ?></p>
                                </div>

                                <div class="form-group">
                                    <label for="proyecto" class="mensajes">Funcion:</label>
                                        <select  class="form-control" name="funcion" >
                                            <option selected value="<?php echo $dato['funcion'] ?>"><?php echo $dato['funcion'] ?></option>
                                            <option value="Administrador">Administrador</option>
                                            <option value="Responsable">Responsable</option>
                                            <option value="Supervisor">Supervisor</option>
                                            <option value="Participante">Participante</option>
                                        </select>
                                </div>
                            

								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Actualizar
									</button>
								</div>

								<div class="mt-4 text-center">
									<a href="?controller=Participantes&action=administracion&id_proyecto=<?php echo $dato['id_proyecto']; ?>">Salir</a>
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