<?php

/* Template Name: Charters */

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
  <div class="main-container">
    <!-- our fleet -->
    <?php
                $our_fleet_data = get_field('our_fleet');
                if( $our_fleet_data ): ?>
    <div class="comm-section alt-wrap right-image">
      <div class="container">
        <div class="f-row f-2 f-1200-1">
          <div class="f-col">
            <div class="alternate-img fleet-img-d">
              <img src="<?php echo $our_fleet_data['banner_image']; ?>" alt="" />
            </div>
          </div>
          <div class="f-col">
            <div class="alternate-txt">
              <div class="comm-head-wrap">
                <div class="small-head">
                  <h2><?php echo $our_fleet_data['small_text']; ?></h2>
                </div>
                <h2 class="comm-head-2"><?php echo $our_fleet_data['title']; ?></h2>
              </div>
              <div class="tabs">
                <ul>
                  <li class="button" rel="tab1"><?php echo $our_fleet_data['tab_title_1']; ?></li>
                  <li class="button line" rel="tab2"><?php echo $our_fleet_data['tab_title_2']; ?></li>
                  <li class="button line" rel="tab3"><?php echo $our_fleet_data['tab_title_3']; ?></li>
                </ul>
              </div>
              <div class="tab_container">
                <div class="fleet-pointers" id="tab1">
                <?php echo $our_fleet_data['tab__contetnt_1']; ?>
                </div>
                <div class="fleet-pointers" id="tab2">
                <?php echo $our_fleet_data['tab__contetnt_2']; ?>
                </div>
                <div class="fleet-pointers" id="tab3">
                <?php echo $our_fleet_data['tab__contetnt_3']; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!-- 08 PAX -->
    <div class="comm-section black-bg alt-wrap counter-sec">
      <div class="container">
        <div class="f-row f-2 f-990-1">
          <div class="f-col">
            <div class="counterSwiper counter-swiper swiper">
              <div class="swiper-wrapper">
              <?php // repeater #1
                if( have_rows('about_plans') ): ?>
                <?php while( have_rows('about_plans') ): the_row(); ?>
                <div class="swiper-slide">
                  <div class="count-wrap">
                <?php // flexible content
                    if( have_rows('statistics') ):
                        while ( have_rows('statistics') ) : the_row();?>
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num"><?php the_sub_field('number'); ?></span>
                        <span class="count-small-info"><?php the_sub_field('unit'); ?></span>
                      </div>
                      <p><?php the_sub_field('title'); ?></p>
                    </div>
                    <?php 
                    endwhile;
                endif; ?>
              

                    <!-- <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">2.5</span>
                        <span class="count-small-info">M<sub>3</sub></span>
                      </div>
                      <p>Baggage Capacity</p>
                    </div>
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">5956</span>
                        <span class="count-small-info">km</span>
                      </div>
                      <p>Range</p>
                    </div>
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">8</span>
                      </div>
                      <p>Individual seats</p>
                    </div> -->
                  </div>
                </div>
                <?php  endwhile; 
            endif;?>
                <!-- <div class="swiper-slide">
                  <div class="count-wrap">
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">5956</span>
                        <span class="count-small-info">km</span>
                      </div>
                      <p>Range</p>
                    </div>
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">8</span>
                      </div>
                      <p>Individual seats</p>
                    </div>
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">10</span>
                      </div>
                      <p>Suitcases</p>
                    </div>
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">2.5</span>
                        <span class="count-small-info">M<sub>3</sub></span>
                      </div>
                      <p>Baggage Capacity</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="count-wrap">
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">2.5</span>
                        <span class="count-small-info">M<sub>3</sub></span>
                      </div>
                      <p>Baggage Capacity</p>
                    </div>
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">5956</span>
                        <span class="count-small-info">km</span>
                      </div>
                      <p>Range</p>
                    </div>
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">10</span>
                      </div>
                      <p>Suitcases</p>
                    </div>
                    <div class="w50">
                      <div class="counter-info">
                        <span class="counter-num">8</span>
                      </div>
                      <p>Individual seats</p>
                    </div>
                  </div>
                </div> -->

              </div>
            </div>
          </div>
          <div class="f-col">
            <div class="counterInfoSwiper counter-info-swiper swiper">
              <div class="swiper-wrapper">
              <?php // repeater #1
                if( have_rows('about_plans') ): ?>
                <?php while( have_rows('about_plans') ): the_row(); ?>
                <div class="swiper-slide">
                  <div class="counter-info-box">
                    <div class="comm-small-title">
                      <h5><?php the_sub_field('number'); ?></h5>
                      <h4 class="comm-txt-2"><?php the_sub_field('name'); ?></h4>
                    </div>
                    <div class="comm-txt blck">
                      <p>
                      <?php the_sub_field('content'); ?>
                      </p>
                    </div>
                  </div>
                </div>
                 <?php 
                    endwhile;
                endif; ?>
                <!-- <div class="swiper-slide">
                  <div class="counter-info-box">
                    <div class="comm-small-title">
                      <h5>01</h5>
                      <h4 class="comm-txt-2">Private Jet Charter</h4>
                    </div>
                    <div class="comm-txt blck">
                      <p>
                        The Cessna Citation X is an American business jet
                        produced by Cessna and part of the Citation family.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="counter-info-box">
                    <div class="comm-small-title">
                      <h5>08 pax</h5>
                      <h4 class="comm-txt-2">Cessna Citation XIS</h4>
                    </div>
                    <div class="comm-txt blck">
                      <p>
                        The Cessna Citation X is an American business jet
                        produced by Cessna and part of the Citation family.
                        Announced at theOctober 1990 NBAA convention, Model
                        750 made its maiden flight on December 21, 1993.
                      </p>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="fleet-indicators">
                <div class="pagination-fleet-1 comm-pagination"></div>
                <div class="comm-nav fleet-nav">
                  <div class="comm-prev black"></div>
                  <div class="comm-next black"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PICTURES -->
    <?php
                $pictures_data = get_field('pictures');
                if( $pictures_data ): ?>
    <div class="comm-section">
      <div class="container">
        <div class="fleet-head">
          <div class="comm-head-wrap">
            <div class="small-head">
              <h2><?php echo $pictures_data['small_text']; ?></h2>
            </div>
            <h2 class="comm-head-2"><?php echo $pictures_data['title']; ?></h2>
          </div>
        </div>
        <div class="fleet-content">
          <div class="swiper-gallery swiper">
            <div class="swiper-wrapper">
            <?php
                            if( have_rows('pictures') ): while ( have_rows('pictures') ) : the_row(); 
                                if( have_rows('pictures_section') ): while ( have_rows('pictures_section') ) : the_row();       ?>
              <div class="swiper-slide">
                <div class="fleet-img">
                  <img src="<?php  echo get_sub_field('banner_image'); ?>" alt="" />
                  <div class="service-txt comm-small-title white">
                    <div class="fleet-sm-head">
                      <h5>01</h5>
                      <h5><?php  echo get_sub_field('title'); ?></h5>
                    </div>
                    <h4 class="comm-txt-2 white"><?php  echo get_sub_field('title'); ?></h4>
                  </div>
                </div>
              </div>
              <?php  endwhile; endif;
                            endwhile; endif;
                            ?>
              <!-- <div class="swiper-slide">
                <div class="fleet-img">
                  <img src="./img/fleet-1.jpg" alt="" />
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
                  <img src="./img/fleet-1.jpg" alt="" />
                  <div class="service-txt comm-small-title white">
                    <div class="fleet-sm-head">
                      <h5>01</h5>
                      <h5>08 pax</h5>
                    </div>
                    <h4 class="comm-txt-2 white">Private Jet Charter</h4>
                  </div>
                </div>
              </div> -->

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
    <?php endif; ?>


    <!-- Promise -->
    <!-- <div class="comm-section black-bg">
        <div class="container"></div>
      </div> -->

    <!-- CONTACT FORM -->
    <?php  $contact_section_data = get_field('contact_section');
     if( $contact_section_data ): ?>
    <div class="comm-section alt-wrap right-image black-bg">
      <div class="container">
        <div class="f-row f-2 f-990-1">
          <div class="f-col">
            <div class="alternate-img contact-img">
              <img src="<?php bloginfo('template_url'); ?>/assets//img/form-img.jpg" alt="" />
              <div class="contact-img-info">
                <div class="comm-small-title">
                  <h5><?php echo $contact_section_data['small_text']; ?></h5>
                  <h4 class="comm-txt-2 white"><?php echo $contact_section_data['title']; ?></h4>
                </div>
                <p class="comm-txt white">
                <?php echo $contact_section_data['content']; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="f-col">
            <div id="bokkSeat">
              <!-- <div class="w100">
                <div class="form-grp">
                  <p class="form-label">name</p>
                  <input class="form-field" type="text" id="full-name" name="full-name" required />
                </div>
              </div>
              <div class="w100">
                <div class="form-grp">
                  <p class="form-label">contact</p>
                  <input class="form-field" type="number" id="phone-no" name="phone-no" required />
                </div>
              </div>
              <div class="w100">
                <div class="form-grp">
                  <p class="form-label">email</p>
                  <input class="form-field" type="email" id="email" name="email" required />
                </div>
              </div>
              <div class="w50">
                <div class="form-grp">
                  <p class="form-label">departure</p>
                  <input class="form-field" type="text" id="departure" name="departure" required />
                </div>
              </div>
              <div class="w50">
                <div class="form-grp right-align">
                  <p class="form-label">arrival</p>
                  <input class="form-field" type="text" id="arrival" name="arrival" required />
                </div>
              </div>
              <div class="w50">
                <div class="form-grp">
                  <p class="form-label">pax</p>
                  <input class="form-field" type="text" id="pax" name="pax" required />
                </div>
              </div>
              <div class="w50">
                <div class="form-grp">
                  <div class="qtySelector text-center">
                    <i class="fa fa-minus decreaseQty"></i>
                    <input type="text" class="qtyValue" value="1" />
                    <i class="fa fa-plus increaseQty"></i>
                  </div>
                </div>
              </div>
              <div class="w50">
                <div class="form-grp">
                  <p class="form-label">Date</p>
                  <input class="form-field" type="number" id="Date" name="Date" required />
                </div>
              </div>
              <div class="w50">
                <div class="form-grp">
                  <p class="form-label">time</p>
                  <input class="form-field" type="number" id="time" name="time" required />
                </div>
              </div>
              <button class="button white book-seat">
                <span>Book seats</span>
                <img src="./img/arrow_back.svg" alt="" />
              </button> -->
              <?php echo do_shortcode('[contact-form-7 id="199" title="charters"]')?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Book now -->
    <div class="comm-section">
      <div class="container">
        <div class="lines-txt">
          <p class="comm-txt-2">
          <?php echo $contact_section_data['white_section_content']; ?>
          </p>
          <a href="<?php echo $contact_section_data['book_now']; ?>" class="button">Book now</a>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- Main Container Ends -->





<?php get_footer(); ?>