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
                <?php
                $projectId = sanitize($_GET['show']);
                $select = "SELECT * FROM hc_portfolio WHERE idPort ='" . $projectId . "'";
                $result = $link->query($select) or die($link->error);
                $row = $result->fetch_array(MYSQLI_BOTH);
                ?>
                <div class="relative">

                    <div class="rev_slider_wrapper fullwidthbanner-container" id="modelslider_wrapper" style="margin:0px auto;background-color:#101010;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <div class="rev_slider fullwidthabanner" data-version="5.1.4" id="modelslider" style="display:none;">
                            <ul>
                                <!-- SLIDE  -->
                                <li data-index="rs-673" data-transition="zoomout" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/revo-slider/constr2-180x110.jpg" data-rotate="0" data-saveperformance="off" data-title="CONSTRUCT WORKS" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="assets/img/port/custom.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-8981-layer-1" style="z-index: 8; white-space: nowrap;"
                                         data-fontsize="['20','24','24','24']" 
                                         data-fontweight="400" 
                                         data-height="none" 
                                         data-lineheight="['74','74','74','74']" 
                                         data-responsive_offset="on" 
                                         data-splitin="none" 
                                         data-splitout="none" 
                                         data-start="350" 
                                         data-transform_idle="o:1;"

                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-whitespace="nowrap" 
                                         data-width="none" 
                                         data-x="['center','center','center','center']" 
                                         data-hoffset="['0','0','0',0']" 
                                         data-y="['center','center','center','center']" 
                                         data-voffset="['-70','-90','-70','-55']">
                                            Hacemos realidad tu proyecto
                                    </div> 

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-8981-layer-2" style="z-index: 8; white-space: nowrap;"
                                         data-fontsize="['70','50','80','50']" 
                                         data-fontweight="600" 
                                         data-height="none" 
                                         data-lineheight="['120','130','110','95']" 
                                         data-responsive_offset="on" 
                                         data-splitin="none" 
                                         data-splitout="none" 
                                         data-start="550" 
                                         data-transform_idle="o:1;"

                                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                         data-mask_in="x:0px;y:0px;" 
                                         data-mask_out="x:inherit;y:inherit;"
                                         data-whitespace="nowrap" 
                                         data-width="none" 
                                         data-x="['center','center','center','center']" 
                                         data-hoffset="['0','0','0',0']" 
                                         data-y="['center','center','center','center']" 
                                         data-voffset="['0','0','0',0']">
                                            Personalizado
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption rs-parallaxlevel-6" 
                                         id="slide-1291-layer-3" 
                                         data-x="['center','center','center','center']" 
                                         data-hoffset="['0','0','0','0']" 
                                         data-y="['center','center','center','center']"
                                         data-voffset="['90','120','100',80']" 
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                         data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

                                         data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                                         data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                         data-start="1000" 
                                         data-splitin="none" 
                                         data-splitout="none" 
                                         data-responsive_offset="on" 
                                         data-responsive="off"

                                         style="z-index: 8; white-space: nowrap;outline:none;">
                                        <a class="tp-button1 button medium full-rounded thin  white ml-20" href="#">MODELO CUSTOM</a>
                                    </div>

                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->

                </div>
            </div>

            <!--CTA-->
            <?php require ("assets/sections/sliderparticles.php"); ?>       

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