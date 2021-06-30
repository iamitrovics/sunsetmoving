<?php
/**
 * Template Name: Services Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<header id="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h1><?php the_field('main_title_serv_header'); ?></h1>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</header>

	<section id="services-list">
		<div class="container">
			<div class="row">

				<?php
				$loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 15) ); ?>  
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-lg-4 col-md-6">
						<div class="service-card">
							<a href="<?php echo get_permalink(); ?>">
								<div class="service-image">
									<?php
									$imageID = get_field('background_image_serv_single');
									$image = wp_get_attachment_image_src( $imageID, 'half-image' );
									$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
									?> 

									<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
								</div>
								<!-- // image  -->

								<div class="service-desc">
									<h3><?php the_title(); ?></h3>
								</div>
								<!-- // desc  -->
							</a>
						</div>
					</div>	
					<!-- // card  -->

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>      

			</div>
			<!-- // row  -->
		</div>
		<!-- // container  -->
	</section>
	<!-- // list  -->
		
<?php get_footer(); ?>

