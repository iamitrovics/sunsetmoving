<?php
/**
 * Template Name: Areas Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_areas');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 

	<header id="masheader" data-parallax="scroll" style="background:url('<?php echo $image[0]; ?>');background-size:cover;background-position:center center;"  data-image-src="<?php echo $image[0]; ?>">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="header-caption">
						<h1><?php the_field('custom_title_areas_header'); ?></h1>
						<div class="heading-text">
							<?php the_field('hero_text_areas_header'); ?>
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
	
	<section id="about-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php the_field('intro_text_areas_list'); ?>

					<div class="countries-list">

						<h3><?php the_field('main_title_con_list'); ?></h3>

						<div class="row">

							<?php if( have_rows('countries_list_repe') ): ?>
								<?php while( have_rows('countries_list_repe') ): the_row(); ?>

									<div class="col-md-4">
										<p><strong>-<?php the_sub_field('first_letter'); ?>-</strong></p>
										<ul>
											<?php if( have_rows('list_of_countries_inner') ): ?>
												<?php while( have_rows('list_of_countries_inner') ): the_row(); ?>
													<li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('country_name'); ?></a></li>
												<?php endwhile; ?>
											<?php endif; ?>

										</ul>
									</div>
							<!-- /.col -->

								<?php endwhile; ?>
							<?php endif; ?>

						</div>
						<!-- /.row -->
					</div>
					<!-- /.countries-list -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /#about-area -->

<?php get_footer(); ?>

