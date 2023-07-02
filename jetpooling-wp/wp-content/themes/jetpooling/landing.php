<?php

/* Template Name: Landing  Page */

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.

 *

 *

 * @package blank

 */

get_header();
?>
<!-- Main Container Starts -->
<div class="home-container">

    <!-- Banner -->
    <div class="banner-wrap">
        <div class="banner-bg">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/banner-bg.jpg" alt="">

            <!-- <video autoplay muted playsinline>
      <source src="movie.mp4" type="video/mp4">
    </video> -->
        </div>
        <div class="container">
            <div class="banner-txt">
                <div class="small-head white">
                    <h2>welcome to JETPOOLING</h2>
                </div>
                <h1 class="comm-head white">Where luxury meets the skies</h1>
                <div class="banner-icon">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/banner-icon.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="comm-section alt-wrap">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col">
                    <div class="alternate-img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="f-col">
                    <div class="alternate-txt">
                        <div class="comm-head-wrap">
                            <div class="small-head">
                                <h2>ABOUT</h2>
                            </div>
                            <h2 class="comm-head-2">
                                Journey to
                                new horizons
                            </h2>
                        </div>
                        <p class="comm-txt">Welcome to Jetpooling, home to some of the most affordable holiday packages
                            and luxury
                            packages for
                            holiday tours. With our unrivalled expertise and experience, we redefine private luxury
                            holidays and
                            traveling with exclusivity, privacy, flexibility, and safety.</p>
                        <a class="button" href="">Explore more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promise -->
    <div class="comm-section black-bg">
        <div class="container">
            <div class="promise-wrap">
                <div class="promise-left">
                    <div class="comm-head-wrap">
                        <div class="small-head white">
                            <h2>OUR PROMISE</h2>
                        </div>
                        <h2 class="comm-head-2 white">
                            One size does
                            not fit all
                        </h2>
                    </div>
                    <p class="comm-txt white">
                        We deeply resonate with this philosophy and therefore understand the personal & unique approach
                        each of us
                        has to travelling.
                    </p>
                    <a href="" class="button white">Learn more</a>
                </div>
                <div class="promise-right">
                    <div class="f-row f-2">
                        <div class="f-col">
                            <div class="promise-box">
                                <div class="promise-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pr-1.svg" alt="">
                                </div>
                                <h3>Peace of mind</h3>
                                <p>Guest safety and convenience is our number one priority.</p>
                            </div>
                        </div>
                        <div class="f-col">
                            <div class="promise-box">
                                <div class="promise-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pr-2.svg" alt="">
                                </div>
                                <h3>Bespoke design</h3>
                                <p>Our jet cabin interiors are customized to deliver modern luxury.</p>
                            </div>
                        </div>
                        <div class="f-col">
                            <div class="promise-box">
                                <div class="promise-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pr-3.svg" alt="">
                                </div>
                                <h3>Personalized Service</h3>
                                <p>Our Concierge team offers personalized attention, for the best experience.</p>
                            </div>
                        </div>
                        <div class="f-col">
                            <div class="promise-box">
                                <div class="promise-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pr-4.svg" alt="">
                                </div>
                                <h3>Flexibility</h3>
                                <p>Change or cancel your trip up to 72 hours before departure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICES -->
    <div class="comm-section alt-wrap">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col">
                    <div class="alternate-txt">
                        <div class="comm-head-wrap">
                            <div class="small-head">
                                <h2>SERVICES</h2>
                            </div>
                            <h2 class="comm-head-2">
                                Reach out to us
                            </h2>
                        </div>
                        <div class="swiper swiper-ser-txt">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <p class="comm-txt">Discover the ecological jewel of Seychelles and private island
                                        home to Six Senses Zil Pasyon. Step in tune with nature, swim with turtles and
                                        enjoy an intimate destination that is an ode to well being and absolute comfort.
                                    </p>
                                    <a class="button" href="">Explore more</a>
                                </div>
                                <div class="swiper-slide">
                                    <p class="comm-txt">Discover the ecological jewel of Seychelles and private island
                                        home to Six
                                        Senses Zil
                                        Pasyon. Step in tune with nature, swim with turtles and enjoy an intimate
                                        destination that is an
                                        ode to
                                        well being and absolute comfort.</p>
                                    <a class="button" href="">Explore more</a>
                                </div>
                                <div class="swiper-slide">
                                    <p class="comm-txt">Discover the ecological jewel of Seychelles and private island
                                        home to Six
                                        Senses Zil
                                        Pasyon. Step in tune with nature, swim with turtles and enjoy an intimate
                                        destination that is an
                                        ode to
                                        well being and absolute comfort.</p>
                                    <a class="button" href="">Explore more</a>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-services comm-pagination"></div>
                    </div>
                </div>
                <div class="f-col">
                    <div class="services-swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/service-img.jpg" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <h5>01</h5>
                                        <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/about-img.jpg" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <h5>02</h5>
                                        <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/service-img.jpg" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <h5>03</h5>
                                        <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comm-nav">
                            <div class="s-nav-prev comm-prev"></div>
                            <div class="s-nav-next comm-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lines -->
    <div class="comm-section black-bg">
        <div class="lines-bg">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/lines-bg.png" alt="">
        </div>
        <div class="container">
            <div class="lines-txt">
                <p class="comm-txt-2 white">
                    Whether you're flying for business or pleasure, we'll cater to your every need and ensure your
                    journey is as
                    comfortable and stress-free as possible. Reach out to us today to learn more and experience the
                    difference
                    of
                    Jetpooling.
                </p>
            </div>
        </div>
    </div>

    <!-- Fleet -->
    <div class="comm-section">
        <div class="container">
            <div class="fleet-head">
                <div class="comm-head-wrap">
                    <div class="small-head">
                        <h2>our fleet</h2>
                    </div>
                    <h2 class="comm-head-2">
                        Charters & Acquisitions
                    </h2>
                </div>
                <div class="tabs">
                    <ul>
                        <li class="button">Private Jets</li>
                        <li class="button line">Helicopters</li>
                        <li class="button line">Yatch</li>
                    </ul>
                </div>
            </div>
            <div class="fleet-content">
                <div class="tab-content active">
                    <div class="swiper-fleet-1 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="fleet-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fleet-1.jpg" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <div class="fleet-sm-head">
                                            <h5>01</h5>
                                            <h5>08 pax</h5>
                                        </div>
                                        <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="fleet-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fleet-1.jpg" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <div class="fleet-sm-head">
                                            <h5>01</h5>
                                            <h5>08 pax</h5>
                                        </div>
                                        <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="fleet-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fleet-1.jpg" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <div class="fleet-sm-head">
                                            <h5>01</h5>
                                            <h5>08 pax</h5>
                                        </div>
                                        <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fleet-indicators">
                            <div class="pagination-fleet-1 comm-pagination white"></div>
                            <div class="comm-nav fleet-nav">
                                <div class="fleet-nav-prev-1 comm-prev"></div>
                                <div class="fleet-nav-next-1 comm-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- EXPERIENCEs -->
    <div class="comm-section alt-wrap black-bg">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col">
                    <div class="exp-swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/exp-img-1.jpg" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <h5>01</h5>
                                        <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/about-img.jpg" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <h5>02</h5>
                                        <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/service-img.jpg" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <h5>03</h5>
                                        <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comm-nav">
                            <div class="exp-nav-prev comm-prev"></div>
                            <div class="exp-nav-next comm-next"></div>
                        </div>
                    </div>
                </div>
                <div class="f-col">
                    <div class="alternate-txt">
                        <div class="comm-head-wrap">
                            <div class="small-head white">
                                <h2>EXPERIENCEs</h2>
                            </div>
                            <h2 class="comm-head-2 white">
                                Reach out to us
                            </h2>
                        </div>
                        <div class="swiper swiper-exp-txt">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <p class="comm-txt white">Discover the ecological jewel of Seychelles and private
                                        island home to Six Senses Zil Pasyon. Step in tune with nature, swim with
                                        turtles and enjoy an intimate destination that is an ode to well being and
                                        absolute comfort.</p>
                                    <a class="button white" href="">Explore more</a>
                                </div>
                                <div class="swiper-slide">
                                    <p class="comm-txt white">Discover the ecological jewel of Seychelles and private
                                        island home to Six
                                        Senses Zil
                                        Pasyon. Step in tune with nature, swim with turtles and enjoy an intimate
                                        destination that is an
                                        ode to
                                        well being and absolute comfort.</p>
                                    <a class="button white" href="">Explore more</a>
                                </div>
                                <div class="swiper-slide">
                                    <p class="comm-txt white">Discover the ecological jewel of Seychelles and private
                                        island home to Six
                                        Senses Zil
                                        Pasyon. Step in tune with nature, swim with turtles and enjoy an intimate
                                        destination that is an
                                        ode to
                                        well being and absolute comfort.</p>
                                    <a class="button white" href="">Explore more</a>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-exp comm-pagination white"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TESTIMONIALS -->
    <div class="comm-section alt-wrap">
        <div class="container">
            <div class="testimonials-wrap">
                <div class="t-left">
                    <div class="comm-head-wrap">
                        <div class="small-head">
                            <h2>EXPERIENCEs</h2>
                        </div>
                        <h2 class="comm-head-2">
                            Our happy clients
                        </h2>
                    </div>
                    <div class="swiper testi-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <p class="comm-txt-2">Incredible experience with Jetpooling</p>
                                    <p class="comm-txt">Whether you're flying for business or pleasure, we'll cater to
                                        your every need and ensure your journey is as comfortable and stress-free as
                                        possible. Reach out to us today to learn more and experience the difference of
                                        Jetpooling.</p>
                                    <div class="testi-name">
                                        <h4>Samantha Puth</h4>
                                        <h5>Mumbai, India</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <p class="comm-txt-2">Incredible experience with Jetpooling</p>
                                    <p class="comm-txt">Whether you're flying for business or pleasure, we'll cater to
                                        your every need
                                        and
                                        ensure your journey is as comfortable and stress-free as possible. Reach out to
                                        us today to learn
                                        more and
                                        experience the difference of Jetpooling.</p>
                                    <div class="testi-name">
                                        <h4>Samantha Puth</h4>
                                        <h5>Mumbai, India</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <p class="comm-txt-2">Incredible experience with Jetpooling</p>
                                    <p class="comm-txt">Whether you're flying for business or pleasure, we'll cater to
                                        your every need
                                        and
                                        ensure your journey is as comfortable and stress-free as possible. Reach out to
                                        us today to learn
                                        more and
                                        experience the difference of Jetpooling.</p>
                                    <div class="testi-name">
                                        <h4>Samantha Puth</h4>
                                        <h5>Mumbai, India</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-right">
                    <div class="pagination-testi comm-pagination"></div>
                    <div class="comm-nav black">
                        <div class="testi-nav-prev comm-prev"></div>
                        <div class="testi-nav-next comm-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Main Container Ends -->

<?php
get_footer(); ?>