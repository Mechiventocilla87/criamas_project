<!-- IMPORTO MI CABECERA -->
<?php require_once "view/header.php"; ?>

<!-- CUERPO DE LA PÁGINA  -->

<body class='transfers'>
    <!-- IMPORTO LAS REDES SOCIALES -->
    <?php require_once "view/redes.php"; ?>

    <!-- IMPORTO EL MENU -->
    <?php require_once "view/nav_menu.php"; ?>

    <!-- SECCION DE PORTADA -->
    <div class="box-static">
        <div class="cont-trans">
            <div class="box-p">
                <p class="title-red">Bienvenidos a Traslados </p>
                <p class="title-2">Verifica nuestras fechas, y solicita tu servicio.</p>
                <p class="title-3">realiza tu consulta</p>
            </div>
            <div class="dog">
                <img class="dog_img" src="view/images/img_photos/travel02.png" alt="Traslados">
            </div>
        </div>
    </div>

    <!-- INFORMACION DE SERVICIOS -->
    <div class="text-tras">
        <div class="box-tras">
            <p class="bold">Viajar con tu Mascota, ahora es más fácil</p>
            <p class="tranfers_p">Lo llevamos a donde vos necesites, somos tu aliado para trasladar a tu gran amigo perruno.</p>
            <p class="tranfers_p">Mientras lo trasladamos, mantenemos un canal comunicativo constante y fluido con vos, para que sepas a cada momento como se siente tu cachorro.</p>
            <p class="tranfers_p">Planificá tu destino, nosotros te brindamos toda la logística</p>
            <div class="viñetas">
                <div class="left">
                    <p> <i class="fas fa-dog heart"></i> Hacemos todo por vos</p>
                    <p> <i class="fas fa-dog heart"></i> Contamos con entregas programadas</p>
                    <p> <i class="fas fa-dog heart"></i> Controles en Fronteras (Veterinario y CITES)</p>
                    <p> <i class="fas fa-dog heart"></i> Recogida/Entrega a domicilio</p>
                    <p> <i class="fas fa-dog heart"></i> Tramitación de la documentación</p>
                    <p> <i class="fas fa-dog heart"></i>Visados</p>
                </div>
                <div class="rigth">
                    <p class=""> <i class="fas fa-dog heart"></i> Disposición de Transportines</p>
                    <p class=""> <i class="fas fa-dog heart"></i> Consultas</p>
                    <p class=""> <i class="fas fa-dog heart"></i> Hotel de animales</p>
                    <p class=""> <i class="fas fa-dog heart"></i> Teléfono 24 hrs. para emergencias</p>
                    <p class=""> <i class="fas fa-dog heart"></i> Servicio VIP</p>
                </div>
            </div>
            <p class='ultimoparrafo'>Nuestro servicio es integral y está pensado paraque nosotros nos ocupemos de todo; <br>
                asesoramiento, control sanitario, gestoria de documentación, aplicación de microchip, envío aéreo y relocación, <br> 
                son algunos de los múltiples servicios que brindamos.
            </p>
        </div>
    </div>
    <div class="box-tras">


        <?php require_once "view/itinerarioTraslado.php"; ?>


    </div>

   <br>

    



    <!-- IMPORTO EL FOOTER -->
    <?php require_once "view/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src='view/styles/js/navheader.js'></script>
    <script src='view/styles/js/menu-mobile.js'></script>
    <script src='view/styles/js/sweet.js'></script>
    <script src='view/styles/js/slide-traslados.js'></script>
    <script src='view/styles/js/destino.js'></script>
    <script src='view/styles/js/PaisesInter.js'></script>
</body>

</html>