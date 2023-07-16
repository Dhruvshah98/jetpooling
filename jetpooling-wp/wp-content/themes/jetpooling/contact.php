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
                                <h2>contact form</h2>
                            </div>
                            <h2 class="comm-head-2">Ask us anything</h2>
                        </div>
                        <p class="comm-txt">
                            For all queries & booking related information, drop us a
                            message & we’ll get back to you in a jiffy...
                        </p>
                        <div class="touch-box">
                            <div class="touch-info">
                                <div class="touch-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/touch1.svg" alt="Contact Us" width="100%" height="100%" loading="lazy" />
                                </div>
                                <a href="tel:1800 572 6667">1800 572 6667</a>
                            </div>
                            <div class="touch-info">
                                <div class="touch-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/touch2.svg" alt="Contact Us" width="100%" height="100%" loading="lazy" />
                                </div>
                                <a href="mailto:info@jetpooling.com">info@jetpooling.com</a>
                            </div>
                            <div class="touch-info">
                                <div class="touch-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/touch3.svg" alt="Contact Us" width="100%" height="100%" loading="lazy" />
                                </div>
                                <p>
                                    Lane C8/2, 124E Central Avenue, Sainik Farms, South Delhi,
                                    New Delhi, India, 110062
                                </p>
                            </div>
                        </div>
                        <div class="social-wrap">
                            <a href="" class="social-box">
                                <div class="social-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/social1.svg" alt="Find Us" width="100%" height="100%" loading="lazy" />
                                </div>
                            </a>
                            <a href="" class="social-box">
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
                            </a>
                        </div>
                    </div>
                </div>
                <div class="f-col">
                    <div class="contact-box black-bg">
                        <form action="" id="bokkSeat">
                            <div class="w100">
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
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Ends -->
</div>

<!-- Main Container Ends -->


<?php get_footer(); ?>