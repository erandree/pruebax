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
							<h3 class="card-title">Registro de propuesta</h3>


							<form action="?controller=Proyecto&action=registrarproyecto" method="POST" class="validaciones" novalidate="">

                            <h4 style="text-align:center;">Generales</h4> 

								<div class="form-group">
									<label for="proponente">Proponente:</label>
										<input id="proponente" type="text" class="form-control" name="proponente" value="" required autofocus>
										<div class="invalid-feedback">
											Proponente es requerido
										</div>
								</div>


                                <div class="form-group">
									<label for="fecha">Fecha de inscripción:</label>
										<input id="fecha" type="date" class="form-control" name="fecha" value="" required autofocus>
										<div class="invalid-feedback">
											Se necesita fecha de inscripción
										</div>
								</div>


								<div class="form-group">
									<label for="direccionimg">Dirección IMG:</label>
									<input id="direccionimg" type="text" class="form-control" name="direccionimg" value="media/proyectos/sinimagen.jpg" required autofocus>
								    <div class="invalid-feedback">
								    	Dirección de imagen
							    	</div>
								</div>

								<br>
								<hr>
								<br>

                                <div class="form-group">
									<label for="nombre">Nombre de propuesta:</label>
										<input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>
										<div class="invalid-feedback">
											El nombre es requerido
										</div>
								</div>


								<div class="form-group">
										<input id="estado" type="hidden" class="form-control" name="estado" value="En revisión">
								</div>

                                <div class="form-group">

                                    <label for="tipo">Tipo:</label>
					                    <select  class="form-control" name="tipo" required autofocus>
							                <option selected hidden value=""></option>
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
					                        <option selected hidden value=""></option>
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
					                        <option selected hidden value=""></option>
					                        <option value="Individual">Individual</option>
					                        <option value="Grupal">Grupal</option>
				                        </select>
                                        <div class="invalid-feedback">
											La modalidad es requerida
										</div>
                    
                                </div>

                                <div class="form-group">
									<label for="clasificacion">Clasificación:</label>
										<input id="clasificacion" type="text" class="form-control" name="clasificacion" value="" required autofocus>
										<div class="invalid-feedback">
											La clasificación es requerida
										</div>
								</div>

                                <div class="form-group">
									<label for="categoria">Categoría:</label>
										<input id="categoria" type="text" class="form-control" name="categoria" value="" required autofocus>
										<div class="invalid-feedback">
											La categoría es requerida
										</div>
								</div>

                                <div class="form-group">
									<label for="objetivo">Objetivo:</label>
										<input id="objetivo" type="text" class="form-control" name="objetivo" value="" required autofocus>
										<div class="invalid-feedback">
											El objetivo es requerido
										</div>
								</div>

                                
                                <div class="form-group">
									<label for="descripcion">Descripción:</label>
										<textarea id="descripcion" type="text" class="form-control" name="descripcion" value="" required autofocus></textarea>
										<div class="invalid-feedback">
											El objetivo es requerido
										</div>
								</div>


								<div class="form-group m-0">
									<button type="submit" name="proponer" class="btn btn-primary btn-block">
										Proponer
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

