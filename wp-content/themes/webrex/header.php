<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webrex
 */

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
	<?php wp_head(); ?>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
<!-- BEGIN TOP BAR -->
<div class="pre-header">
    <div class="container">
        <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
            <div class="col-md-6 col-sm-6 additional-shop-info">
                <ul class="list-unstyled list-inline">
                    <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                    <li><i class="fa fa-envelope-o"></i><span>info@Codingstudio.com</span></li>
                </ul>
            </div>
            <!-- END TOP BAR LEFT PART -->
        </div>
    </div>
</div>
<!-- END TOP BAR -->
<!-- BEGIN HEADER -->
<div class="header">
    <div class="container">
        <?php
        the_custom_logo();
             ?>
        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
            <ul>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Home

                    </a>

                    <ul class="dropdown-menu">
                        <li class="active"><a href="#">Home Default</a></li>
                        <li><a href="#">Home with Header Fixed</a></li>
                        <li><a href="#">Home without Top Bar</a></li>
                    </ul>
                </li>



                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Pages

                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Multilevel

                    </a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#">Multi level <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Second Level Link</a></li>
                                <li><a href="#">Second Level Link</a></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                                        Second Level Link
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Third Level Link</a></li>
                                        <li><a href="#">Third Level Link</a></li>
                                        <li><a href="#">Third Level Link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Portfolio

                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Portfolio 4</a></li>
                        <li><a href="#">Portfolio 3</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Blog

                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Blog Page</a></li>
                        <li><a href="#">Blog Item</a></li>
                    </ul>
                </li>

                <li class="dropdown dropdown-megamenu">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Mega Menu

                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="header-navigation-content">
                                <div class="row">
                                    <div class="col-md-4 header-navigation-col">
                                        <h4>Footwear</h4>
                                        <ul>
                                            <li><a href="#">Astro Trainers</a></li>
                                            <li><a href="#">Basketball Shoes</a></li>
                                            <li><a href="#">Boots</a></li>
                                            <li><a href="#">Canvas Shoes</a></li>
                                            <li><a href="#">Football Boots</a></li>
                                            <li><a href="#">Golf Shoes</a></li>
                                            <li><a href="#">Hi Tops</a></li>
                                            <li><a href="#">Indoor Trainers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 header-navigation-col">
                                        <h4>Clothing</h4>
                                        <ul>
                                            <li><a href="#">Base Layer</a></li>
                                            <li><a href="#">Character</a></li>
                                            <li><a href="#">Chinos</a></li>
                                            <li><a href="#">Combats</a></li>
                                            <li><a href="#">Cricket Clothing</a></li>
                                            <li><a href="#">Fleeces</a></li>
                                            <li><a href="#">Gilets</a></li>
                                            <li><a href="#">Golf Tops</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 header-navigation-col">
                                        <h4>Accessories</h4>
                                        <ul>
                                            <li><a href="#">Belts</a></li>
                                            <li><a href="#">Caps</a></li>
                                            <li><a href="#">Gloves</a></li>
                                        </ul>

                                        <h4>Clearance</h4>
                                        <ul>
                                            <li><a href="#">Jackets</a></li>
                                            <li><a href="#">Bottoms</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>



                <li><a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes&amp;utm_source=download&amp;utm_medium=banner&amp;utm_campaign=metronic_frontend_freebie" target="_blank">Admin theme</a></li>

                <!-- BEGIN TOP SEARCH -->
                <li class="menu-search">
                    <span class="sep"></span>
                    <i class="fa fa-search search-btn"></i>
                    <div class="search-box">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" placeholder="Search" class="form-control">
                                <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- END TOP SEARCH -->
            </ul>
        </div>
        <!-- END NAVIGATION -->
    </div>
</div>
<!-- Header END -->
<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-40">

    <div id="carousel-example-generic" class="carousel slide carousel-slider">
        <!-- Indicators -->
        <div class="main_txt">
            <h1>Expore the power <br/>
                <span class="carousel-title-normal">of Coding Studio</span>
            </h1>
            <p class="carousel-subtitle-v5  margin-bottom-30" data-animation="animated fadeInDown">This is what you were looking for</p>
            <a class="carousel-btn-green" href="#" data-animation="animated fadeInUp">Purchase Now!</a>

        </div>
        <ol class="carousel-indicators carousel-indicators-frontend">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="item carousel-item-eight active">
            </div>

            <!-- Second slide -->
            <div class="item carousel-item-nine">
            </div>

            <!-- Third slide -->
            <div class="item carousel-item-ten">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<!-- END SLIDER -->




