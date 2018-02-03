<?php
$slider_select = "SELECT * FROM hc_homeslider ";
$slider_result = $link->query($slider_select) or die($link->error);
$slider_row = array();
$slider_result->data_seek(0);
$slider_row[0] = $slider_result->fetch_array(MYSQLI_NUM);
$slider_result->data_seek(1);
$slider_row[1] = $slider_result->fetch_array(MYSQLI_NUM);
$slider_result->data_seek(2);
$slider_row[2] = $slider_result->fetch_array(MYSQLI_NUM);
?>
<div id="index-link" class="page-section relative" style="overflow:hidden;">
    <div class="rev_slider_wrapper fullscreen-container" id="rev_slider_280_1_wrapper" style="background-color:#fff;padding:0px;">
        <div id="rev_slider_202_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.1RC">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-672" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/images/revo-slider/constr3.jpg" data-rotate="0" data-saveperformance="off" data-title="WE FOCUSED" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/slider/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-1" style="z-index: 8; white-space: nowrap;"
                         data-fontsize="['90','70','62','52']" 
                         data-fontweight="600" 
                         data-height="none" 
                         data-lineheight="['102','82','74','64']" 
                         data-responsive_offset="on" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-start="1050" 
                         data-transform_idle="o:1;" 
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="y:[100%];s:1000;s:1000;" 
                         data-mask_in="x:0px;y:0px;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-whitespace="nowrap" 
                         data-width="none" 
                         data-x="['left','left','left','left']" 
                         data-hoffset="['40','40','40','20']" 
                         data-y="['center','center','center','center']" 
                         data-voffset="['-30','-30','-30','-30']">
                        <?php echo $slider_row[0][1]; ?> <br>
                        <?php echo $slider_row[0][2]; ?>
                    </div> 

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-2" style="z-index: 8; white-space: nowrap;"
                         data-fontsize="['24','24','24','20']" 
                         data-fontweight="300" 
                         data-height="none" 
                         data-lineheight="['40','40','40','40']" 
                         data-responsive_offset="on" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-start="1450" 
                         data-transform_idle="o:1;" 
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="y:[100%];s:1000;s:1000;" 
                         data-mask_in="x:0px;y:0px;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-whitespace="nowrap" 
                         data-width="none" 
                         data-x="['left','left','left','left']" 
                         data-hoffset="['40','40','40','20']" 
                         data-y="['center','center','center','center']" 
                         data-voffset="['90','80','70',50']">
                        <?php echo $slider_row[0][3]; ?>
                    </div>                            

                </li>
                <!-- SLIDE  -->
                <li data-index="rs-673" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/images/revo-slider/index6-2.jpg" data-rotate="0" data-saveperformance="off" data-title="CREATIVE STUDIO" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/slider/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-899-layer-1" style="z-index: 8; white-space: nowrap;"
                         data-fontsize="['98','78','70','60']" 
                         data-fontweight="600" 
                         data-height="none" 
                         data-lineheight="['112','92','84','72']" 
                         data-responsive_offset="on" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-start="1050" 
                         data-transform_idle="o:1;" 
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="y:[100%];s:1000;s:1000;" 
                         data-mask_in="x:0px;y:0px;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-whitespace="nowrap" 
                         data-width="none" 
                         data-x="['left','left','left','left']" 
                         data-hoffset="['40','40','40','20']" 
                         data-y="['center','center','center','center']" 
                         data-voffset="['-100','-90','-80','-70']">
                        <?php echo $slider_row[1][1]; ?>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-899-layer-2" style="z-index: 8; white-space: nowrap;"
                         data-fontsize="['98','78','70','60']" 
                         data-fontweight="600" 
                         data-height="none" 
                         data-lineheight="['112','92','84','72']" 
                         data-responsive_offset="on" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-start="1350" 
                         data-transform_idle="o:1;" 
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="y:[100%];s:1000;s:1000;" 
                         data-mask_in="x:0px;y:0px;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-whitespace="nowrap" 
                         data-width="none" 
                         data-x="['left','left','left','left']" 
                         data-hoffset="['40','40','40','20']" 
                         data-y="['center','center','center','center']" 
                         data-voffset="['0','0','0','0']">
                        <?php echo $slider_row[1][2]; ?>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-899-layer-3" style="z-index: 8; white-space: nowrap;"
                         data-fontsize="['98','78','70','60']" 
                         data-fontweight="600" 
                         data-height="none" 
                         data-lineheight="['112','92','84','72']" 
                         data-responsive_offset="on" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-start="1650" 
                         data-transform_idle="o:1;" 
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="y:[100%];s:1000;s:1000;" 
                         data-mask_in="x:0px;y:0px;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-whitespace="nowrap" 
                         data-width="none" 
                         data-x="['left','left','left','left']" 
                         data-hoffset="['40','40','40','20']" 
                         data-y="['center','center','center','center']" 
                         data-voffset="['100','90','80','70']">
                        <?php echo $slider_row[1][3]; ?><span class="red-dot">.</span>
                    </div>

                </li>
                <!-- SLIDE  -->
                <li data-index="rs-674" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/images/revo-slider/constr.jpg" data-rotate="0" data-saveperformance="off" data-title="BRANDING" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/slider/slide3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-1" style="z-index: 8; white-space: nowrap;"
                         data-fontsize="['90','70','62','52']" 
                         data-fontweight="600" 
                         data-height="none" 
                         data-lineheight="['102','82','74','64']" 
                         data-responsive_offset="on" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-start="1050" 
                         data-transform_idle="o:1;" 
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="y:[100%];s:1000;s:1000;" 
                         data-mask_in="x:0px;y:0px;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-whitespace="nowrap" 
                         data-width="none" 
                         data-x="['left','left','left','left']" 
                         data-hoffset="['40','40','40','20']" 
                         data-y="['center','center','center','center']" 
                         data-voffset="['-30','-30','-30','-30']">
                        <?php echo $slider_row[2][1]; ?> <br> 
                        <?php echo $slider_row[2][2]; ?>
                    </div> 

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-2" style="z-index: 8; white-space: nowrap;"
                         data-fontsize="['24','24','24','20']" 
                         data-fontweight="300" 
                         data-height="none" 
                         data-lineheight="['40','40','40','40']" 
                         data-responsive_offset="on" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-start="1450" 
                         data-transform_idle="o:1;" 
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="y:[100%];s:1000;s:1000;" 
                         data-mask_in="x:0px;y:0px;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-whitespace="nowrap" 
                         data-width="none" 
                         data-x="['left','left','left','left']" 
                         data-hoffset="['40','40','40','20']" 
                         data-y="['center','center','center','center']" 
                         data-voffset="['90','80','70',50']">
                        <?php echo $slider_row[2][3]; ?>
                    </div>    

                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <!-- SCROLL ICON -->
    <div class="local-scroll-cont font-white">
        <a href="#about" class="scroll-down smooth-scroll">
            <div class="icon icon-arrows-down"></div>
        </a>  
    </div>

</div>