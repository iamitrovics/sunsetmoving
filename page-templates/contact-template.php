<?php
/**
 * Template Name: Contact Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_contact_header');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?>

	<header id="masheader" data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>" class="shipment-tracking-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="header-caption">
						<h1><?php the_field('main_title_contact_header'); ?></h1>
						<div class="heading-text">
							<?php the_field('hero_text_contact_header'); ?>
						</div>
					</div>
					<!-- /.header-caption -->
				</div>
				<!-- /.col-lg-6 -->

				<div class=" col-lg-6">
					<div class="quote-form">
						<div class="quote-form-in">
							<span class="quote-title"><?php the_field('form_title_contact_page'); ?></span>
							<?php the_field('form_code_contact_page'); ?>
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

