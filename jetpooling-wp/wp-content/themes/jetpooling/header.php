<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K5TPBZQ9');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5TPBZQ9" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php wp_body_open(); ?>
    <header id="header"
        class="<?php if (!is_page_template(array('landing.php','about.php'))) : ?> black-txt <?php endif; ?>">
        <div class="header-box">
            <div class="container">
                <ul class="header-list">
                    <li><a href="<?php echo get_site_url().'/'; ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url().'/charters/'; ?>">Charters & Acquisitions</a></li>
                    <!-- <li><a href="<?php echo get_site_url().'/experiences/'; ?>">Experiences</a></li> -->
                    <li><a href="<?php echo get_site_url().'/about-us/'; ?>">About us</a></li>
                </ul>
                <div class="logoBox">
                    <a class="logo" href="<?php echo get_site_url().'/'; ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Logo" />
                    </a>
                    <a class="logo logo-inverse" href="<?php echo get_site_url().'/'; ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-black.png" alt="Logo" />
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
                    <li><a href="<?php echo get_site_url().'/'; ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url().'/charters/'; ?>">Charters & Acquisitions</a></li>
                    <!-- <li><a href="<?php echo get_site_url().'/experiences/'; ?>">Experiences</a></li> -->
                    <li><a href="<?php echo get_site_url().'/about-us/'; ?>">About us</a></li>
                    <li><a href="<?php echo get_site_url().'/contact/'; ?>">Contact</a></li>
                    <li><a href="<?php echo get_site_url().'/contact/'; ?>">Book now</a></li>
                </ul>
            </nav>
        </div>
    </header>