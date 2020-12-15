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
							<h3 class="card-title">Modificar propuesta</h3>

                            
                            <?php foreach($proyecto as $dato): ?>

							<form action="?controller=Proyecto&action=actualizar&id_proyecto=<?php echo $dato['id'];?>" method="POST" class="validaciones" novalidate="">

                                <input type="hidden" name="id_proyecto" value="<?php echo $dato['id'];?>">

                                <div class="form-group">
				                    <label for="estado" class="mensajes">Estado:</label>
					                    <select  class="form-control" name="estado">
  						                    <option selected hidden value="<?php echo $dato['estado']; ?>"><?php echo $dato['estado']; ?></option>
					  	                    <option value="Pendiente">Pendiente</option>
					  	                    <option value="Aprobado">Aprobado</option>
					  	                    <option value="Rechazado">Rechazado</option>
					                    </select>
			                    </div>

								<div class="form-group">
									<label for="proponente">Proponente:</label>
										<input id="proponente" type="text" class="form-control" name="proponente" value="<?php echo $dato['proponente']; ?>" required autofocus>
										<div class="invalid-feedback">
											Proponente es requerido
										</div>
								</div>


                                <div class="form-group">
									<label for="fecha">Fecha de inscripción:</label>
										<input id="fecha" type="date" class="form-control" name="fecha" value="<?php echo $dato['fecha']; ?>" required autofocus>
										<div class="invalid-feedback">
											Se necesita fecha de inscripción
										</div>
								</div>


								<div class="form-group">
									<label for="direccionimg">Dirección IMG:</label>
									<input id="direccionimg" type="text" class="form-control" name="direccionimg" value="<?php echo $dato['direccionimg']; ?>" required autofocus>
								    <div class="invalid-feedback">
								    	Dirección de imagen
							    	</div>
								</div>

								<br>
								<hr>
								<br>

                                <div class="form-group">
									<label for="nombre">Nombre de propuesta:</label>
										<input id="nombre" type="text" class="form-control" name="nombre" value="<?php echo $dato['nombre']; ?>" required autofocus>
										<div class="invalid-feedback">
											El nombre es requerido
										</div>
								</div>




                                <div class="form-group">
                                    <label for="tipo">Tipo:</label>
					                    <select  class="form-control" name="tipo" required autofocus>
							                <option selected hidden value="<?php echo $dato['tipo']; ?>"><?php echo $dato['tipo']; ?></option>
							                <option value="Actividad">Actividad</option>
							                <option value="Producto">Producto</option>
					                    </select>
                                        <div class="invalid-feedback">
											El tipo es requerido
										</div>
                                </div>

                                <div class="form-group">

                                    <label for="nivel" >Nivel:</label>
				                        <select  class="form-control" name="nivel" required autofocus>
					                        <option selected hidden value="<?php echo $dato['nivel']; ?>"><?php echo $dato['nivel']; ?></option>
					                        <option value="Voluntariado">Voluntariado</option>
					                        <option value="Servicio Social">Servicio Social</option>
				                        </select>
                                        <div class="invalid-feedback">
											El nivel es requerido
										</div>

                                </div>


                                <div class="form-group">

                                    <label for="modalidad">Modalidad:</label>
				                        <select  class="form-control" name="modalidad" required autofocus>
					                        <option selected hidden value="<?php echo $dato['modalidad']; ?>"><?php echo $dato['modalidad']; ?></option>
					                        <option value="Individual">Individual</option>
					                        <option value="Grupal">Grupal</option>
				                        </select>
                                        <div class="invalid-feedback">
											La modalidad es requerida
										</div>
                    
                                </div>

                                <div class="form-group">
									<label for="clasificacion">Clasificación:</label>
										<input id="clasificacion" type="text" class="form-control" name="clasificacion" value="<?php echo $dato['clasificacion']; ?>" required autofocus>
										<div class="invalid-feedback">
											La clasificación es requerida
										</div>
								</div>

                                <div class="form-group">
									<label for="categoria">Categoría:</label>
										<input id="categoria" type="text" class="form-control" name="categoria" value="<?php echo $dato['categoria']; ?>" required autofocus>
										<div class="invalid-feedback">
											La categoría es requerida
										</div>
								</div>

                                <div class="form-group">
									<label for="objetivo">Objetivo:</label>
										<input id="objetivo" type="text" class="form-control" name="objetivo" value="<?php echo $dato['objetivo']; ?>" required autofocus>
										<div class="invalid-feedback">
											El objetivo es requerido
										</div>
								</div>

                                
                                <div class="form-group">
									<label for="descripcion">Descripción:</label>
										<textarea id="descripcion" type="text" class="form-control" name="descripcion" required autofocus><?php echo $dato['descripcion']; ?></textarea>
										<div class="invalid-feedback">
											El objetivo es requerido
										</div>
                                </div>
                                
                                <?php endforeach ?>

								<div class="form-group m-0">
									<button type="submit" name="registrarlo" class="btn btn-primary btn-block">
										Actualizar
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