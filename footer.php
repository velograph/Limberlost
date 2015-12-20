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

	<section class="section">

		<div class="section-portal">
			<?php $mobile = wp_get_attachment_image_src(get_field('mailing_list_background_image', 2153), 'portal-mobile'); ?>
			<?php $tablet = wp_get_attachment_image_src(get_field('mailing_list_background_image', 2153), 'portal-tablet'); ?>
			<?php $desktop = wp_get_attachment_image_src(get_field('mailing_list_background_image', 2153), 'banner-desktop'); ?>
			<?php $retina = wp_get_attachment_image_src(get_field('mailing_list_background_image', 2153), 'banner-retina'); ?>

			<picture>
				<!--[if IE 9]><video style="display: none"><![endif]-->
				<source
					srcset="<?php echo $mobile[0]; ?>"
					media="(max-width: 500px)" />
				<source
					srcset="<?php echo $tablet[0]; ?>"
					media="(max-width: 860px)" />
				<source
					srcset="<?php echo $desktop[0]; ?>"
					media="(max-width: 1180px)" />
				<source
					srcset="<?php echo $retina[0]; ?>"
					media="(min-width: 1181px)" />
				<!--[if IE 9]></video><![endif]-->
				<img srcset="<?php echo $image[0]; ?>">
			</picture>

			<div class="section-content">

				<h4>Want to stay updated?</h4>
				<?php echo do_shortcode('[epm_mailchimp]'); ?>

			</div>

		</div>

	</section>

	<section class="section instagram">

		<?php echo do_shortcode('[instagram-feed]'); ?>

	</section>

	<footer class="section footer">

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
