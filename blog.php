<?php

/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//**Registramos la visita a la pagina
require ("universe/assets/scripts/trackvisit.php");
trackvisitor("homecubic_blog");

?>
<!DOCTYPE html>
<html>
    <?php require ("assets/content/head.php"); ?>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- LOADER -->	
        <div id="loader-overflow">
            <div id="loader3" class="loader-cont">Please enable JS</div>
        </div>	

        <div id="wrap" class="boxed ">
            <div class="grey-bg"> <!-- Grey BG  -->	
                <!--HEADER-->
                <?php require ("assets/sections/header.php"); ?>

                <!--SLIDER BLOG-->
                <?php require ("assets/sections/blogentry.php"); ?>

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