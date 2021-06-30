<?php
/**
 * Template Name: About Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_about_header');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 

	<header id="masheader" data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-caption">
						<h1><?php the_field('main_title_about_header'); ?></h1>
						<div class="heading-text">
							<?php the_field('hero_text_about_header'); ?>
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
	
	<section id="about-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php the_field('about_content_full'); ?>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.about-page-->

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

