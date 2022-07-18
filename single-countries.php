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
    $imageID = get_field('background_image_country');
    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    ?> 


    <header id="masheader" data-parallax="scroll" style="background:url('<?php echo $image[0]; ?>');background-size:cover;background-position:center center;"  data-image-src="<?php echo $image[0]; ?>" class="city-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="header-caption">

                        <?php 
                        $values = get_field( 'main_title_country' );
                        if ( $values ) { ?>
                        <h1><?php the_field('main_title_country'); ?></h1>
                        <?php 
                        } else { ?>
                            <h1><?php the_title(); ?></h1>
                        <?php } ?>

                        
                        <div class="heading-text">
                            <?php the_field('hero_text_country'); ?>
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

    <div id="single-country">
        <div class="container">
            <div class="row">
                            
                <div class="col-lg-10 offset-lg-1">

                <?php if( have_rows('content_layout_country') ): ?>
                    <?php while( have_rows('content_layout_country') ): the_row(); ?>
                        <?php if( get_row_layout() == 'full_width_content' ): ?>

                            <div class="content">
                                <?php the_sub_field('content_block'); ?>
                            </div>

                        <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                            <div class="full-image">
                                <?php
                                $imageID = get_sub_field('featured_image');
                                $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 

                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                             
                            </div>

                        <?php elseif( get_row_layout() == 'image_left_content_right' ): ?>

                            <div class="row row-content">
                                <div class="col-md-5">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                              
                                </div>
                                <div class="col-md-7">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                            </div>

                        <?php elseif( get_row_layout() == 'content_left_image_right' ): ?>

                            <div class="row row-content">
                                <div class="col-md-7">
                                    <?php the_sub_field('content_block'); ?>
                                </div>                        
                                <div class="col-md-5">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                             
                                </div>
                            </div>                    

                        <?php elseif( get_row_layout() == 'cta' ): ?>

                            <div class="cta-text">
                                <?php the_sub_field('cta_text'); ?>
                            </div>

                        <?php elseif( get_row_layout() == 'map' ): ?>

                            <div class="map-holder">
                                <?php the_sub_field('map_code'); ?>
                            </div>

                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

                </div>

            </div>
            <!-- // row  -->
        
        </div>
        <!-- // container  -->
    </div>
    <!-- // single  -->

 
<?php
get_footer();
