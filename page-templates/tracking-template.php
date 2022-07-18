<?php
/**
 * Template Name: Shipment Tracking Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_free_track');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 

    <header id="masheader" style="background:url('<?php echo $image[0]; ?>');background-size:cover;background-position:center center;"  data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>" class="shipment-tracking-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-caption">
                    <h1><?php the_field('main_title_free_track'); ?></h1>
                </div>
                <!-- /.header-caption -->
            </div>
            <!-- /.col-lg-6 -->
            <div class=" col-lg-6">
                <div class="quote-form">
                    <div class="quote-form-in">
                        <span class="quote-title"><?php the_field('form_title_free_track'); ?></span>
                        <?php the_field('form_text_track'); ?>
                        <?php the_field('form_code_free_track'); ?>
                    </div>
                    <!-- /.quote-form-in -->
                </div>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
	
<?php get_footer(); ?>

