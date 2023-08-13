<?php

/* Template Name: Experiences  Page */

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
<div class="main-container">
    <!-- SERVICES -->
    <div class="comm-section alt-wrap right-image">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="services-swiper swiper">
                        <div class="swiper-wrapper">
                            <?php
                                $queryObject = new  Wp_Query(array(
                                    'posts_per_page'   => '-1',
                                    'post_type'        => 'experiences',
                                    'post_status'      => 'publish'
                                )); ?>
                            <?php
                                $cnt = 0;

                            if ($queryObject->have_posts()) {
                                while ($queryObject->have_posts()) : $queryObject->the_post();
                                    $title = get_the_title();
                            ?>
                                <!-- start -->
                            <div class="swiper-slide">
                                <div class="alternate-img">
                                <?php $url =  get_the_post_thumbnail_url(); ?>
                                    <img src="<?php echo esc_url( $url ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" width="100%" height="100%" loading="lazy">
                                </div>
                            </div>
                            <?php endwhile;
                                } wp_reset_query();  // Restore global post data stomped by the_post().
                                ?>
                            <!-- <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/water-sports.jpg" alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="alternate-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/water-sports.jpg" alt="" />
                                </div>
                            </div> -->

                        </div>
                        <div class="comm-nav">
                            <div class="s-nav-prev comm-prev black"></div>
                            <div class="s-nav-next comm-next black"></div>
                        </div>
                    </div>
                </div>
                <div class="f-col" data-aos="fade-up">
                    <div class="alternate-txt">
                        <div class="comm-head-wrap">
                            <div class="small-head">
                                <h2>EXPERIENCEs</h2>
                            </div>
                            <h2 class="comm-head-2">Water Sports</h2>
                        </div>
                        <div class="swiper swiper-ser-txt">
                            <div class="swiper-wrapper">
                            <?php
                                $queryObject = new  Wp_Query(array(
                                    'posts_per_page'   => '-1',
                                    'post_type'        => 'experiences',
                                    'post_status'      => 'publish'
                                )); ?>
                            <?php
                                $cnt = 0;

                            if ($queryObject->have_posts()) {
                                while ($queryObject->have_posts()) : $queryObject->the_post();
                                    $title = get_the_title();
                            ?>
                                <div class="swiper-slide">
                                    <p class="comm-txt">
                                        <?php echo get_field('about')?>
                                    </p>
                                    <a href="<?php the_permalink() ?>"class="button" href="">Explore more</a>
                                </div>
                                <?php endwhile;
                                } wp_reset_query();  // Restore global post data stomped by the_post().
                                ?>
                                <!-- <div class="swiper-slide">
                                    <p class="comm-txt">
                                        Welcome to our exciting holiday destinations! If you're a water sports
                                        enthusiast, you're in for a
                                        treat. Our locations offers a wide range of thrilling water sports activities
                                        that are sure to get
                                        your heart pumping.
                                    </p>
                                    <a class="button" href="">Explore more</a>
                                </div>
                                <div class="swiper-slide">
                                    <p class="comm-txt">
                                        Welcome to our exciting holiday destinations! If you're a water sports
                                        enthusiast, you're in for a
                                        treat. Our locations offers a wide range of thrilling water sports activities
                                        that are sure to get
                                        your heart pumping.
                                    </p>
                                    <a class="button" href="">Explore more</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="pagination-services comm-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Container Ends -->



<?php get_footer(); ?>