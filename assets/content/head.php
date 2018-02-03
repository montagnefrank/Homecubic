<?php
///////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("universe/assets/scripts/conn.php");

function sanitize($string) {
    $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
?>
<head>
    <title>HomeCubic - Un mejor nivel de vida, más rápido</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow" > 
    <meta name="keywords" content="homecubic, construccion, hogares, casas" > 
    <meta name="description" content="HomeCubic - Un mejor nivel de vida, mas rapido" > 
    <meta name="author" content="burtontech">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#2a2b2f">

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon.png">
    <link rel="icon" sizes="192x192" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:700,500,600,300%7COpen+Sans:400,300,700" rel="stylesheet" type="text/css">
    <link href="assets/revo-slider/css/settings-custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/revo-slider/css/navigation-skins/hermes-custom.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 		
    <link rel="stylesheet" href="assets/css/icons-fonts.css" >	
    <link rel="stylesheet" href="assets/css/style.css" >
    <link rel="stylesheet" href="assets/css/animate.min.css"> 
    <link rel='stylesheet' href='assets/revo-slider/particles/css/revolution.addon.particles4bf4.css?ver=1.0.3' type='text/css' media='all' />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113305473-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-113305473-2');
    </script>

</head>