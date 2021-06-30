<?php
/**
 * Template Name: Reviews Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_reviews_header');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 

	<header id="masheader" data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-caption">
						<h1><?php the_field('main_title_header_reviews'); ?></h1>
						<div class="heading-text">
							<?php the_field('header_text_header_reviews'); ?>
						</div>
						<!-- /.heading-text -->
					</div>
					<!-- /.header-caption -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</header>
	
	<section id="testimonials-page">
		<div class="container">
			<div class="row">

				<?php
				$loop = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => 115) ); ?>  
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-md-6">
						<div class="testimonial-item">
							<!-- /.subject -->
							<?php the_field('review_text_test'); ?>
							<span class="author"><?php the_title(); ?></span>

							<?php if (get_field('review_score_test') == '5') { ?>

								<span class="rating">Rating: 5 out of 5</span>
								<div class="star-area">
									<span class="mr-star-rating"> 
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									</span>
								</div>							

							<?php } elseif (get_field('review_score_test') == '4') { ?>

								<span class="rating">Rating: 5 out of 5</span>
								<div class="star-area">
									<span class="mr-star-rating"> 
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									</span>
								</div>							

							<?php } elseif (get_field('review_score_test') == '3') { ?>

								<span class="rating">Rating: 5 out of 5</span>
								<div class="star-area">
									<span class="mr-star-rating"> 
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									</span>
								</div>							

							<?php } elseif (get_field('review_score_test') == '2') { ?>

								<span class="rating">Rating: 5 out of 5</span>
								<div class="star-area">
									<span class="mr-star-rating"> 
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									</span>
								</div>							

							<?php } elseif (get_field('review_score_test') == '1') { ?>

								<span class="rating">Rating: 5 out of 5</span>
								<div class="star-area">
									<span class="mr-star-rating"> 
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									</span>
								</div>							

							<?php } ?>   							
														
						</div>
						<!-- /.testimonial-item -->
					</div>
					<!-- /.col-md-6 -->

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>      

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
		<div id="review-form">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2><?php the_field('main_title_write_review'); ?></h2>
						<?php the_field('form_code_write_review'); ?>
					</div>
					<!-- /.col-md-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /#review-form -->
	</section>
	<!-- /#testimonials-page -->

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
	
<?php get_footer(); ?>

