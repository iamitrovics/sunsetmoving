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
    $imageID = get_field('background_image_serv_single');
    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    ?> 

    <!--<header id="masheader"  data-parallax="scroll" style="background-image: url(img/bg/internationalmovers-air-bg.jpg)" class="parallax">-->
    <header id="masheader"  data-parallax="scroll" style="background:url('<?php echo $image[0]; ?>');background-size:cover;background-position:center center;"  data-image-src="<?php echo $image[0]; ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="header-caption">

                        <?php 
                        $values = get_field( 'custom_title_serv_header' );
                        if ( $values ) { ?>
                            <h1><?php the_field('custom_title_serv_header'); ?></h1>
                        <?php 
                        } else { ?>
                            <h1><?php the_title(); ?></h1>
                        <?php } ?>

                        <div class="heading-text">
                            <?php the_field('hero_text_serv_hero'); ?>
                        </div>
                        <!-- /.heading-text -->
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

    <section id="services-page">
        <div class="container">

            <?php if( have_rows('content_layout_single_serv') ): ?>
                <?php while( have_rows('content_layout_single_serv') ): the_row(); ?>
                    <?php if( get_row_layout() == 'full_width_content' ): ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="about-body">
                                    
                                    <?php the_sub_field('content_block'); ?>

                                </div>
                                <!-- /.about-body -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->

                    <?php elseif( get_row_layout() == 'two_columns' ): ?>

                        <div class="row moving-list">
                            <div class="col-md-6">
                                <?php the_sub_field('content_left'); ?>
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <?php the_sub_field('content_right'); ?>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->

                    <?php elseif( get_row_layout() == 'image_left_text_right' ): ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="featured-photo half-img">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    <div class="caption">
                                        <?php the_sub_field('image_caption'); ?>
                                    </div>
                                </div>
                            </div> <!-- col-md-6 -->
                            <div class="col-md-6">
                                <?php the_sub_field('content_block'); ?>
                            </div> <!-- col-md-6 -->
                        </div>
                        <!-- /.row -->   

                    <?php elseif( get_row_layout() == 'image_right_text_left' ): ?>

                        <div class="row">
                            <div class="col-md-6">
                                <?php the_sub_field('content_block'); ?>
                            </div> <!-- col-md-6 -->
                            <div class="col-md-6">
                                <div class="featured-photo half-img">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    <div class="caption">
                                        <?php the_sub_field('image_caption'); ?>
                                    </div>
                                </div>
                            </div> <!-- col-md-6 -->
                        </div>
                        <!-- /.row -->   

                    <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                        <div class="featured-photo">
                            <?php
                            $imageID = get_sub_field('featured_image');
                            $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                            ?> 

                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                            <div class="caption">
                                <?php the_sub_field('image_caption'); ?>
                            </div>
                        </div>

                    <?php elseif( get_row_layout() == 'video' ): ?>

                        <div class="video-holder">
                            <?php the_sub_field('embedded_code'); ?>
                        </div>

                    <?php elseif( get_row_layout() == 'accordion' ): ?>				

                        <div id="blog-accordion">

                            <?php if( get_sub_field('accordion_title') ): ?>
                                <h3><?php the_sub_field('accordion_title'); ?></h3>
                            <?php endif; ?>

                            <?php if( have_rows('accordion_list') ): ?>
                                <?php while( have_rows('accordion_list') ): the_row(); ?>

                                    <div class="set">
                                        <a href="#" class="accordion-heading"><?php the_sub_field('heading'); ?></a>
                                        <div class="content">
                                            <?php the_sub_field('content'); ?>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <!-- /#blog-accordion -->

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- /.container -->
    </section>
    <!-- /#about-area -->

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
   
<?php
get_footer();
