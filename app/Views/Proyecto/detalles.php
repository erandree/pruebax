<body class="my-login-page">
<?php foreach($datosproyecto as $dato1): ?>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
				    <div class="brand">
						<img src="<?php echo $dato1['direccionimg'];?>" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
                        
							<h3 class="card-title">Proyecto - <?php echo $dato1['nombre'];?></h3>
							

								<div class="form-group">
                                    <span class="subtitulos">Proponente:</span> 
                                    <span class="valor"><?php echo $dato1['proponente'];?></span>
                                </div>

                                <div class="form-group">
                                    <span class="subtitulos">fecha de inscripción:</span> 
                                    <span class="valor"><?php echo $dato1['fecha'];?></span>
                                </div>

                                <div class="form-group">
                                    <span class="subtitulos">URL imagen:</span> 
                                    <span class="valor"><?php echo $dato1['direccionimg'];?></span>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <span class="subtitulos">Titulo de proyecto:</span> 
                                    <span class="valor"><?php echo $dato1['nombre'];?></span>
                                </div>

                                <div class="form-group">
                                    <span class="subtitulos">Tipo:</span> 
                                    <span class="valor"><?php echo $dato1['tipo'];?></span>
                                </div>

                                <div class="form-group">
                                    <span class="subtitulos">Nivel:</span> 
                                    <span class="valor"><?php echo $dato1['nivel'];?></span>
                                </div>

                                <div class="form-group">
                                    <span class="subtitulos">Modalidad:</span> 
                                    <span class="valor"><?php echo $dato1['modalidad'];?></span>
                                </div>

                                <div class="form-group">
                                    <span class="subtitulos">Clasificacion:</span> 
                                    <span class="valor"><?php echo $dato1['clasificacion'];?></span>
                                </div>

                                <div class="form-group">
                                    <span class="subtitulos">Categoría:</span> 
                                    <span class="valor"><?php echo $dato1['categoria'];?></span>
                                </div>

                                <div class="form-group">
                                    <span class="subtitulos">Objetivo:</span> 
                                    <span class="valor"><?php echo $dato1['objetivo'];?></span>
                                </div>

                                <div class="form-group">
                                    <span class="subtitulos">Descripcion:</span> 
                                    <br>
                                    <span class="valor"><?php echo $dato1['descripcion'];?></span>
                                </div>
                                <?php endforeach ?>
                                <hr>
                                <h4 style="text-align:center;">Actividades</h4> 

                                <div class="form-group">
                                    <table class="table table-striped">
                                        <caption>Actividades del proyecto</caption>
			                                <thead>     
                                                <tr class="head">
                                                    <th scope="col">#</th>
                                                    <th scope="col">Lugar</th>
                                                    <th scope="col">Actividad</th>
                                                    <th scope="col">Horas</th>
                                                </tr>
                                            <thead>
                                            <tbody>
                                            <?php if(!empty($datosactividades)){
                                             foreach($datosactividades as $dato2): ?>
                                                <tr>
                                                    <td><?php echo $contador + 1?></td>
                                                    <td><?php echo $dato2['lugar'];?></td>
                                                    <td><?php echo $dato2['actividad'];?></td>
                                                    <td><?php echo $dato2['horas'];?></td>
                                                </tr>

                                        <?php
                                            
                                            $totalhoras = $totalhoras + $dato2['horas'];
                                            $contador =  $contador + 1;
                                             endforeach;
                                             }
                                             else {echo "<h2>Aún no hay actividades asignadas a este proyecto</h2>";} ?>
                                             
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="vacia"></td>
                                                <td class="vacia"></td>
                                                <td class="vacia"></td>
                                                <td><?php echo $totalhoras;?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <?php $contador = 0; ?>

                                <hr>
                                <h4 style="text-align:center;">Participantes</h4> 

                                <div class="form-group">
                                    <table class="table table-striped table-responsive">
                                        <caption>Participantes de proyectos</caption>
                                            <thead>
                                                <tr class="head">
                                                    <td scope="col">#</td>
                                                    <td scope="col">Cédula</td>
                                                    <td scope="col">Correo</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($datosparticipantes)){
                                                    foreach($datosparticipantes as $dato3): ?>
                                                    <tr>
                                                        <td><?php echo $contador = $contador + 1?></td>
                                                        <td><?php echo $dato3['cedula'];?></td>
                                                        <td><?php echo $dato3['correoutp'];?></td>
                                                    </tr>
                                                <?php 
                                                
                                            endforeach;
                                            }
                                            else{ echo "<h2>Aún no hay actividades asignadas a este proyecto</h2>";} ?>
                                            </tbody>
                                        </table>

                                    <?php $contador = 0;
                                    ?>                                  
                                </div>

                        </div>
                    </div>
					<div class="footer">
						Todos los derechos reservados
					</div>
				</div>
			</div>
		</div>
	</section>
    </body>
</html>