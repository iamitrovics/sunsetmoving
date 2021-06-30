<?php
/**
 * Template Name: Portfolio Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_free_port');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 

    <header id="masheader" data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>" class="shipment-tracking-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="header-caption">
                        <h1><?php the_field('main_title_free_port'); ?></h1>
                        <div class="heading-text">
                            <?php the_field('hero_text_free_quote_port'); ?>
                        </div>
                        <!-- /.heading-text -->
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-xl-7 col-lg-6 -->
                <div class="col-xl-5 col-lg-6">
                    <div class="quote-form">
                        <div class="quote-form-in">
                            <span class="quote-title"><?php the_field('form_title_free_port'); ?></span>
                            <!-- /.quote-title -->
                            <?php the_field('form_code_free_port'); ?>
                        </div>
                        <!-- /.quote-form-in -->
                    </div>
                    <!-- /.quote-form -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>

    <div id="portfolio">
        <div class="container">
            <div class="row">

                <?php 
                $images = get_field('photo_gallery_portf');
                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <div class="col-md-4">
                            <div class="portfolio-card">
                                <a href="<?php echo $image['url']; ?>">
                                    <img src="<?php echo $image['sizes']['city-image']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" />     
                                </a>                            
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>                

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // portfolio  -->

<?php get_footer(); ?>

