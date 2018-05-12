<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage DS_Looktrans
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald|Roboto:300,400,400i,700|Alegreya+Sans+SC:500" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- #region Header -->

    <div class="bg-primary lt-header">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row justify-content-lg-between">
                <div class="lt-header-logo" data-aos="fade-right">
                    <a href="/"><img src="images/logo_header.png" alt="Logo"></a>
                </div>
                <ul class="nav flex-column flex-sm-row text-center text-lg-right justify-content-center justify-content-lg-end text-uppercase" data-aos="fade-left">
                    <li class="nav-item lt-header-item-active">
                        <a href="/" class="nav-link lt-header-item-link">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a href="/rent" class="nav-link lt-header-item-link">Wynajem</a>
                    </li>
                    <li class="nav-item">
                        <a href="/pomoc" class="nav-link lt-header-item-link">Pomoc drogowa</a>
                    </li>
                    <li class="nav-item">
                        <a href="/ubezpieczenia" class="nav-link lt-header-item-link">Ubezpieczenia</a>
                    </li>
                    <li class="nav-item">
                        <a href="/transport" class="nav-link lt-header-item-link">Transport</a>
                    </li>
                    <li class="nav-item">
                        <a href="/kontakt" class="nav-link lt-header-item-link">Kontakt</a>
                    </li>
                </ul> 
            </div>
        </div>
    </div>

    <!-- #endregion -->

    <!-- #region Hero unit-->

    <div class="jumbotron text-center lt-hero">
        <div class="container lt-hero-content">
            <img class="img-fluid lt-hero-header" src="images/hero-header.png" alt="" data-aos="fade-right">
            <h1 class="text-white text-uppercase lt-hero-subheader" data-aos="fade-left">Wynajem transport ubezpieczenia</h1>
        </div>
    </div>

    <!-- #endregion -->