
<section class="seccion_central">

    <div class="menu_contenedores">
            <h1 class="titulo_categoria"> Proyectos Disponibles </h1> 
            <div class="carousel-bg">
                <section class="carousel" data-flickity='{ "wrapAround": false, "pageDots": true, "contain": true}'>
                    <?php
                    foreach ($datos as $dato){
                        ?>
                            <a href="?controller=Proyecto&action=detalles&id_proyecto=<?php echo $dato['id']; ?>">
                                <div class="carosel-cell cada_anime">
                                    <img class="menu_imagen" src="<?php echo $dato['direccionimg'] ?>" alt="Objetivo: <?php echo $dato['objetivo'];?> - descripcion: <?php echo $dato['descripcion'] ?>  " title="Tipo: <?php echo $dato['tipo'] ?> - Nivel: <?php echo $row2['nivel'] ?> - Clasificación: <?php echo $dato['clasificacion'] ?> - Categoría: <?php echo $dato['categoria'] ?>">
                                    <b><?php echo $dato['nombre'] ?></b>
                                </div>
                            </a>
                        <?php
                        }
                        ?>
                </section>
            </div>
    </div>

</section>