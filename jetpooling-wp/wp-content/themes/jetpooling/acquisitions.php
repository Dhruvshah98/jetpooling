<?php

/* Template Name: Acquisitions  Page */

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
            <!-- 
            <video loop autoplay playsinline muted>
                <source src="<?php echo $banner_section_data['banner_image']; ?>" type="video/mp4">
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
    <div class="comm-section">
        <div class="container">
            <div class="f-row f-2 f-990-1  about-charters">
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
                <div class="f-col">
                    <div class="alternate-img" data-aos="fade-up">
                        <img src="<?php echo $about_section_data['banner_image']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- EXPERIENCEs -->
    <?php  $why_section_1_data = get_field('why_section_1');
    if( $why_section_1_data ): ?>
    <div class="comm-section alt-wrap black-bg right-image np-why">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="exp-swiper-1 swiper">
                        <div class="swiper-wrapper">
                            <?php $i =1;
                            if( have_rows('why_section_1') ): while ( have_rows('why_section_1') ) : the_row(); 
                                if( have_rows('why_cards_1') ): while ( have_rows('why_cards_1') ) : the_row();       ?>
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php  echo get_sub_field('banner_image'); ?>" alt="">
                                </div>
                            </div>
                            <?php $i++;  endwhile; endif;
                            endwhile; endif;
                            ?>
                        </div>
                        <div class="pagination-exp comm-pagination white"></div>
                    </div>
                </div>
                <div class="f-col" data-aos="fade-up">
                    <div class="alternate-txt">
                        <div class="comm-head-wrap">
                            <div class="small-head white">
                                <h2><?php echo  $why_section_1_data['small_text']; ?></h2>
                            </div>
                            <h2 class="comm-head-2 white">
                                <?php echo  $why_section_1_data['title']; ?>
                            </h2>
                        </div>
                        <div class="swiper swiper-exp-txt">
                            <div class="swiper-wrapper">
                                <?php
                                if( have_rows('why_section_1') ): while ( have_rows('why_section_1') ) : the_row(); 
                                    if( have_rows('why_cards_1') ): while ( have_rows('why_cards_1') ) : the_row();       ?>
                                <div class="swiper-slide">
                                    <h2 class="comm-head-2 white">
                                        <?php echo get_sub_field('title'); ?>
                                    </h2>
                                    <p class="comm-txt white"><?php  echo get_sub_field('content'); ?></p>
                                </div>
                                <?php  endwhile; endif;
                                endwhile; endif; ?>
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
                <div class="swiper swiper-broch">
                    <div class="swiper-wrapper">
                        <?php $i = 1;
                            if( have_rows('our_fleet') ): while ( have_rows('our_fleet') ) : the_row(); 
                                if( have_rows('slider_images') ): while ( have_rows('slider_images') ) : the_row();       ?>
                        <div class="swiper-slide">
                            <div class="acq-ctas">
                                <a href="<?php  echo get_sub_field("broch_link"); ?>"
                                    class="button broch-btn">Brochure</a>
                                <a href="<?php  echo get_sub_field("broch_contact"); ?>" class="button">Enquire now</a>
                            </div>
                        </div>
                        <?php $i++; endwhile; endif;
                            endwhile; endif;
                            ?>

                    </div>
                </div>
            </div>
            <div class=" fleet-content" data-aos="fade-up">
                <div class="tab_container">
                    <div class="swiper-fleet-1 swiper fleet-pointers">
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
                                        <h4 class="comm-txt-2 white">
                                            <?php  echo get_sub_field('title'); ?></h4>
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
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Book now -->

    <!-- Book now -->
    <?php  $book_now_data = get_field('book_now');
    if( $book_now_data ): ?>
    <div class="comm-section np-lines">
        <div class="lines-txt-bg">
            <img src="<?php echo $book_now_data['background_image']; ?>" alt="">
        </div>
        <div class="container">
            <div class="lines-txt" data-aos="fade-up">
                <p class="comm-txt-2">
                    <?php echo $book_now_data['content']; ?>
                </p>
                <a href="<?php echo $book_now_data['book_now']; ?>" class="button">Charter Now</a>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

</div>
<!-- Main Container Ends -->

<?php
get_footer(); ?>