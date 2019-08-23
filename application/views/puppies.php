<!-- IMPORTO MI CABECERA -->
<?php require_once "header.php"; ?>
<!-- CUERPO DE LA PÁGINA  -->

<!-- CUERPO DE LA PÁGINA  -->
<body class='page_puppies'>
    <!-- IMPORTO LAS REDES SOCIALES -->
    <?php require_once "redes.php"; ?>

    <!-- IMPORTO EL MENU -->
    <?php require_once "nav_menu.php"; ?>

     <!-- SECCION DE SLIDER -->
    <?php require_once "sliderHome.php"; ?>
    
    <div class="puppies">
        <div>
            <h6 class="title-p">Nuestras razas</h6>
        </div>
        <!-- SECCION DE RANGO DE PRECIOS -->
        <?php require_once "rangodeprecios.php"; ?>
        <section class='galeria'>
            <div class='galeria-container'>
                <div class='section_small'>
                    <!-- <div class='box_raza_small'>
                        <div class='box_image'>
                            <img src="view/images/img_photos/beagle.jpg" alt="beagle">
                        </div>
                        <div class='datos'>
                        <div class='titulos'>
                            <div class='iconos'>
                                <i class="fas fa-dog"></i>
                                <div class='box_heart'>
                                  <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <h6 class='nombre-raza'></h6>
                        </div>
                        <div class='descripcion'>
                            <p class='first_p'>Pudle (Old English), Poodle</p>
                            <p class='second_p'><span class='bold_origin'>Origen:</span> Alemania, Francia</p>
                            <button class='boton_compracachorros'>Comprar</button>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class='box_raza_small'>
                        <div class='box_image'>
                            <img src="view/images/img_photos/beagle.jpg" alt="beagle">
                        </div>
                        <div class='datos'>
                        <div class='titulos'>
                            <div class='iconos'>
                                <i class="fas fa-dog"></i>
                                <div class='box_heart'>
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <h6 class='nombre-raza'></h6>
                            </div>
                        <div class='descripcion'>
                            <p class='first_p'>Beagle inglés</p>
                            <p class='second_p'><span class='bold_origin'>Origen:</span> Reino Unido</p>
                            <button class='boton_compracachorros'>Comprar</button>
                            </div>
                        </div>
                    </div> -->
                </div>            
                <!-- <div class='section_medium'>
                    <div class='box_raza_medium'>
                        <div class='box_image'>
                            <img src="view/images/img_photos/beagle.jpg" alt="beagle">
                        </div>
                        <div class='datos'>
                            <div class='titulos'>
                                <div class='iconos'>
                                    <i class="fas fa-dog"></i>
                                    <div class='box_heart'>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <h6 class='nombre-raza'></h6>
                            </div>
                            <div class='descripcion'>
                                <p class='first_p'>Collie de la frontera</p>
                                <p class='second_p'><span class='bold_origin'>Origen:</span> Escocia, Inglaterra</p>
                                <button class='boton_compracachorros'>Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class='box_raza_medium'>
                        <div class='box_image'>
                            <img src="view/images/img_photos/beagle.jpg" alt="beagle">
                        </div>
                        <div class='datos'>
                            <div class='titulos'>
                                <div class='iconos'>
                                    <i class="fas fa-dog"></i>
                                    <div class='box_heart'>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <h6 class='nombre-raza'></h6>
                            </div>
                            <div class='descripcion'>
                                <p class='first_p'>Bulldog Inglés</p>
                                <p class='second_p'><span class='bold_origin'>Origen:</span> Reino Unido</p>
                                <button class='boton_compracachorros'>Comprar</button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class='section_large'>
                    <div class='box_raza_large'>
                        <div class='box_image'>
                            <img src="view/images/img_photos/beagle.jpg" alt="beagle">
                        </div>
                        <div class='datos'>
                            <div class='titulos'>
                                <div class='iconos'>
                                    <i class="fas fa-dog"></i>
                                    <div class='box_heart'>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <h6 class='nombre-raza'></h6>
                            </div>
                            <div class='descripcion'>
                                <p class='first_p'>Dogo alemán</p>
                                <p class='second_p'><span class='bold_origin'>Origen:</span> Alemania</p>
                                <button class='boton_compracachorros'>Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class='box_raza_large'>
                        <div class='box_image'>
                            <img src="view/images/img_photos/beagle.jpg" alt="beagle">
                        </div>
                        <div class='datos'>
                            <div class='titulos'>
                                <div class='iconos'>
                                    <i class="fas fa-dog"></i>
                                    <div class='box_heart'>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <h6 class='nombre-raza'></h6>
                            </div>
                            <div class='descripcion'>
                                <p class='first_p'>Dogo de Burdeos</p>
                                <p class='second_p'><span class='bold_origin'>Origen:</span> Francia</p>
                                <button class='boton_compracachorros'>Comprar</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
             
            <div class='pages_buttons'>
            <button id="btn_prev"><<</button>
            <span id="page"></span>
            <button id="btn_next">>></button>
            </div>

        </section>
    </div>
     <!-- IMPORTO EL FOOTER -->
     <?php require_once "footer.php"; ?>
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src='<?php echo asset_url();?>/js/navheader.js'></script>
    <script src='<?php echo asset_url();?>/js/menu-mobile.js'></script>
    <script src='<?php echo asset_url();?>/js/slide.js'></script>
    <script src='<?php echo asset_url();?>/js/paginator.js'></script>
    <script src='<?php echo asset_url();?>/js/rangodeprecios.js'></script>
</body>
</html> 
