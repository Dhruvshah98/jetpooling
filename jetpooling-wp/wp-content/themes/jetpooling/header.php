<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header"
        class="<?php if (!is_page_template(array('landing.php','about.php'))) : ?> black-txt <?php endif; ?>">
        <div class="header-box">
            <div class="container">
                <ul class="header-list">
                    <li><a href="<?php echo get_site_url().'/charters/'; ?>">Charters & Acquisitions</a></li>
                    <!-- <li><a href="<?php echo get_site_url().'/experiences/'; ?>">Experiences</a></li> -->
                    <li><a href="<?php echo get_site_url().'/about-us/'; ?>">About us</a></li>
                </ul>
                <div class="logoBox">
                    <a class="logo" href="<?php echo get_site_url().'/'; ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Logo" />
                    </a>
                </div>
                <div class="menuBtn">
                    <ul class="header-list">
                        <li><a href="<?php echo get_site_url().'/contact/'; ?>">Contact</a></li>
                        <li><a href="<?php echo get_site_url().'/contact/'; ?>">Book now</a></li>
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
                    <li><a href="<?php echo get_site_url().'/charters/'; ?>">Charters</a></li>
                    <!-- <li><a href="<?php echo get_site_url().'/experiences/'; ?>">Experiences</a></li> -->
                    <li><a href="<?php echo get_site_url().'/about-us/'; ?>">About us</a></li>
                    <li><a href="<?php echo get_site_url().'/contact/'; ?>">Contact</a></li>
                    <li><a href="<?php echo get_site_url().'/contact/'; ?>">Book now</a></li>
                </ul>
            </nav>
        </div>
    </header>