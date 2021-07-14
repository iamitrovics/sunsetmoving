<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="inner-header" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>

    <div id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span>Posted <Inp>
                            
                            <?php
                            global $post;
                            $categories = get_the_category($post->ID);
                            $cat_link = get_category_link($categories[0]->cat_ID);
                            echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                            ?>                               
                            
                            </Inp> / <?php echo get_the_date( 'F j, Y' ); ?></span>
                        </div>
                        <!-- /.blog-meta -->
                        <div class="blog-content">

                            <?php if( have_rows('content_layout_blog') ): ?>
                                <?php while( have_rows('content_layout_blog') ): the_row(); ?>
                                    <?php if( get_row_layout() == 'intro_text' ): ?>

                                        <div class="intro-text">
                                            <?php the_sub_field('intro_content'); ?>
                                        </div>

                                    <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                                        <div class="full-content">
                                            <?php the_sub_field('content_block'); ?>
                                        </div>

                                    <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                                        <div class="featured-photo">
                                            <?php
                                            $imageID = get_sub_field('featured_image');
                                            $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <div class="caption">
                                                <?php the_sub_field('image_caption'); ?>
                                            </div>
                                        </div>

                                    <?php elseif( get_row_layout() == 'video' ): ?>

                                        <div class="video-holder">
                                            <?php the_sub_field('embedded_code'); ?>
                                        </div>

                                    <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                                        <div class="quote-cta--single">
                                            <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                            <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                        </div>
                                        <!-- // single  -->                                                 

                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <!-- /.blog-content -->
                    </div>
                    <!-- /.blog-body -->

                </div>
                <!-- /.col-md-12 -->

                <div class="col-lg-4">
                    <div id="bottom-form">

                        <?php include(TEMPLATEPATH . '/inc/inc-quote.php'); ?>

                    </div>
                </div>
                <!-- // sidebar form  -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-page -->
   
<?php
get_footer();
