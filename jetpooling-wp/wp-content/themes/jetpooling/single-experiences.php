<?php get_header(); ?>

        <!-- Main Container Starts -->
        <div class="main-container">
              <?php  $category = get_field('select_category');
              $category_slug = $category->slug;
              
              ?>
            <!-- water sports -->
            <div class="comm-section alt-wrap black-bg">
                <div class="container">
                    <div class="f-row f-2 f-990-1">
                        <div class="f-col">
                            <div class="alternate-txt">
                                <div class="comm-head-wrap">
                                    <div class="small-head white">
                                        <h2><?php the_title() ?></h2>
                                    </div>
                                    <h2 class="comm-head-2 white">
                                        Our Destinations
                                    </h2>
                                </div>
                                <div class="swiper swiper-ser-txt">
                                    <div class="swiper-wrapper">
                                    <?php
                                $queryObject = new  Wp_Query(array(
                                    'posts_per_page'   => '-1',
                                    'post_type'        => 'destinations',
                                    'post_status'      => 'publish',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'slug',
                                            'terms' => $category_slug
                                        )
                                    )
                                )); ?>
                            <?php
                                $cnt = 0;

                            if ($queryObject->have_posts()) {
                                while ($queryObject->have_posts()) : $queryObject->the_post();
                                  
                            ?>
                                    <?php  $banner_section_data = get_field('banner_section');
                                        if( $banner_section_data ): ?>
                                        <div class="swiper-slide">
                                            <p class="comm-txt white"><?php echo $banner_section_data['content']; ?></p>
                                            <div class="destinations-btn-wrap">
                                                <div class="destination-btn-top">
                                                    <a class="button" href="<?php echo $banner_section_data['brothure']; ?>">Brochure</a>
                                                    <a class="button" href="<?php echo $banner_section_data['video_url']; ?>">Watch video</a>
                                                </div>
                                                <a class="button white" href="<?php echo $banner_section_data['book_now']; ?>">Book now</a>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endwhile;
                                } wp_reset_query();  // Restore global post data stomped by the_post().
                                ?>
                                        <!-- <div class="swiper-slide">
                                            <p class="comm-txt white">Discover the ecological jewel of Seychelles and
                                                private
                                                island home to Six Senses Zil Pasyon. Step in tune with nature, swim with
                                                turtles and enjoy an intimate destination that is an ode to well being and
                                                absolute comfort.</p>
                                            <div class="destinations-btn-wrap">
                                                <div class="destination-btn-top">
                                                    <a class="button" href="">Brochure</a>
                                                    <a class="button" href="">Watch video</a>
                                                </div>
                                                <a class="button white" href="">Book now</a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <p class="comm-txt white">Discover the ecological jewel of Seychelles and
                                                private
                                                island home to Six Senses Zil Pasyon. Step in tune with nature, swim with
                                                turtles and enjoy an intimate destination that is an ode to well being and
                                                absolute comfort.</p>
                                            <div class="destinations-btn-wrap">
                                                <div class="destination-btn-top">
                                                    <a class="button" href="">Brochure</a>
                                                    <a class="button" href="">Watch video</a>
                                                </div>
                                                <a class="button white" href="">Book now</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="f-col">
                            <div class="services-swiper swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    $queryObject = new  Wp_Query(array(
                                        'posts_per_page'   => '-1',
                                        'post_type'        => 'destinations',
                                        'post_status'      => 'publish',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'category',
                                                'field' => 'slug',
                                                'terms' => $category_slug
                                            )
                                        )
                                    )); ?>
                                    <?php  $cnt = 1;
                                    if ($queryObject->have_posts()) {
                                        while ($queryObject->have_posts()) : $queryObject->the_post();
                                    ?>
                                    <?php  $banner_section_data = get_field('banner_section');
                                        if( $banner_section_data ): ?>
                                    <div class="swiper-slide">
                                        <div class="alternate-img">
                                            <img src="<?php echo $banner_section_data['banner_image']; ?>" alt="">
                                            <div class="service-txt comm-small-title white">
                                                <h5>0<?php echo $cnt ?></h5>
                                                <h4 class="comm-txt-2 white"><?php the_title() ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                        <?php $cnt++;endwhile;
                                } wp_reset_query();  // Restore global post data stomped by the_post().
                                ?>
                                    <!-- <div class="swiper-slide">
                                        <div class="alternate-img">
                                            <img src="<?php bloginfo('template_url'); ?>/assets//img/destination-1.jpg" alt="">
                                            <div class="service-txt comm-small-title white">
                                                <h5>01</h5>
                                                <h4 class="comm-txt-2 white">Six Senses Zil Pasyon 2</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="alternate-img">
                                            <img src="<?php bloginfo('template_url'); ?>/assets//img/destination-1.jpg" alt="">
                                            <div class="service-txt comm-small-title white">
                                                <h5>01</h5>
                                                <h4 class="comm-txt-2 white">Six Senses Zil Pasyon 3</h4>
                                            </div>
                                        </div>
                                    </div> -->
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

            <?php
            $queryObject = new  Wp_Query(array(
                'posts_per_page'   => '-1',
                'post_type'        => 'destinations',
                'post_status'      => 'publish',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'water-sports'
                    )
                    )
            )); ?>
        <?php  $cnt = 0;
        if ($queryObject->have_posts()) {
            while ($queryObject->have_posts()) : $queryObject->the_post();
        ?>
                <?php  $features_data = get_field('features');
                    if( $features_data ): ?>
            <!-- Features -->
            <div class="comm-section">
                <div class="container">
                    <div class="features-wrap">
                        <div class="promise-left">
                            <div class="comm-head-wrap">
                                <div class="small-head">
                                    <h2><?php echo $features_data['small_text']; ?></h2>
                                </div>
                                <h2 class="comm-head-2">
                                <?php echo $features_data['title']; ?>
                                </h2>
                            </div>
                        </div>
                        <!-- <div class="promise-right"> -->

                        <div class="f-row f-4">
                        <?php $i = 1;
                            if( have_rows('features') ): while ( have_rows('features') ) : the_row(); 
                                if( have_rows('features_cards') ): while ( have_rows('features_cards') ) : the_row();       ?>
                            <div class="f-col">
                                <div class="promise-box">
                                    <div class="promise-icon">
                                        <img src="<?php  echo get_sub_field('icon'); ?>" alt="">
                                    </div>
                                    <p><?php  echo get_sub_field('title'); ?></p>
                                </div>
                            </div>
                            <?php $i++; endwhile; endif;
                            endwhile; endif;
                            ?>
                            <!-- <div class="f-col">
                                <div class="promise-box">
                                    <div class="promise-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets//img/fe-2.svg" alt="">
                                    </div>
                                    <p>Private Pools
                                        & Glorious Views</p>
                                </div>
                            </div>
                            <div class="f-col">
                                <div class="promise-box">
                                    <div class="promise-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets//img/fe-3.svg" alt="">
                                    </div>
                                    <p>Sunset cruise &
                                        Island Hopping</p>
                                </div>
                            </div>
                            <div class="f-col">
                                <div class="promise-box">
                                    <div class="promise-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets//img/fe-4.svg" alt="">
                                    </div>
                                    <p>Turtle Hatching &
                                        Sport Fishing</p>
                                </div>
                            </div>
                            <div class="f-col">
                                <div class="promise-box">
                                    <div class="promise-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets//img/fe-5.svg" alt="">
                                    </div>
                                    <p>Spa & Wellness
                                        Experiences</p>
                                </div>
                            </div>
                            <div class="f-col">
                                <div class="promise-box">
                                    <div class="promise-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets//img/fe-6.svg" alt="">
                                    </div>
                                    <p>Water Sports,
                                        Bike Tours, Hike</p>
                                </div>
                            </div>
                            <div class="f-col">
                                <div class="promise-box">
                                    <div class="promise-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets//img/fe-7.svg" alt="">
                                    </div>
                                    <p>Cinema under
                                        the Stars</p>
                                </div>
                            </div>
                            <div class="f-col">
                                <div class="promise-box">
                                    <div class="promise-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets//img/fe-8.svg" alt="">
                                    </div>
                                    <p>Helicopter Transfer
                                        to/from Resort</p>
                                </div>
                            </div> -->
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <!-- pictures -->
            <?php  $pictures_data = get_field('pictures');
                    if( $pictures_data ): ?>
            <div class="comm-section black-bg">
                <div class="container">
                    <div class="fleet-head">
                        <div class="comm-head-wrap">
                            <div class="small-head white">
                                <h2><?php echo $pictures_data['small_text']; ?></h2>
                            </div>
                            <h2 class="comm-head-2 white">
                            <?php echo $pictures_data['title']; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="fleet-content">
                        <div class="swiper-fleet-1 swiper">
                            <div class="swiper-wrapper">
                            <?php $i = 1;
                            if( have_rows('pictures') ): while ( have_rows('pictures') ) : the_row(); 
                                if( have_rows('images') ): while ( have_rows('images') ) : the_row();       ?>
                                <div class="swiper-slide">
                                    <div class="fleet-img">
                                        <img src="<?php  echo get_sub_field('banner_image'); ?>" alt="">
                                        <div class="service-txt comm-small-title white">
                                            <h4 class="comm-txt-2 white"><?php  echo get_sub_field('title'); ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; endwhile; endif;
                            endwhile; endif;
                            ?>
                                <!-- <div class="swiper-slide">
                                    <div class="fleet-img">
                                        <img src="<?php bloginfo('template_url'); ?>/assets//img/image-gallery-1.jpg" alt="">
                                        <div class="service-txt comm-small-title white">
                                            <h4 class="comm-txt-2 white">Outdoor Pavillion Area</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="fleet-img">
                                        <img src="<?php bloginfo('template_url'); ?>/assets//img/image-gallery-1.jpg" alt="">
                                        <div class="service-txt comm-small-title white">
                                            <h4 class="comm-txt-2 white">Outdoor Pavillion Area</h4>
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
             <?php endwhile;
                                } wp_reset_query();  // Restore global post data stomped by the_post().
                                ?>

        </div>

        </div>
        <!-- Main Container Ends -->




<?php get_footer(); ?>