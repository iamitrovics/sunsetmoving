<?php 
/**
 * Homepage / Front Page
**/
get_header(); ?>

    <?php
    $imageID = get_field('background_image_hero_home');
    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    ?> 

    <header id="masheader"  data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="header-caption">
                        <span class="heading-title"><?php the_field('main_title_hero_home'); ?></span>
                        <div class="heading-text">
                            <?php the_field('hero_text_home'); ?>
                        </div>
                        <!-- /.heading-text -->
                        <span class="licensed"><?php the_field('license_text_hero'); ?></span>
                        <!-- /.licensed -->
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-xl-7 col-lg-6 -->
                <div class="col-xl-5 col-lg-6">
                    <?php include(TEMPLATEPATH . '/inc/inc-quote.php'); ?>
                </div>
                <!-- /.col-xl-5 col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <!-- // header  -->

    <div id="services-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1><?php the_field('main_title_services_home'); ?></h1>
                    <div class="services-in">
                        <div class="row">

                            <?php if( have_rows('services_list_home') ): ?>
                                <?php while( have_rows('services_list_home') ): the_row(); ?>

                                    <div class="col-md-4">
                                        <div class="service-item">
                                            <a href="<?php the_sub_field('link_to_service'); ?>">
                                            <?php
                                            $imageID = get_sub_field('featured_image');
                                            $image = wp_get_attachment_image_src( $imageID, 'service-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <span class="service-title"><?php the_sub_field('service_name'); ?></span>
                                            </a>
                                        </div>
                                        <!-- /.service-item -->
                                    </div>
                                    <!-- /.col-md-4 -->

                                <?php endwhile; ?>
                            <?php endif; ?>

                            <div class="col-md-4">
                                <div class="service-item">
                                    <a href="<?php the_field('button_link_serv_home'); ?>">
                                    <span class="text-schedule"><?php the_field('cta_label_serv_home'); ?></span>
                                    </a>
                                </div>
                                <!-- /.service-item -->
                            </div>
                            <!-- /.col-md-4 -->

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.services-in -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#services-area -->

    <?php
    $imageID = get_field('background_image_faq_home');
    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    ?> 

    <section id="faq-area"  style="background-image: url(<?php echo $image[0]; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('main_title_faq_home'); ?></h2>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row no-gutter">
                <div class="col-md-3"></div>
                <!-- /.col-md-3 -->

                <?php if( have_rows('faq_list_home_repe') ): ?>
                    <?php while( have_rows('faq_list_home_repe') ): the_row(); ?>

                        <div class="col-md-3">
                            <div class="mk-flipbox flip-horizontal">
                                <div class="mk-flipbox-holder">
                                    <div class="mk-flipbox-front">
                                        <div class="mk-flipbox-content">
                                            <span class="front-desc"><?php the_sub_field('question'); ?></span>
                                        </div>
                                    </div>
                                    <!-- /.mk-flipbox-front -->
                                    <div class="mk-flipbox-back">
                                        <div class="mk-flipbox-content">
                                            <span class="back-desc"><?php the_sub_field('answer'); ?></span>
                                        </div>
                                    </div>
                                    <!-- /.mk-flipbox-back -->
                                </div>
                                <!-- /.mk-flipbox-holder -->
                            </div>
                            <!-- /.mk-flipbox flip-horizontal -->
                        </div>
                        <!-- /.col-md-3 -->

                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="offset-md-3 col-md-3">
                    <a href="<?php the_field('button_link_faq_home'); ?>" class="read-more"><?php the_field('button_label_faq_home'); ?> »</a>
                    <!-- /.read-more -->
                </div>
                <!-- /.col-md-3 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#faq-area -->

    <section class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('main_title_about_home'); ?></h2>
                    <?php the_field('content_block_about_home'); ?>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.home-section -->

    <?php
    $imageID = get_field('background_image_test_home');
    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    ?> 

    <div id="testimonials" style="background-image: url(<?php echo $image[0]; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('main_title_test_home'); ?></h2>

                        <?php
                            $post_objects = get_field('reviews_list_home');

                            if( $post_objects ): ?>
                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                    <?php setup_postdata($post); ?>

                                        <div class="quote-item">
                                            <div class="star-area">
                                                <span class="mr-star-rating"> 

                                                    <?php if (get_field('review_score_test') == '5') { ?>

                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>                                        

                                                    <?php } elseif (get_field('review_score_test') == '4') { ?>

                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>

                                                    <?php } elseif (get_field('review_score_test') == '3') { ?>

                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>                                            

                                                    <?php } elseif (get_field('review_score_test') == '2') { ?>

                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>

                                                    <?php } elseif (get_field('review_score_test') == '1') { ?>

                                                        <i class="fas fa-star"></i>

                                                    <?php } ?>   

                                                </span>
                                            </div>
                                            <span class="author"><?php the_title(); ?></span>
                                            <?php the_field('review_text_test'); ?>

                                        </div>
                                        <!-- // item  -->

                                <?php endforeach; ?>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    <div class="view-all-holder">
                        <a href="<?php the_field('phone_number_cta_test_home'); ?>"><?php the_field('button_label_test_cta'); ?></a>
                    </div>
                    <!-- /.view-all-holder -->                        

                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#testimonials -->

    <div class="estimate-area">
        <a href="tel:<?php the_field('button_link_tel_home'); ?>"><?php the_field('button_label_tel_home'); ?></a>
    </div>

    <div id="why-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('main_title_why_home'); ?></h2>
                    <div class="why-cols">

                        <?php if( have_rows('why_blocks_home') ): ?>
                            <?php while( have_rows('why_blocks_home') ): the_row(); ?>

                                <div class="why-col">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <ul>
                                        <?php if( have_rows('features_list') ): ?>
                                            <?php while( have_rows('features_list') ): the_row(); ?>
                                                <li><?php the_sub_field('feature'); ?></li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <div class="request-btn">
                                        <a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_label'); ?></a>
                                    </div>
                                    <!-- /.request-btn -->
                                </div>
                                <!-- /.why-col -->

                            <?php endwhile; ?>
                        <?php endif; ?>
                                        
                    </div>
                    <!-- /.why-cols -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#why-us -->

    <div id="bottom-cta">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="bc-left">
                        <h2><?php the_field('main_title_bottom_cta', 'options'); ?></h2>
                        <?php the_field('intro_text_bottom_cta', 'options'); ?>
                        <ul>
                            <?php if( have_rows('services_list_bottom_cta', 'options') ): ?>
                                <?php while( have_rows('services_list_bottom_cta', 'options') ): the_row(); ?>
                                    <li><a href="<?php the_sub_field('link_to_service'); ?>"><img src="<?php the_sub_field('icon'); ?>" alt=""></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- /.bc-left -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="bc-right">
                        <h3><?php the_field('main_title_storage_cta', 'options'); ?></h3>
                        <?php the_field('intro_text_bottom_cta_storage', 'options'); ?>
                        <a href="<?php the_field('button_link_page_cstorage_cta', 'options'); ?>" class="learn-more"><?php the_field('button_label_cta_storage', 'options'); ?> »</a>
                        <!-- /.learn-more -->
                    </div>
                    <!-- /.bc-right -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#bottom-cta -->    

<?php get_footer(); ?>
