<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="google-site-verification" content="JrGPofQ2t4gXA_RXDY0jR1D89mBiTQS2_e2DmCtPU8o" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">
	<?php if( get_field('head_code_snippet', 'options') ): ?>
		<?php the_field('head_code_snippet', 'options'); ?>
	<?php endif; ?>

	<?php if ( is_singular( array('cities', 'post') ) ) { ?>
        
        <?php if( get_field('general_schema_schema', 'options') ): ?>
            <?php the_field('general_schema_schema', 'options'); ?>
        <?php endif; ?>    

    <?php } elseif (is_page_template('page-templates/reviews-template.php')) { ?>
        
        <?php if( get_field('general_schema_schema', 'options') ): ?>
            <?php the_field('general_schema_schema', 'options'); ?>
        <?php endif; ?>    

	<?php } else { ?>

        <?php if( get_field('general_schema_with_reviews', 'options') ): ?>
            <?php the_field('general_schema_with_reviews', 'options'); ?>
        <?php endif; ?>    

	<?php } ?>  

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<?php if( get_field('body_code_snippet', 'options') ): ?>
		<?php the_field('body_code_snippet', 'options'); ?>
	<?php endif; ?>

	<div id="menu_area" class="menu-area">

	<div class="menu-overlay"></div>
	<div class="main-menu-sidebar visible-xs visible-sm visible-md" id="menu">

		<header>
			<a href="javascript:;" class="close-menu-btn"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" class="svg-inline--fa fa-times fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path></svg></a>
		</header>
		<!-- // header  -->

		<nav id="sidebar-menu-wrapper">
			<div id="menu">    
				<ul class="nav-links">
					<?php
					wp_nav_menu( array(
						'menu'              => 'mobile',
						'theme_location'    => 'mobile',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => false,
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'items_wrap' => '%3$s',
						'walker'            => new wp_bootstrap_navwalkermobile())
					);
					?>  
				</ul>
			</div>
			<!-- // menu  -->
		</nav> 
		<!-- // sidebar menu wrapper  -->

	</div>
	<!-- // main menu sidebar  -->		

	<div id="menu-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-action-btns">
						<a href="<?php the_field('button_link_top_cta', 'options'); ?>"><span class="icon-pencil"></span> <?php the_field('label_top_cta', 'options'); ?></a>

							<?php 
							$values = get_field( 'phone_number_city' );
							if ( $values ) { ?>
								<a href="tel:<?php the_field('phone_number_city'); ?>"><span class="icon-phone"></span><?php the_field('phone_number_city'); ?></a>
							<?php 
							} else { ?>
								<a href="tel:<?php the_field('main_phone_number_top_gen', 'options'); ?>"><span class="icon-phone"></span><?php the_field('main_phone_number_top_gen', 'options'); ?></a>
							<?php } ?>

					</div>
					<!-- /.top-action-btns -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<nav class="mainmenu">
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('website_logo_general', 'options'); ?>" alt=""></a>
						<!-- /.navbar-brand -->
						<div class="collapse navbar-collapse">
							<ul class="navbar-nav ml-auto">

								<?php if( have_rows('menu_items_header_main', 'options') ): ?>
									<?php while( have_rows('menu_items_header_main', 'options') ): the_row(); ?>

										<?php if (get_sub_field('link_type') == 'Single Item') { ?>
											<li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('item_label'); ?></a></li>
										<?php } elseif (get_sub_field('link_type') == 'Dropdown') { ?>

											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php the_sub_field('link_to_page'); ?>" aria-expanded="false"><?php the_sub_field('item_label'); ?></a>
												<ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">
													<?php if( have_rows('dropdown_items') ): ?>
														<?php while( have_rows('dropdown_items') ): the_row(); ?>
															<li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('label'); ?></a></li>
														<?php endwhile; ?>
													<?php endif; ?>
												</ul>
											</li>													

										<?php } elseif (get_sub_field('link_type') == 'Dropdown Multilevel') { ?>

											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('item_label'); ?></a>
												<ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">

													<?php if( have_rows('multilevel_items') ): ?>
														<?php while( have_rows('multilevel_items') ): the_row(); ?>

															<?php if (get_sub_field('type_of_item') == 'Single Items') { ?>

																<li><a href="<?php the_sub_field('item_link'); ?>"><?php the_sub_field('item_label_sub'); ?></a></li>

															<?php } elseif (get_sub_field('type_of_item') == 'Dropdown Items') { ?>
																<li class="dropdown">
																	<a class="dropdown-toggle" href="<?php the_sub_field('item_link'); ?>" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php the_sub_field('item_label_sub'); ?></a>
																	<ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">
																		<?php if( have_rows('dropdown_items_sub') ): ?>
																		<?php while( have_rows('dropdown_items_sub') ): the_row(); ?>

																			<li><a href="<?php the_sub_field('link_sub_sub'); ?>"><?php the_sub_field('label_sub_sub'); ?></a></li>

																		<?php endwhile; ?>
																		<?php endif; ?>
																	</ul>
																</li>
															<?php } ?>   																

														<?php endwhile; ?>
													<?php endif; ?>

												</ul>
											</li>

										<?php } ?>   

										<?php endwhile; ?>
									<?php endif; ?>

							</ul>
							<!-- /.navbar-nav -->
							<div id="top__mobile">
								<a href="javascript:;" class="menu-btn">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
							<!-- /#top__mobile -->
						</div>
						<!-- /.navbar-collapse -->
					</nav>
					<!-- /.mainmenu -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.continer -->
	</div>
	<!-- /#menu-wrapper -->

	</div>
	<!-- // desktop menu  --> 		