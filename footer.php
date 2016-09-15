<?php
/**
 * @package Academica
 */
?>
</body>
<div id="footer" class="footer-wrap">
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

		<section class="site-widgetized-section">
			<div class="widgets clearfix <?php echo academica_widgets_count_class( 'sidebar-3' ); ?>">

				 <?php dynamic_sidebar( 'sidebar-3' ); ?>

			</div>
		</section><!-- .site-widgetized-section -->

	<?php endif; ?>

	<?php wp_nav_menu( array( 'container' => false, 'depth' => 1, 'theme_location' => 'footer', 'fallback_cb' => false ) ); ?>
	<p class="copy">
 	<?php academica_the_footer_text( 'two' ); ?>
	</p>

		<?php /*</div><!-- end #wrap -->*/?>

<?php wp_footer(); ?>
</div><!-- end #footer -->
</html>