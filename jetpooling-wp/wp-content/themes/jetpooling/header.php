<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header" class="<?php if (!is_page_template('landing.php')) : ?> black-txt <?php endif; ?>">
        <div class="header-box">
            <div class="container">
                <ul class="header-list">
                    <li><a href="#">Charters</a></li>
                    <li><a href="">Experiences</a></li>
                    <li><a href="">About us</a></li>
                </ul>
                <div class="logoBox">
                    <a class="logo" href="./index.html">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Logo" />
                    </a>
                </div>
                <div class="menuBtn">
                    <ul class="header-list">
                        <li><a href="#">Contact</a></li>
                        <li><a href="">Book now</a></li>
                    </ul>
                    <div class="menu side-menu">
                        <a href="javascript:void(0)" class="js-nav-toggle">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Side Menu -->
        <!-- Side Menu -->
        <div class="menuOverlay"></div>
        <div class="nav-wrapper">
            <nav role="mob-navigation" class="mob-navigation">
                <div class="nav-toggle">
                    <span class="nav-back"></span>
                    <span class="nav-title">
                        <!-- <img src="./img/logo.svg" alt=""> -->
                    </span>
                    <span class="nav-close"></span>
                </div>

                <ul>

                    <li><a href="#">Solutions</a></li>

                    <li class="has-dropdown">
                        <a href="javascript:void(0)">Other Services</a>
                        <ul>
                            <li>
                                <a href="#"><img src="./img/dd-10.svg" alt="" />Website design and development </a>
                            </li>
                            <li>
                                <a href="#"><img src="./img/dd-11.svg" alt="" />SEO services </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>