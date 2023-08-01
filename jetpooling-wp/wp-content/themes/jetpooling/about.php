<?php

/* Template Name: About  Page */

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

get_header(); ?>


<!-- Main Container Starts -->
<div class="main-container pt0">
    <!-- About Heade Starts -->
    <secton class="comm-section abt-head-img black-bg">
        <div class="container">
            <div class="about-img">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/abt-img.png" alt="Get to know us better"
                    width="100%" height="100%" loading="lazy" />
            </div>
        </div>
    </secton>
    <!-- About Heade Ends -->

    <!-- Get to know us better starts -->
    <?php
    $about_section_data = get_field('about_section');
    if( $about_section_data ): ?>
    <div class="comm-section better-sec alt-wrap">
        <div class="container">
            <div class="small-head" data-aos="fade-up">
                <h2><?php echo $about_section_data['small_text']; ?></h2>
            </div>
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="alternate-txt">
                        <div class="comm-head-wrap">
                            <h2 class="comm-head-2"><?php echo $about_section_data['title']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="f-col" data-aos="fade-up">
                    <p class="comm-txt">
                        <?php echo $about_section_data['content']; ?>
                    </p>
                    <a class="button" href="<?php echo $about_section_data['cta']; ?>">Explore more</a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Get to know us better ends -->

    <!-- OUR PROMISE Starts -->
    <?php
    $our_promise_section_data = get_field('our_promise_section');
    if( $our_promise_section_data ): ?>
    <div class="comm-section black-bg">
        <div class="container">
            <div class="promise-wrap">
                <div class="promise-left" data-aos="fade-up">
                    <div class="comm-head-wrap">
                        <div class="small-head white">
                            <h2><?php echo $our_promise_section_data['small_text']; ?></h2>
                        </div>
                        <h2 class="comm-head-2 white"><?php echo $our_promise_section_data['title']; ?></h2>
                    </div>
                    <p class="comm-txt white">
                        <?php echo $our_promise_section_data['sub_title']; ?>
                    </p>
                    <a href="<?php echo $our_promise_section_data['cta']; ?>" class="button white">Learn more</a>
                </div>
                <div class="promise-right" data-aos="fade-up">

                    <div class="f-row f-2">
                        <?php
                            if( have_rows('our_promise_section') ): while ( have_rows('our_promise_section') ) : the_row(); 
                                if( have_rows('our_promise_cards') ): while ( have_rows('our_promise_cards') ) : the_row();       ?>
                        <div class="f-col">
                            <div class="promise-box">
                                <div class="promise-icon">
                                    <img src="<?php  echo get_sub_field('icon'); ?>" alt="" />
                                </div>
                                <h3><?php  echo get_sub_field('title'); ?></h3>
                                <p>
                                    <?php  echo get_sub_field('sub_title'); ?>
                                </p>
                            </div>
                        </div>
                        <?php  endwhile; endif;
                            endwhile; endif;
                            ?>

                        <!-- <div class="f-col">
                            <div class="promise-box">
                                <div class="promise-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pr-2.svg" alt="" />
                                </div>
                                <h3>Bespoke design</h3>
                                <p>
                                    Our jet cabin interiors are customized to deliver modern
                                    luxury.
                                </p>
                            </div>
                        </div>
                        <div class="f-col">
                            <div class="promise-box">
                                <div class="promise-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pr-3.svg" alt="" />
                                </div>
                                <h3>Personalized Service</h3>
                                <p>
                                    Our Concierge team offers personalized attention, for the
                                    best experience.
                                </p>
                            </div>
                        </div>
                        <div class="f-col">
                            <div class="promise-box">
                                <div class="promise-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pr-4.svg" alt="" />
                                </div>
                                <h3>Flexibility</h3>
                                <p>
                                    Change or cancel your trip up to 72 hours before
                                    departure.
                                </p>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- OUR PROMISE Ends -->

    <!-- Lines Starts -->
    <div class="comm-section">
        <div class="lines-bg" data-aos="zoom-out">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/line-light-bg.png" alt="" />
        </div>
        <div class="container">
            <div class="lines-txt" data-aos="fade-up">
                <p class="comm-txt-2">
                    An initiative of EIC - Envisioned & founded by a duo of seasoned
                    travel enthusiasts with a wealth of experience in the travel,
                    design and export sectors - Abhaye Gupta (CEO, Founder) & Naved
                    Mallick (Co-Founder) promise to deliver once in a lifetime
                    odysseys one will never forget.
                </p>
            </div>
        </div>
    </div>
    <!-- Lines Ends -->

    <!-- Team Starts -->
    <div class="comm-section alt-wrap black-bg right-image">
        <div class="container">
            <div class="team-wrap">
                <div class="f-row f-2 f-990-1">
                    <div class="f-col" data-aos="fade-up">
                        <div class="exp-swiper swiper">
                            <div class="swiper-wrapper">
                                <?php if( have_rows('founder_section') ): ?>
                                <?php while( have_rows('founder_section') ): the_row(); ?>

                                <div class="swiper-slide">
                                    <div class="alternate-img">
                                        <img src="<?php the_sub_field('image'); ?>" alt="" />
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <!-- <div class="swiper-slide">
                                    <div class="alternate-img">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/team.png" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="alternate-img">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/team.png" alt="" />
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="f-col" data-aos="fade-up">
                        <div class="alternate-txt">
                            <div class="swiper swiper-exp-txt">
                                <div class="swiper-wrapper">
                                    <?php if( have_rows('founder_section') ): ?>
                                    <?php while( have_rows('founder_section') ): the_row(); ?>
                                    <div class="swiper-slide">
                                        <div class="comm-head-wrap">
                                            <div class="small-head white">
                                                <h2><?php the_sub_field('dsignation'); ?></h2>
                                            </div>
                                            <h2 class="comm-head-2 white"><?php the_sub_field('name'); ?></h2>
                                        </div>
                                        <p class="comm-txt white"><?php the_sub_field('about'); ?></p>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>

                                    <!-- <div class="swiper-slide">
                                        <div class="comm-head-wrap">
                                            <div class="small-head white">
                                                <h2>FOUNDER</h2>
                                            </div>
                                            <h2 class="comm-head-2 white">Abhaye Gupta</h2>
                                        </div>
                                        <p class="comm-txt white">
                                            A New Delhi based young entrepreneur and globetrotter
                                            who believes in adding a big dollop of imagination to
                                            the process of premium vacations. <br />
                                            Born and bred in New Delhi, Abhaye runs one of India’s
                                            premium Home Decor Manufacturing and Export company’s
                                            - EIC. His work takes him to places where he
                                            discovered his undiminished love for travel and strong
                                            desire to explore a world of luxury.
                                        </p>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="comm-head-wrap">
                                            <div class="small-head white">
                                                <h2>FOUNDER</h2>
                                            </div>
                                            <h2 class="comm-head-2 white">Abhaye Gupta</h2>
                                        </div>
                                        <p class="comm-txt white">
                                            A New Delhi based young entrepreneur and globetrotter
                                            who believes in adding a big dollop of imagination to
                                            the process of premium vacations. <br />
                                            Born and bred in New Delhi, Abhaye runs one of India’s
                                            premium Home Decor Manufacturing and Export company’s
                                            - EIC. His work takes him to places where he
                                            discovered his undiminished love for travel and strong
                                            desire to explore a world of luxury.
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                            <div class="comm-nav">
                                <div class="exp-nav-prev comm-prev"></div>
                                <div class="exp-nav-next comm-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ends -->
</div>
<!-- Main Container Ends -->





<?php get_footer(); ?>