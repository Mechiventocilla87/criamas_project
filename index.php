<!-- IMPORTO MI CABECERA -->
<?php require_once "view/header.php"; ?>

<!-- CUERPO DE LA PÁGINA  -->

<body>
    <!-- IMPORTO LAS REDES SOCIALES -->
    <?php require_once "view/redes.php"; ?> 

     <!-- IMPORTO EL MODAL DE BIENVENIDA-->
     <?php require_once "view/bienvenida.php"; ?> 

    <!-- IMPORTO EL MENU -->
    <?php require_once "view/nav_menu.php"; ?>

    <!-- SECCION DEL SLIDER -->
    <?php require_once "view/sliderHome.php"; ?>

    <!-- SECCION DE OFERTA -->
    <?php require_once "view/oferta.php"; ?>

    <!-- SECCION DE SOMOS -->
    <?php require_once "view/somos.php"; ?>

    <!-- SECCION DE TESTIMONIOS -->
    <?php require_once "view/testimonios.php"; ?>

    <!-- SECCION FORMULARIO -->
    <div class="contact-home" id="contacto">
        <div class="box_center_home">
            <h3 class="title_contact">CONTACTÁNOS</h3>
            <p class="bajada_contact">Hacenos una consulta, con gusto te responderemos.</p>
            <div class="div-con">
                <div class="form-contact">
                    <form action="enviar.php" role="form" method="post" class="form_contact" id="contact-form">
                        <div >
                            <label for="names">Nombres *</label>
                            <input type="text" id="names" name="nombre" required>

                            <label for="phone">Telefono / Celular</label>
                            <input type="number" id="phone" name="telefono">

                            <label for="email">Correo electronico *</label>
                            <input type="text" id="email" name="correo" required>

                            <label for="mensaje">Mensaje *</label>
                            <input class="input-msj" id="mensaje" name="mensaje" required>
                            <div class="container_contact">
                                <input type="submit" value="Enviar" class="button-con" id="btnSend">
                            </div>

                        </div>
                    </form>
                </div>

                <div class="data-contact">
                    <div class="box_direction">
                        <div class="content_box_contact">
                            <div class="div-ic">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="div-dir">
                                <p>Dirección</p>
                                <hr class="line-con">
                                <p class="text_contact">Nicaragua 5596, C.A.B.A</p>
                            </div>
                        </div>
                        <div class="content_box_contact">
                            <div class="div-ic">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="div-dir">
                                <p>Teléfono</p>
                                <hr class="line-con">
                                <p class="text_contact">+54 9 11 4975-2537 <br /> +54 9 11 3589-8532</p>
                            </div>
                        </div>
                        <div class="content_box_contact">
                            <div class="div-ic">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="div-dir">
                                <p>E-Mail</p>
                                <hr class="line-con">
                                <p class="text_contact">lidiasisi@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="box_mapa">
                        <iframe class="box_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.886408374484!2d-58.43564438519601!3d-34.58174066384172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb591ef3c0c81%3A0x3bc93c0d72b70932!2sNicaragua+5596%2C+C1414BWD+CABA!5e0!3m2!1ses-419!2sar!4v1561402313884!5m2!1ses-419!2sar"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- IMPORTO EL FOOTER -->
    <?php require_once "view/footer.php"; ?>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src='view/styles/js/navheader.js'></script>
    <script src='view/styles/js/slide.js'></script>
    <script src='view/styles/js/comments.js'></script>
    <script src='view/styles/js/menu-mobile.js'></script>
    <script src='view/styles/js/sweet.js'></script>
    <script src='view/styles/js/modal.js'></script>
</body>

</html>