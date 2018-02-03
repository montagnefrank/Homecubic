<?php

//**Registramos la visita a la pagina
require ("universe/assets/scripts/trackvisit.php");
trackvisitor("homecubic_models");

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
            <div class="grey-bg"> <!-- Grey BG  -->	
                <!--HEADER-->
                <?php require ("assets/sections/header.php"); ?>

                <!--SLIDER MODELOS-->
                <?php require ("assets/sections/modelslider.php"); ?>

                <!-- PLANOS -->
                <?php require ("assets/sections/planos.php"); ?>
                
                <!--Acabados-->
                <?php require ("assets/sections/acabados.php"); ?>

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