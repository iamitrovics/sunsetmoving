<?php
/*
 * Template Name: Parent Child Template
 * Template Post Type: post
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
                            <div class="author-desc">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
                                <div class="author-content">
                                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                                    <p><?php the_author_description(); ?></p>
                                </div>
                                <!-- /.author-content -->
                            </div> 
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
                                        
                                    <?php elseif( get_row_layout() == 'table' ): ?>

                                    <table style="width:100%" class="single-table">
                                        <thead>
                                            <tr role="row">

                                            <?php

                                                // check if the repeater field has rows of data
                                                if(have_rows('table_head_cells')):

                                                    // loop through the rows of data
                                                    while(have_rows('table_head_cells')) : the_row();

                                                        $hlabel = get_sub_field('table_cell_label_thead');

                                                        ?>  

                                                        <th tabindex="0" rowspan="1" colspan="1"><?php echo $hlabel; ?></th>

                                                    <?php endwhile;

                                                else :
                                                    echo 'No data';
                                                endif;
                                                ?>

                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php while ( have_posts() ) : the_post(); ?>

                                            <?php 

                                            // check for rows (parent repeater)
                                            if( have_rows('table_body_row') ): ?>
                                                
                                                <?php 

                                                // loop through rows (parent repeater)
                                                while( have_rows('table_body_row') ): the_row(); ?>

                                                        <?php 

                                                        // check for rows (sub repeater)
                                                        if( have_rows('table_body_cells') ): ?>
                                                            <tr>
                                                                <?php 

                                                                // loop through rows (sub repeater)
                                                                while( have_rows('table_body_cells') ): the_row();

                                                                    
                                                                    ?>
                                                                    <td><?php the_sub_field('table_cell_label_tbody'); ?></td>
                                                                <?php endwhile; ?>
                                                            </tr>
                                                        <?php endif; //if( get_sub_field('') ): ?>

                                                <?php endwhile; // while( has_sub_field('') ): ?>
                                                    
                                            <?php endif; // if( get_field('') ): ?>

                                            <?php endwhile; // end of the loop. ?>
                                            
                                        </tbody>
                                    </table>                                

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

                    <div class="sidebar-box">
                        <h3>City Guides</h3>
                        <?php if( have_rows('list_of_posts_parent') ): ?>
                        <div id="post-nav">
                            <div class="post-wrapper">                           
                                    
                                <?php while( have_rows('list_of_posts_parent') ): the_row(); ?>

                                    <div class="nav-col">
                                        <a href="<?php the_sub_field('link_to_post'); ?>">
                                            <div class="icon">
                                                <img src="<?php the_sub_field('icon'); ?>" alt="">
                                            </div>
                                            <span><?php the_sub_field('label'); ?></span>
                                        </a>
                                    </div>
                                    <!-- // col  -->

                                <?php endwhile; ?>

                            </div>
                            <!-- // wrapper  -->
                        </div>
                        <!-- // post nav  -->
                        <?php endif; ?>                            
                    </div>

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