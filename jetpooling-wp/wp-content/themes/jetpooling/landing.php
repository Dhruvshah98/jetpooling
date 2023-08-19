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
    <?php
                $banner_section_data = get_field('banner_section');
                if( $banner_section_data ): ?>
    <div class="banner-wrap">
        <div class="banner-bg" data-aos="zoom-out">
            <img src="<?php echo $banner_section_data['banner_image']; ?>" alt="">

            <!-- <video autoplay muted playsinline>
        <source src="movie.mp4" type="video/mp4">
        </video> -->
        </div>
        <div class="container">
            <div class="banner-txt" data-aos="fade-up">
                <div class="small-head white">
                    <h2><?php echo $banner_section_data['title']; ?></h2>
                </div>
                <h1 class="comm-head white"><?php echo $banner_section_data['sub_title']; ?></h1>
                <div class="banner-icon">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/banner-icon.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- About -->
    <?php  $about_section_data = get_field('about_section');
    if( $about_section_data ): ?>
    <div class="comm-section alt-wrap right-image">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col">
                    <div class="alternate-img" data-aos="fade-up">
                        <img src="<?php echo $about_section_data['banner_image']; ?>" alt="">
                    </div>
                </div>
                <div class="f-col">
                    <div class="alternate-txt" data-aos="fade-up">
                        <div class="comm-head-wrap">
                            <div class="small-head">
                                <h2><?php echo $about_section_data['small_text']; ?></h2>
                            </div>
                            <h2 class="comm-head-2">
                                <?php echo $about_section_data['title']; ?>
                            </h2>
                        </div>
                        <p class="comm-txt"> <?php echo $about_section_data['content']; ?></p>
                        <a class="button" href=" <?php echo $about_section_data['cta']; ?>">Explore more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- Promise -->
    <?php  $our_promise_section_data = get_field('our_promise_section');
    if( $our_promise_section_data ): ?>
    <div class="comm-section black-bg">
        <div class="container">
            <div class="promise-wrap">
                <div class="promise-left" data-aos="fade-up">
                    <div class="comm-head-wrap">
                        <div class="small-head white">
                            <h2><?php echo $our_promise_section_data['small_text']; ?></h2>
                        </div>
                        <h2 class="comm-head-2 white">
                            <?php echo $our_promise_section_data['title']; ?>
                        </h2>
                    </div>
                    <p class="comm-txt white">
                        <?php echo $our_promise_section_data['sub_title']; ?>
                    </p>
                    <a href="<?php echo $our_promise_section_data['cta']; ?>" class="button white">Learn more</a>
                </div>
                <div class="promise-right">
                    <div class="f-row f-2">
                        <?php
                            if( have_rows('our_promise_section') ): while ( have_rows('our_promise_section') ) : the_row(); 
                                if( have_rows('our_promise_cards') ): while ( have_rows('our_promise_cards') ) : the_row();       ?>
                        <div class="f-col">
                            <div class="promise-box" data-aos="fade-up">
                                <div class="promise-icon">
                                    <img src="<?php  echo get_sub_field('icon'); ?>" alt="">
                                </div>
                                <h3><?php  echo get_sub_field('title'); ?></h3>
                                <p><?php  echo get_sub_field('sub_title'); ?></p>
                            </div>
                        </div>
                        <?php  endwhile; endif;
                            endwhile; endif;
                            ?>
                        <!-- <div class="f-col">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <!-- SERVICES -->
    <?php  $services_section_data = get_field('services_section');
    if( $services_section_data ): ?>
    <div class="comm-section alt-wrap">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="alternate-txt">
                        <div class="comm-head-wrap">
                            <div class="small-head">
                                <h2><?php echo $services_section_data['small_text']; ?></h2>
                            </div>
                            <h2 class="comm-head-2">
                                <?php echo $services_section_data['title']; ?>
                            </h2>
                        </div>
                        <div class="swiper swiper-ser-txt">
                            <div class="swiper-wrapper">
                                <?php
                            if( have_rows('services_section') ): while ( have_rows('services_section') ) : the_row(); 
                                if( have_rows('service_cards') ): while ( have_rows('service_cards') ) : the_row();       ?>
                                <div class="swiper-slide">
                                    <p class="comm-txt"><?php  echo get_sub_field('content'); ?>
                                    </p>
                                    <a class="button" href="<?php  echo get_sub_field('cta'); ?>">Explore more</a>
                                </div>
                                <?php  endwhile; endif;
                            endwhile; endif;
                            ?>
                            </div>
                        </div>
                        <div class="pagination-services comm-pagination"></div>
                    </div>
                </div>
                <div class="f-col" data-aos="fade-up">
                    <div class="services-swiper swiper">
                        <div class="swiper-wrapper">
                            <?php $i = 1;
                            if( have_rows('services_section') ): while ( have_rows('services_section') ) : the_row(); 
                                if( have_rows('service_cards') ): while ( have_rows('service_cards') ) : the_row();       ?>
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php  echo get_sub_field('banner_image'); ?>" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <h5>0<?php echo $i ?></h5>
                                        <h4 class="comm-txt-2 white"><?php  echo get_sub_field('title'); ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endwhile; endif;
                            endwhile; endif;
                            ?>
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
        <div class="lines-bg" data-aos="zoom-out">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/lines-bg.png" alt="">
        </div>
        <div class="container">
            <div class="lines-txt" data-aos="fade-up">
                <p class="comm-txt-2 white">
                    <?php echo $services_section_data['content']; ?>
                </p>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Fleet -->
    <?php  $our_fleet_data = get_field('our_fleet');
    if( $our_fleet_data ): ?>
    <div class="comm-section">
        <div class="container">
            <div class="fleet-head" data-aos="fade-up">
                <div class="comm-head-wrap">
                    <div class="small-head">
                        <h2><?php echo $our_fleet_data['small_text']; ?></h2>
                    </div>
                    <h2 class="comm-head-2">
                        <?php echo $our_fleet_data['title']; ?>
                    </h2>
                </div>
                <div class="tabs">
                    <ul>
                        <li class="button" rel="tab1">Private Jets</li>
                        <li class="button line" rel="tab2">Helicopters</li>
                        <li class="button line" rel="tab3">Yatch</li>
                    </ul>
                </div>
            </div>
            <div class="fleet-content" data-aos="fade-up">
                <div class="tab_container">
                    <div class="swiper-fleet-1 swiper fleet-pointers" id="tab1">
                        <div class="swiper-wrapper">
                            <?php $i = 1;
                            if( have_rows('our_fleet') ): while ( have_rows('our_fleet') ) : the_row(); 
                                if( have_rows('slider_images') ): while ( have_rows('slider_images') ) : the_row();       ?>
                            <div class="swiper-slide">
                                <div class="fleet-img">
                                    <img src="<?php  echo get_sub_field('banner_image'); ?>" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <div class="fleet-sm-head">
                                            <h5>0<?php echo $i ?></h5>
                                            <h5><?php  echo get_sub_field('sub_title'); ?></h5>
                                        </div>
                                        <h4 class="comm-txt-2 white"><?php  echo get_sub_field('title'); ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endwhile; endif;
                            endwhile; endif;
                            ?>

                        </div>
                        <div class="fleet-indicators">
                            <div class="pagination-fleet-1 comm-pagination white"></div>
                            <div class="comm-nav fleet-nav">
                                <div class="fleet-nav-prev-1 comm-prev"></div>
                                <div class="fleet-nav-next-1 comm-next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-fleet-2 swiper fleet-pointers" id="tab2">
                        <div class="swiper-wrapper">
                            <?php $i = 1;
                            if( have_rows('our_fleet') ): while ( have_rows('our_fleet') ) : the_row(); 
                                if( have_rows('slider_images_tab_2') ): while ( have_rows('slider_images_tab_2') ) : the_row();       ?>
                            <div class="swiper-slide">
                                <div class="fleet-img">
                                    <img src="<?php  echo get_sub_field('banner_image'); ?>" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <div class="fleet-sm-head">
                                            <h5>0<?php echo $i ?></h5>
                                            <h5><?php  echo get_sub_field('sub_title'); ?></h5>
                                        </div>
                                        <h4 class="comm-txt-2 white"><?php  echo get_sub_field('title'); ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endwhile; endif;
                            endwhile; endif;
                            ?>
                        </div>
                        <div class="fleet-indicators">
                            <div class="pagination-fleet-2 comm-pagination white"></div>
                            <div class="comm-nav fleet-nav">
                                <div class="fleet-nav-prev-2 comm-prev"></div>
                                <div class="fleet-nav-next-2 comm-next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-fleet-3 swiper fleet-pointers" id="tab3">
                        <div class="swiper-wrapper">
                            <?php $i = 1;
                            if( have_rows('our_fleet') ): while ( have_rows('our_fleet') ) : the_row(); 
                                if( have_rows('slider_images_tab_3') ): while ( have_rows('slider_images_tab_3') ) : the_row();       ?>
                            <div class="swiper-slide">
                                <div class="fleet-img">
                                    <img src="<?php echo get_sub_field('banner_image'); ?>" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <div class="fleet-sm-head">
                                            <h5>0<?php echo $i ?></h5>
                                            <h5><?php  echo get_sub_field('sub_title'); ?></h5>
                                        </div>
                                        <h4 class="comm-txt-2 white"><?php  echo get_sub_field('title'); ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endwhile; endif;
                            endwhile; endif;
                            ?>
                        </div>
                        <div class="fleet-indicators">
                            <div class="pagination-fleet-3 comm-pagination white"></div>
                            <div class="comm-nav fleet-nav">
                                <div class="fleet-nav-prev-3 comm-prev"></div>
                                <div class="fleet-nav-next-3 comm-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- EXPERIENCEs -->
    <?php  $experiences_section_data = get_field('experiences_section');
    if( $experiences_section_data ): ?>
    <div class="comm-section alt-wrap black-bg right-image">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="exp-swiper swiper">
                        <div class="swiper-wrapper">
                            <?php $i =1;
                            if( have_rows('experiences_section') ): while ( have_rows('experiences_section') ) : the_row(); 
                                if( have_rows('experiences_cards') ): while ( have_rows('experiences_cards') ) : the_row();       ?>
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php  echo get_sub_field('banner_image'); ?>" alt="">
                                    <div class="service-txt comm-small-title white">
                                        <h5>0<?php echo $i ?></h5>
                                        <h4 class="comm-txt-2 white"><?php  echo get_sub_field('title'); ?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;  endwhile; endif;
                            endwhile; endif;
                            ?>
                            <!-- <div class="swiper-slide">
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
                            </div> -->
                        </div>
                        <div class="comm-nav">
                            <div class="exp-nav-prev comm-prev"></div>
                            <div class="exp-nav-next comm-next"></div>
                        </div>
                    </div>
                </div>
                <div class="f-col" data-aos="fade-up">
                    <div class="alternate-txt">
                        <div class="comm-head-wrap">
                            <div class="small-head white">
                                <h2><?php echo $experiences_section_data['small_text']; ?></h2>
                            </div>
                            <h2 class="comm-head-2 white">
                                <?php echo $experiences_section_data['title']; ?>
                            </h2>
                        </div>
                        <div class="swiper swiper-exp-txt">
                            <div class="swiper-wrapper">
                                <?php
                                if( have_rows('experiences_section') ): while ( have_rows('experiences_section') ) : the_row(); 
                                    if( have_rows('experiences_cards') ): while ( have_rows('experiences_cards') ) : the_row();       ?>
                                <div class="swiper-slide">
                                    <p class="comm-txt white"><?php  echo get_sub_field('content'); ?></p>
                                    <a class="button white" href="<?php  echo get_sub_field('cta'); ?>">Explore more</a>
                                </div>
                                <?php  endwhile; endif;
                                endwhile; endif; ?>
                            </div>
                        </div>
                        <div class="pagination-exp comm-pagination white"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- TESTIMONIALS -->
    <?php
    $happy_clients_data = get_field('happy_clients');
    if( $happy_clients_data ): ?>
    <div class="comm-section alt-wrap">
        <div class="container">
            <div class="testimonials-wrap">
                <div class="t-left" data-aos="fade-up">
                    <div class="comm-head-wrap">
                        <div class="small-head">
                            <h2><?php echo $happy_clients_data['small_text']; ?></h2>
                        </div>
                        <h2 class="comm-head-2">
                            <?php echo $happy_clients_data['title']; ?>
                        </h2>
                    </div>
                    <div class="swiper testi-swiper">
                        <div class="swiper-wrapper">
                            <?php
                            if( have_rows('happy_clients') ): while ( have_rows('happy_clients') ) : the_row(); 
                                if( have_rows('clients') ): while ( have_rows('clients') ) : the_row();       ?>
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <p class="comm-txt-2"><?php  echo get_sub_field('title'); ?></p>
                                    <p class="comm-txt"><?php  echo get_sub_field('comment'); ?></p>
                                    <div class="testi-name">
                                        <h4><?php  echo get_sub_field('name'); ?></h4>
                                        <h5><?php  echo get_sub_field('location'); ?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php  endwhile; endif;
                            endwhile; endif;
                            ?>

                            <!-- <div class="swiper-slide">
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
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="t-right" data-aos="fade-up">
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
<?php endif; ?>

</div>
<!-- Main Container Ends -->

<?php
get_footer(); ?>