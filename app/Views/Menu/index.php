<section class="seccion_central">

        
        <?php
            if($datoscategorias > 0)
            {
                foreach ($datoscategorias as $row)
                {
                    ?>
                    <div class="menu_contenedores">
                        <h1 class="titulo_categoria"> <?php echo $row['categoria'];?> </h1> 
                        <div class="carousel-bg">
                            <section class="carousel" data-flickity='{ "wrapAround": false, "pageDots": true, "contain": true}'>
                    <?php
                    foreach ($datosfunciones as $row2)
                    {
                        if($row["categoria"] == $row2["categoria"])
                        {
                            ?>
                            <a href="?controller=<?php echo $row2['controlador'] ?>&action=<?php echo $row2['action'] ?>">
                                <div class="carosel-cell cada_anime">
                                        <img class="menu_imagen" src="<?php echo $row2['imagen'] ?>" alt="<?php echo $row2['nombre'] ?>"" title="<?php echo $row2['categoria'] ?> - <?php echo $row2['nombre'] ?>">
                                        <b><?php echo $row2['nombre'] ?></b>
                                </div>
                            </a>
                        
                        <?php

                        }
                        else
                            {
                            }
                    }
                        ?>
                            </section>
                        </div>
                    </div>
                <?php 
                }
            }
            else
            {
            echo "no hay datos";
            }
        ?>
        </div>
    </section>