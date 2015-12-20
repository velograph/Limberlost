<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Limberlost
 */
?>

	</div><!-- #content -->

	<section class="instagram">

		<?php echo do_shortcode('[instagram-feed]'); ?>

	</section>

	<footer class="footer">

		<div class="footer-section site-logo">
			logo
		</div>
		<div class="footer-section primary-menu">
			<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
		</div>
		<div class="footer-section supporting-menu">
			<?php wp_nav_menu( array('theme_location' => 'supporting')); ?>
		</div>
		<div class="footer-section social-media">
			Facebook<br />
			Twitter<br />
			Instagram<br />
		</div>

	</footer>

	<div class="copyright">
		Limberlost &copy; <?php the_time('Y'); ?>. Explore the 33rd.
	</div>

<?php wp_footer(); ?>

</body>
</html>
