<?php
/**
 * Template Name: Schedule Estimate Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_free_sch');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 

    <header id="masheader" data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>" class="shipment-tracking-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="header-caption schedule-caption">
                        <h1><?php the_field('main_title_free_sch'); ?></h1>
                        <h2><?php the_field('subtitle_sch'); ?></h2>
                        <div class="heading-text">
                            <?php the_field('hero_text_free_quote_sch'); ?>
                            <a href="<?php the_field('cta_link_sch'); ?>" class="btn-cta"><?php the_field('cta_button_schedule'); ?></a>
                        </div>
                        <!-- /.heading-text -->
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-xl-7 col-lg-6 -->
                <div class="col-xl-5 col-lg-6">
                    <div class="quote-form">
                        <div class="quote-form-in">
                            <span class="quote-title"><?php the_field('form_title_free_sch'); ?></span>
                            <!-- /.quote-title -->
                            <?php the_field('form_code_free_sch'); ?>
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

<?php get_footer(); ?>

