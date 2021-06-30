<?php
/**
 * Template Name: FAQ Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <?php
    $imageID = get_field('background_image_hero_faq');
    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    ?> 

    <header id="masheader" data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="header-caption">
                        <h1><?php the_field('main_title_header_faq'); ?></h1>
                        <div class="heading-text">
                            <?php the_field('hero_text_hero_faq'); ?>
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
    
    <div id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="faq-accordion">

                        <?php if( have_rows('faq_list_faq') ): ?>
                            <?php while( have_rows('faq_list_faq') ): the_row(); ?>

                                <div class="set">
                                    <a href="#" class="accordion-heading"><?php the_sub_field('question'); ?></a>
                                    <div class="content">
                                        <?php the_sub_field('answer'); ?>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <!-- /#faq-accordion -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#faq -->

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

