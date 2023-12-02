<?php

/* Template Name: Charters New Page */

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
            <!-- <img src="<?php echo $banner_section_data['banner_image']; ?>" alt=""> -->

            <video loop autoplay playsinline muted>
                <source src="<?php echo $banner_section_data['banner_image']; ?>" type="video/mp4">
            </video>

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
    <div class="comm-section">
        <div class="container">
            <div class="f-row f-2 f-990-1">
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
    <?php  $experiences_section_data = get_field('experiences_section');
    if( $experiences_section_data ): ?>
    <div class="comm-section alt-wrap black-bg right-image">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="exp-swiper-1 swiper">
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

    <!-- EXPERIENCEs -->
    <?php  $experiences_section_data = get_field('experiences_section');
    if( $experiences_section_data ): ?>
    <div class="comm-section alt-wrap black-bg right-image">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="exp-swiper-2 swiper">
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

    <!-- EXPERIENCEs -->
    <?php  $experiences_section_data = get_field('experiences_section');
    if( $experiences_section_data ): ?>
    <div class="comm-section alt-wrap black-bg right-image">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="exp-swiper-3 swiper">
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

    <!-- EXPERIENCEs -->
    <?php  $experiences_section_data = get_field('experiences_section');
    if( $experiences_section_data ): ?>
    <div class="comm-section alt-wrap black-bg right-image">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="exp-swiper-4 swiper">
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

    <!-- EXPERIENCEs -->
    <?php  $experiences_section_data = get_field('experiences_section');
    if( $experiences_section_data ): ?>
    <div class="comm-section alt-wrap black-bg right-image">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col" data-aos="fade-up">
                    <div class="exp-swiper-5 swiper">
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



    <!-- Promise -->
    <?php  $our_promise_section_data = get_field('our_promise_section');
    if( $our_promise_section_data ): ?>
    <div class="comm-section">
        <div class="container">
            <div class="promise-wrap">
                <div class="f-row f-3">
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

                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Book now -->
    <div class="comm-section">
        <div class="lines-txt-bg">
            <img src="" alt="">
        </div>
        <div class="container">
            <div class="lines-txt" data-aos="fade-up">
                <p class="comm-txt-2">
                    <?php echo $contact_section_data['white_section_content']; ?>
                </p>
                <a href="<?php echo $contact_section_data['book_now']; ?>" class="button">Charter Now</a>
            </div>
        </div>
    </div>

</div>

</div>
<!-- Main Container Ends -->

<?php
get_footer(); ?>