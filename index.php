<?php
//////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//**Registramos la visita a la pagina
require ("universe/assets/scripts/trackvisit.php");

trackvisitor("homecubic_home");

?>
<!DOCTYPE html>
<html>
    <?php require ("assets/content/head.php"); ?>
    <body>

        <!-- LOADER -->	
        <div id="loader-overflow">
            <div id="loader3" class="loader-cont">Please enable JS</div>
        </div>	

        <div id="wrap" class="boxed ">
            <div class="grey-bg">
                <!-- HEADER 1 FONT WHITE TRANSPARENT -->
                <div class="header-black-bg"></div> <!-- NEED FOR TRANSPARENT HEADER ON MOBILE -->

                <!--HEADER-->
                <?php require ("assets/sections/header.php"); ?>

                <!-- SLIDER -->
                <?php require ("assets/sections/homeslider.php"); ?>

                <!-- MODELOS -->
                <?php require ("assets/sections/frase.php"); ?>

                <!-- QUIENES SOMOS -->   
                <?php require ("assets/sections/quienes.php"); ?>

                <!-- TESTIMONIALS -->
                <?php require ("assets/sections/testimonios.php"); ?>

                <!-- PROVEEDORES -->
                <?php require ("assets/sections/prov.php"); ?>

                <!--PORTAFOLIO-->
                <?php require ("assets/sections/portf.php"); ?>

                <!-- WORK PROCESS 2 FONT MONTSERRAT -->
                <div class="container-fluid p-110-cont">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="work-proc2-cont wow fadeIn"  >
                                <div class="work-proc2-icon-cont pos-l-12">
                                    01
                                </div>
                                <h3 class="font-montserrat"><strong>R&aacute;pido</strong></h3>
                                <p>Consigue tu proyecto finalizado en corto tiempo </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="work-proc2-cont wow fadeIn" data-wow-delay="200ms">
                                <div class="work-proc2-icon-cont">
                                    02
                                </div>
                                <h3 class="font-montserrat"><strong>Accesible</strong></h3>
                                <p>No pagues demasiado para obetener lo que necesitas. </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="work-proc2-cont wow fadeIn" data-wow-delay="400ms">
                                <div class="work-proc2-icon-cont">
                                    03
                                </div>
                                <h3 class="font-montserrat"><strong>Ejecutable</strong></h3>
                                <p>Te facilitamos un proyecto tangible con fechas reales para cumplir tus metas </p>
                            </div>
                        </div> 

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="work-proc2-a-cont wow fadeIn" data-wow-delay="600ms">
                                <a class="work-proc2-a" href="#">
                                    <div class="work-proc2-a-text font-montserrat">
                                        Descargar<br>
                                        <span class="border-bot">brochure</span>
                                    </div>
                                    <div class="work-proc2-bg-block"></div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- BLOG SECTION 1 -->
                <?php require ("assets/sections/blog.php"); ?>

                <!-- CONTACT INFO & FORM SECTION 1 -->
                <?php require ("assets/sections/contact.php"); ?>                

                <!-- FOOTER -->
                <?php require ("assets/content/footer.php"); ?>

                <!-- BACK TO TOP -->
                <p id="back-top">
                    <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
                </p>
            </div>	
        </div>
        <?php require ("assets/scripts/pagescripts.php"); ?>
    </body>
</html>		