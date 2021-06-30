<?php
/**
 * Template Name: Container Sizes Template
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
				<h1><?php the_field('custom_title_contaienr_header'); ?></h1>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</header>

	<section id="about-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="container-sizes">

						<?php if( have_rows('container_list_repe') ): ?>
							<?php while( have_rows('container_list_repe') ): the_row(); ?>

							<div class="container-photo">
								<img src="<?php the_sub_field('featured_image'); ?>" alt="">
							</div>
							<!-- /.container-photo -->
							<div class="container-table">
								<h2><?php the_sub_field('title'); ?></h2>
								<?php the_sub_field('table'); ?>
							</div>
							<!-- /.container-table -->

							<?php endwhile; ?>
						<?php endif; ?>

					</div>
					<!-- /#container-sizes -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /#about-page -->	

<?php get_footer(); ?>

