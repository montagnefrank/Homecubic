<?php

//**Registramos la visita a la pagina
require ("universe/assets/scripts/trackvisit.php");
trackvisitor("homecubic_bloglist");

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

                <!--SLIDER BLOG-->
                <?php require ("assets/sections/blogslider.php"); ?>

                <!--LISTA DE ENTRADAS DE BLOG-->
                <?php require ("assets/sections/entradas.php"); ?>

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