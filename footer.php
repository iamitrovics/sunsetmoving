<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

	<footer id="page-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="trusted-logos">
						<ul>

							<?php if( have_rows('certifications_list', 'options') ): ?>
								<?php while( have_rows('certifications_list', 'options') ): the_row(); ?>

									<li>
										<?php the_sub_field('cert_code'); ?>
									</li>

								<?php endwhile; ?>
							<?php endif; ?>

						</ul>
					</div>
					<div class="footer-licence">
						<?php the_field('license_code_footer', 'options'); ?>
					</div>
					<!-- /.footer-licence -->
					<div class="cities-list">
						<?php wp_nav_menu( array( 'theme_location' => 'citiesmenu' ) ); ?>
					</div>
					<!-- /.cities-list -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<small><?php the_field('copyright_notice_footer', 'options'); ?> 
							<ul>
							<?php wp_nav_menu( array(  'container_class' => false, 'container' => '' , 'menu_class' => 'menu-links', 'theme_location' => 'copymenu', 'items_wrap' => '%3$s'  ) ); ?>
							</ul>
						</small>
					</div>
					<!-- /.col-md-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.copyright -->
	</footer>
	<!-- /#page-footer -->

	<?php if ( get_field( 'display_settings_cookies', 'options' ) ): ?>
	<div id="cookie-notice">
		<div id="cookie-notice-in">
			<div class="notice-text">
				<?php the_field('notice_text_cookies', 'options'); ?>
			</div>
			<!-- /.notice-text -->
			<div class="notice-btns">
				<a href="#" id="accept-cookie"><?php the_field('button_1_label_cookies', 'options'); ?></a>
				<a href="<?php the_field('button_link_cooke_2', 'options'); ?>"><?php the_field('button_2_label_cooki', 'options'); ?></a>
			</div>
			<!-- /.notice-btns -->
			<a href="javascript:void(0);" id="close-notice"></a>
		</div>
		<!-- /#cookie-notice-in -->
	</div>
		<!-- /#cookie-notice -->
	<?php else: ?>
	<?php endif; ?>	

	<a id="go-to-top" href="javascript:;"><i class="fas fa-chevron-up"></i></a>

	<div class="modal-overlay disclaimer-modal" data-my-element="tooltip-modal">
		<div class="modal" data-my-element="tooltip-modal">
			<a class="close-modal">
				<img src="<?php bloginfo('template_directory'); ?>/img/ico/close.svg" alt="">
			</a>
			<!-- close modal -->
			<div class="disclaimer-modal-wrap">
				<?php the_field('tooltip_content_modal', 'options'); ?>
			</div>
			<!-- /.disclaimer-modal-wrap -->
		</div>
		<!-- modal -->
	</div>
	<!-- overlay -->	

	<?php wp_footer(); ?>

	<?php if( get_field('footer_code_snippet', 'options') ): ?>
		<?php the_field('footer_code_snippet', 'options'); ?>
	<?php endif; ?>


</body>
</html>

