<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <?php
    $imageID = get_field('background_image_ctity_header');
    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    ?> 


    <header id="masheader" data-parallax="scroll" style="background:url('<?php echo $image[0]; ?>');background-size:cover;background-position:center center;" data-image-src="<?php echo $image[0]; ?>" class="city-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="header-caption">
                        <?php 
                        $values = get_field( 'custom_title_city_header' );
                        if ( $values ) { ?>
                        <h1><?php the_field('custom_title_city_header'); ?></h1>
                        <?php 
                        } else { ?>
                            <h1><?php the_title(); ?></h1>
                        <?php } ?>

                        
                        <div class="heading-text">
                            <?php the_field('hero_text_city_header'); ?>
                        </div>
                        <!-- /.heading-text -->
                    </div>
                    <!-- /.header-caption -->
                    <div class="trusted-logos">
                        <ul>
                            <li><a href="<?php the_field('yelp_link_city', 'options'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logos/yelp-150x150.png" alt="Yelp" width="100" height="100">ca</a></li>
                            <li><a href="<?php the_field('fmc_link_city', 'options'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/img/logos/fmc-150x150.png" alt="FMC" width="100" height="100"></a></li>
                            <li><a href="<?php the_field('bbb_link_city', 'options'); ?>" target="_blank" ><img src="<?php bloginfo('template_directory'); ?>/img/logos/bbb-150x150.png?x93874" alt="BBB" width="100" height="100"></a></li>
                        </ul>
                    </div>
                    <!-- /.trusted-logos -->
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

    <?php if( have_rows('content_layout_city') ): ?>
        <?php while( have_rows('content_layout_city') ): the_row(); ?>
            <?php if( get_row_layout() == 'intro' ): ?>

                <section id="city-intro">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="city-intro-content">
                                    <?php if( get_sub_field('main_title') ): ?>
                                        <h2><?php the_sub_field('main_title'); ?></h2>
                                    <?php endif; ?>
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <!-- /.city-intro-content -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-4">
                                <div class="city-intro-photo">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'city-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                </div>
                                <!-- /.city-intro-photo -->
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /#city-intro -->

            <?php elseif( get_row_layout() == 'image_left_content_right' ): ?>

                <section class="city-more">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 cm-photo-wrap">
                                <div class="cm-photo">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                </div>
                                <!-- /.cm-photo -->
                            </div>
                            <!-- /.cm-photo-wrap -->
                            <div class="offset-md-6 col-md-6">
                                <div class="cm-content">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <!-- /.cm-content -->
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /#city-more -->      
                
            <?php elseif( get_row_layout() == 'image_right_content_left' ): ?>

                <section class="city-more right-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 right-img-col">
                                <div class="cm-content">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <!-- /.cm-content -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6 cm-photo-wrap">
                                <div class="cm-photo">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                </div>
                                <!-- /.cm-photo -->
                            </div>
                            <!-- /.cm-photo-wrap -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /#city-more -->   

            <?php elseif( get_row_layout() == 'full_width_section' ): ?>

                <section id="full-width-content">
                    <div class="container">
                        <div class="row">
                            <div class="offset-md-1 col-md-10">
                                <?php the_sub_field('full_width_content'); ?>
                            </div>
                            <!-- /.cm-photo-wrap -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /#city-more -->   

            <?php elseif( get_row_layout() == 'services' ): ?>

                <section id="city-services">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="city-services-intro">
                                    <?php the_sub_field('intro_text_serv'); ?>
                                </div>
                                <!-- /.city-services-intro -->                            
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-10 offset-xl-1">

                                <?php 
                                $values = get_sub_field( 'services_list' );
                                if ( $values ) { ?>

                                    <?php
                                        $post_objects = get_sub_field('services_list');

                                        if( $post_objects ): ?>
                                            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                <?php setup_postdata($post); ?>

                                                <div class="city-services-item">
                                                    <div class="row">
                                                        <div class="offset-lg-1 col-lg-4 col-md-6">
                                                            <div class="city-services-content">
                                                                <?php the_field('icon_serv'); ?>
                                                                <h3><?php the_title(); ?></h3>
                                                                <?php the_field('short_description_serv_listing'); ?>
                                                                <p><a href="<?php echo get_permalink(); ?>">Learn More</a></p>
                                                            </div>
                                                            <!-- /.city-services-content-->
                                                        </div>
                                                        <!-- /.col-md-4 -->
                                                        <div class="offset-lg-1 col-md-6">
                                                            <div class="city-services-photo">
                                                                <?php
                                                                $imageID = get_field('featured_image_serv_feat');
                                                                $image = wp_get_attachment_image_src( $imageID, 'side-imag' );
                                                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                                ?> 

                                                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                            </div>
                                                            <!-- /.city-services-photo -->
                                                        </div>
                                                        <!-- /.offset-md-1 col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.city-services-item -->

                                            <?php endforeach; ?>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>                                  
                                
                                <?php 
                                } else { ?>

                                    <?php
                                        $post_objects = get_field('default_services_list', 'options');

                                        if( $post_objects ): ?>
                                            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                <?php setup_postdata($post); ?>

                                                <div class="city-services-item">
                                                    <div class="row">
                                                        <div class="offset-lg-1 col-lg-4 col-md-6">
                                                            <div class="city-services-content">
                                                                <?php the_field('icon_serv'); ?>
                                                                <h3><?php the_title(); ?></h3>
                                                                <?php the_field('short_description_serv_listing'); ?>
                                                                <p><a href="<?php echo get_permalink(); ?>">Learn More</a></p>
                                                            </div>
                                                            <!-- /.city-services-content-->
                                                        </div>
                                                        <!-- /.col-md-4 -->
                                                        <div class="offset-lg-1 col-md-6">
                                                            <div class="city-services-photo">
                                                                <?php
                                                                $imageID = get_field('featured_image_serv_feat');
                                                                $image = wp_get_attachment_image_src( $imageID, 'side-imag' );
                                                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                                ?> 

                                                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                            </div>
                                                            <!-- /.city-services-photo -->
                                                        </div>
                                                        <!-- /.offset-md-1 col-md-6 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.city-services-item -->

                                            <?php endforeach; ?>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>    
                                    
                                <?php } ?>

                            </div>
                            <!-- /.col-xl-10 offset-xl-1 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /#city-services -->
                
                <div class="city-contact-point">
                    <a href="#city-contact"><i class="far fa-angle-down"></i> Contact Us Now</a>
                </div>

            <?php elseif( get_row_layout() == 'reviews' ): ?>

                <div id="testimonials" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/bg/internationalmovers-testimonials2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><?php the_field('reviews_title_gen_city', 'options'); ?></h2>

                                <?php
                                    $post_objects = get_sub_field('reviews_list');

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


                                <div class="view-all-holder">
                                    <a href="<?php the_field('button_link_rev_gen'); ?>"><?php the_field('button_label_reviews_gen', 'options'); ?></a>
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

            <?php elseif( get_row_layout() == 'why_choose_us' ): ?>

                <div id="why-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><?php the_field('main_title_why_gen', 'options'); ?></h2>
                                <div class="why-cols">

                                    <?php if( have_rows('why_us_blocks_repe', 'options') ): ?>
                                    <?php while( have_rows('why_us_blocks_repe', 'options') ): the_row(); ?>

                                        <div class="why-col">
                                            <h3><?php the_sub_field('main_title'); ?></h3>
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

            <?php elseif( get_row_layout() == 'contact_us' ): ?>

                <section id="city-contact">
                    <div class="container-fluid">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="city-map">
                                    <?php the_sub_field('map_code'); ?>
                                </div>
                                <!-- /.city-map -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="city-contact-content">

                                    <?php 
                                    $values = get_sub_field( 'main_title' );
                                    if ( $values ) { ?>
                                            <h2><?php the_sub_field('main_title'); ?></h2>
                                    <?php 
                                    } else { ?>
                                            <h2><?php the_field('main_title_con_genel', 'options'); ?></h2>
                                    <?php } ?>

                                    <div class="contact-info">

                                        <?php 
                                        $values = get_sub_field( 'company_title' );
                                        if ( $values ) { ?>
                                            <p><strong><?php the_sub_field('company_title'); ?></strong></p>
                                        <?php 
                                        } else { ?>
                                            <p><strong><?php the_sub_field('company_title_gen_cont', 'options'); ?></strong></p>
                                        <?php } ?>

                                        <?php 
                                        $values = get_sub_field( 'phone_number' );
                                        if ( $values ) { ?>
                                            <p><strong>Phone :</strong> <a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></p>
                                        <?php 
                                        } else { ?>
                                            <p><strong>Phone :</strong> <a href="tel:<?php the_field('phone_number_contact_cta_gen', 'options'); ?>"><?php the_field('phone_number_contact_cta_gen', 'options'); ?></a></p>
                                        <?php } ?>

                                        <?php 
                                        $values = get_sub_field( 'email_address' );
                                        if ( $values ) { ?>
                                            <p><strong>Email :</strong> <a href="mailto:<?php the_sub_field('email_address'); ?>"> <?php the_sub_field('email_address'); ?></a></p>
                                        <?php 
                                        } else { ?>
                                            <p><strong>Email :</strong> <a href="mailto:<?php the_field('email_address_contact_gen_cta', 'options'); ?>"> <?php the_field('email_address_contact_gen_cta', 'options'); ?></a></p>
                                        <?php } ?>

                                    </div>
                                    <!-- /.contact-info -->
                                </div>
                                <!-- /.city-contact-content --> 
                            </div>
                            <!-- /.col-md-6 -->
                            
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /#city-contact -->

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>


<?php
get_footer();
