
jQuery(document).ready(function () {

////////////////////////////////////////////////////////////////////////////////SLIDER PRINCIPAL
    jQuery("#rev_slider_202_1").show().revolution({
        sliderType: "standard",
        autoPlay: "on",
        jsFileLocation: "assets/revo-slider/js/",
        sliderLayout: "fullscreen",
        dottedOverlay: "none",
        delay: 3000,
        navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 50,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            },
            arrows: {
                style: "hermes",
                enable: true,
                hide_onmobile: true,
                hide_onleave: true,
                tmp: '',
                left: {
                    h_align: "left",
                    v_align: "center",
                    h_offset: 0,
                    v_offset: 0
                },
                right: {
                    h_align: "right",
                    v_align: "center",
                    h_offset: 0,
                    v_offset: 0
                }
            },
        },
        responsiveLevels: [1240, 1024, 778, 480],
        visibilityLevels: [1240, 1024, 778, 480],
        gridwidth: [1240, 1024, 778, 480],
        gridheight: [868, 768, 960, 720],
        lazyType: "none",
        parallax: {
            type: "off",
            origo: "slidercenter",
            speed: 1000,
            levels: [0],
            type: "scroll",
            disable_onmobile: "on"
        },
        shadow: 0,
        spinner: "spinner2",
        stopLoop: "off",
        stopAfterLoops: 0,
        shuffle: "off",
        autoHeight: "off",
        fullScreenAutoWidth: "off",
        fullScreenAlignForce: "off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "",
        disableProgressBar: "on",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        debugMode: false,
        fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
        }
    });

    ////////////////////////////////////////////////////////////////////////////MODELOS SLIDER
    jQuery("#modelslider").show().revolution({
        sliderType: "hero",
        autoPlay: "on",
        jsFileLocation: "asset/srevo-slider/js/",
        sliderLayout: "fullwidth",
        dottedOverlay: "none",
        delay: 2000,
        responsiveLevels: [1240, 1024, 778, 480],
        visibilityLevels: [1240, 1024, 778, 480],
        gridwidth: [1240, 1024, 778, 480],
        gridheight: [610, 550, 550, 550],
        lazyType: "none",
        parallax: {
            type: "off",
            origo: "slidercenter",
            speed: 1000,
            levels: [0],
            type: "scroll",
            disable_onmobile: "on"
        },
        shadow: 0,
        spinner: "spinner2",
        autoHeight: "off",
        fullScreenAutoWidth: "off",
        fullScreenAlignForce: "off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "",
        disableProgressBar: "on",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        debugMode: false,
        fallbacks: {
            simplifyAll: "off",
            disableFocusListener: false,
        }
    });

    ////////////////////////////////////////////////////////////////////////////SLIDER PARTICULAS
    var revapi4 = $("#rev_slider_4_1").show().revolution({
        sliderType: "standard",
        jsFileLocation: "revolution/js/",
        sliderLayout: "fullscreen",
        dottedOverlay: "none",
        delay: 4000,
        particles: {startSlide: "first", endSlide: "last", zIndex: "1",
            particles: {
                number: {value: 80}, color: {value: "#000000"},
                shape: {
                    type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
                    image: {src: ""}
                },
                opacity: {value: 0.3, random: false, min: 0.25, anim: {enable: false, speed: 3, opacity_min: 0, sync: false}},
                size: {value: 10, random: true, min: 1, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
                line_linked: {enable: true, distance: 200, color: "#000000", opacity: 0.2, width: 1},
                move: {enable: true, speed: 3, direction: "none", random: true, min_speed: 3, straight: false, out_mode: "out"}},
            interactivity: {
                events: {onhover: {enable: true, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
                modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 150, opacity: 1}, repulse: {distance: 200}}
            }
        },
        navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "off",
            arrows: {
                style: "gyges",
                enable: false,
                hide_onmobile: false,
                hide_onleave: false,
                tmp: '',
                left: {
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: -20,
                    v_offset: 0
                },
                right: {
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 20,
                    v_offset: 0
                }
            }
        },
        responsiveLevels: [1240, 1024, 778, 480],
        visibilityLevels: [1240, 1024, 778, 480],
        gridwidth: [1240, 1024, 778, 480],
        gridheight: [868, 768, 960, 720],
        lazyType: "none",
        shadow: 0,
        spinner: "off",
        stopLoop: "off",
        stopAfterLoops: 0,
        shuffle: "off",
        autoHeight: "off",
        fullScreenAutoWidth: "off",
        fullScreenAlignForce: "off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "60px",
        disableProgressBar: "on",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        debugMode: false,
        fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
        }
    });
    if ($("#rev_slider_4_1").html()) {
        RsParticlesAddOn(revapi4);
    }
});

////////////////////////////////////////////////////////////////////////////////ITERAMOS EL SCROLL Y EL CLIC EN EL MENU PARA RESALTAR EL BOTON
$('li.parent a').on('click', function (event) {
    $(this).parent().parent().find('.parent').removeClass('current');
    $(this).parent().addClass('current');
});

$(window).on('scroll', function () {
    $('.page-section').each(function () {
        if ($(window).scrollTop() >= $(this).offset().top - 200) {
            var id = $(this).attr('id');
            $('li.parent').removeClass('current');
            $('li.parent a[href="#' + id + '"]').parent().addClass('current');
            return;
        }
    });
});

//////////////////////////////////////////////////////////////////////////////// SMOOTH SCROLL ANIMATION
$(document).on('click', 'a[href^="index.php#"]', function (event) {
    var section = $.attr(this, 'href');
    section = section.split('#');
    section = section[1];
    if ($("#" + section).html().length > 1) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $("#" + section).offset().top - 100
        }, 1200);
    }
});

////////////////////////////////////////////////////////////////////////////////PROVEEDORES Y MODELOS
$(".proveedoresslider").owlCarousel({
    autoPlay: 3000,
    items: 5,
    itemsDesktop: [1e3, 4],
    itemsDesktopSmall: [900, 3],
    itemsTablet: [470, 1],
    itemsMobile: !1,
    pagination: !0,
    paginationNumbers: !1
})
$(".modelosslider").owlCarousel({
    autoPlay: 3000,
    items: 3,
    itemsDesktop: [1e3, 4],
    itemsDesktopSmall: [900, 3],
    itemsTablet: [470, 1],
    itemsMobile: !1,
    pagination: !0,
    paginationNumbers: !1
});
$(".slidermodelpage").owlCarousel({
    autoPlay: 2000,
    items: 4,
    itemsDesktop: [1e3, 4],
    itemsDesktopSmall: [900, 3],
    itemsTablet: [470, 1],
    itemsMobile: !1,
    pagination: !0,
    paginationNumbers: !1
});
$(".slide_planos").owlCarousel({
    autoPlay: 2500,
    items: 1,
    itemsDesktop: [1e3, 4],
    itemsDesktopSmall: [900, 3],
    itemsTablet: [470, 1],
    itemsMobile: !1,
    pagination: !0,
    paginationNumbers: !1
});