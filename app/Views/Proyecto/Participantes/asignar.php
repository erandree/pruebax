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
                            <h3 class="card-title">Asignar usuario</h3>
                            

                                <?php foreach($datosproyecto as $dato2): ?>

                            <form action="?controller=Participantes&action=agregarparticipante&id_proyecto=<?php echo $dato2['id'] ?>" method="POST" class="validaciones" novalidate="">

                                
                                <div class="form-group">
                                    <p>Id de proyecto: <?php echo $dato2['id'] ?></p>
                                    <p>Nombre de proyecto: <?php echo $dato2['nombre'] ?></p>
                                </div>
                                
                            
                                <div class="form-group">

                                <label for="id_participante" class="mensajes">Correo del participante:</label>
                                    <select  class="form-control" name="id_participante" required>

                                        <option selected hidden value=""></option>
                                        <?php foreach($datosparticipantes as $fila):?>
                                        <option value="<?php echo $fila['id']; ?>"><?php echo $fila['correoutp']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                
                                </div>


                                <div class="form-group">
                                    <label for="proyecto" class="mensajes">Funcion:</label>
                                        <select  class="form-control" name="funcion" required >
                                            <option value="Administrador">Administrador</option>
                                            <option value="Responsable">Responsable</option>
                                            <option value="Supervisor">Supervisor</option>
                                            <option value="Participante">Participante</option>
                                        </select>
                                </div>
                            

								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Asignar
									</button>
								</div>

								<div class="mt-4 text-center">
									<a href="?controller=Participantes&action=administracion&id_proyecto=<?php echo $dato2['id']; ?>">Salir</a>
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