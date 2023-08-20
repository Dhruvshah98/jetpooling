<?php

/* Template Name: Contact Page */

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
    <!-- Contact Form Starts -->
    <div class="comm-section alt-wrap right-image">
        <div class="container">
            <div class="f-row f-2 f-990-1">
                <div class="f-col">
                    <div class="contact-info">
                        <div class="comm-head-wrap">
                            <div class="small-head">
                                <h2><?php echo get_field('small_text')?></h2>
                            </div>
                            <h2 class="comm-head-2"><?php echo get_field('title')?></h2>
                        </div>
                        <p class="comm-txt">
                            <?php echo get_field('content')?>
                        </p>
                        <div class="touch-box">
                            <div class="touch-info">
                                <div class="touch-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/touch1.svg" alt="Contact Us"
                                        width="100%" height="100%" loading="lazy" />
                                </div>
                                <a
                                    href="tel:<?php echo get_field('contact_number')?>"><?php echo get_field('contact_number')?></a>
                            </div>
                            <div class="touch-info">
                                <div class="touch-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/touch2.svg" alt="Contact Us"
                                        width="100%" height="100%" loading="lazy" />
                                </div>
                                <a href="mailto:<?php echo get_field('email')?>"><?php echo get_field('email')?></a>
                            </div>
                            <div class="touch-info">
                                <div class="touch-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/touch3.svg" alt="Contact Us"
                                        width="100%" height="100%" loading="lazy" />
                                </div>
                                <p>
                                    <?php echo get_field('address')?>
                                </p>
                            </div>
                        </div>
                        <div class="social-wrap">
                            <?php if( have_rows('social_media') ): ?>
                            <?php while( have_rows('social_media') ): the_row(); ?>
                            <a href="<?php the_sub_field('link'); ?>" class="social-box">
                                <div class="social-img">
                                    <img src="<?php the_sub_field('icon'); ?>" alt="Find Us" width="100%" height="100%"
                                        loading="lazy" />
                                </div>
                            </a>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <!-- <a href="" class="social-box">
                                <div class="social-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/social2.svg" alt="Find Us" width="100%" height="100%" loading="lazy" />
                                </div>
                            </a>
                            <a href="" class="social-box">
                                <div class="social-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/social3.svg" alt="Find Us" width="100%" height="100%" loading="lazy" />
                                </div>
                            </a>
                            <a href="" class="social-box">
                                <div class="social-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/social4.svg" alt="Find Us" width="100%" height="100%" loading="lazy" />
                                </div>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="f-col">
                    <div class="contact-box black-bg">
                        <div id="bokkSeat">
                            <!-- <div class="w100">
                                <div class="form-grp">
                                    <p class="form-label">name</p>
                                    <input class="form-field" type="text" id="full-name" name="full-name" required placeholder="Robin Holmes" />
                                </div>
                            </div>
                            <div class="w100">
                                <div class="form-grp">
                                    <p class="form-label">contact</p>
                                    <input class="form-field" type="number" id="phone-no" name="phone-no" required placeholder="+91 8876 873 876" />
                                </div>
                            </div>
                            <div class="w100">
                                <div class="form-grp">
                                    <p class="form-label">email</p>
                                    <input class="form-field" type="email" id="email" name="email" required placeholder="robinholmes@hotmail.com" />
                                </div>
                            </div>
                            <div class="w100">
                                <div class="form-grp form-textarea-group">
                                    <p class="form-label">message</p>
                                    <textarea class="form-field" type="text" id="message" name="message" required placeholder="Type message here..."></textarea>
                                </div>
                            </div>

                            <button class="button white book-seat">
                                <span>Book seats</span>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_back.svg" alt="" />
                            </button> -->
                            <?php echo  do_shortcode('[contact-form-7 id="155" title="Contact"]')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Ends -->
</div>

<!-- Main Container Ends -->


<?php get_footer(); ?>