<?php
/**
 * The template for displaying all single posts.
 *
 * @package Limberlost
 */

get_header(); ?>

<script>
	jQuery(document).ready(function(){

		jQuery('.main-image').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  asNavFor: '.image-thumbs'
		});

		jQuery('.image-thumbs').slick({
		  slidesToShow: 'all',
		  slidesToScroll: 1,
		  arrows: false,
		  asNavFor: '.main-image',
		  dots: false,
		  focusOnSelect: true
		});

	});
</script>

	<div class="single-exploration">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( has_term('routes', 'category') ) : ?>
				<!-- Routes! -->
				<div class="exploration-banner">

					<?php $mobile = wp_get_attachment_image_src(get_field('route_banner'), 'banner-mobile'); ?>
					<?php $desktop = wp_get_attachment_image_src(get_field('route_banner'), 'banner-desktop'); ?>
					<?php $retina = wp_get_attachment_image_src(get_field('route_banner'), 'banner-retina'); ?>

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

				</div>

				<div class="content-area">

					<div class="exploration-term">
						Featured Route
					</div>
					<h1 class="exploration-title"><?php the_title(); ?></h1>

					<div class="exploration-section gallery-container">

						<div class="main-image">

							<?php if( get_field('gallery') ) : ?>

								<?php

								$images = get_field('gallery');

								if( $images ): ?>
									<?php foreach( $images as $image ): ?>

										<picture class="portal-image">
											<!--[if IE 9]><video style="display: none"><![endif]-->
											<source
												srcset="<?php echo $image['sizes']['portal-mobile']; ?>"
												media="(max-width: 500px)" />
											<source
												srcset="<?php echo $image['sizes']['portal-tablet']; ?>"
												media="(max-width: 860px)" />
											<source
												srcset="<?php echo $image['sizes']['portal-desktop']; ?>"
												media="(max-width: 1180px)" />
											<source
												srcset="<?php echo $image['sizes']['portal-retina']; ?>"
												media="(min-width: 1181px)" />
											<!--[if IE 9]></video><![endif]-->
											<img srcset="<?php echo $image['sizes']['portal-desktop']; ?>">
										</picture>

									<?php endforeach; ?>
								<?php endif; ?>

							<?php else: ?>

								<?php $mobile_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-mobile'); ?>
								<?php $tablet_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-tablet'); ?>
								<?php $desktop_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-desktop'); ?>
								<?php $retina_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-retina'); ?>

								<picture class="single-image">
									<!--[if IE 9]><video style="display: none"><![endif]-->
									<source
										srcset="<?php echo $mobile_page_banner[0]; ?>"
										media="(max-width: 500px)" />
									<source
										srcset="<?php echo $tablet_page_banner[0]; ?>"
										media="(max-width: 860px)" />
									<source
										srcset="<?php echo $desktop_page_banner[0]; ?>"
										media="(max-width: 1180px)" />
									<source
										srcset="<?php echo $retina_page_banner[0]; ?>"
										media="(min-width: 1181px)" />
									<!--[if IE 9]></video><![endif]-->
									<img srcset="<?php echo $image[0]; ?>">
								</picture>

							<?php endif; ?>

						</div>

						<div class="image-thumbs">

							<?php

							$images = get_field('gallery');

							if( $images ): ?>
								<?php foreach( $images as $image ): ?>

									<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />

								<?php endforeach; ?>
							<?php endif; ?>

						</div>

					</div>

					<div class="exploration-section details-intro">

						<div class="list-callout route-details">
							<h4>Details:</h4>
							<?php if( have_rows('route_details') ) : ?>

								<ul>
								    <?php while ( have_rows('route_details') ) : ?>

								        <?php the_row(); ?>

										<li>
									        <?php the_sub_field('detail'); ?>
										</li>

								    <?php endwhile; ?>
								</ul>

							<?php endif; ?>
						</div>

						<div class="route-intro">
							<?php the_field('route_intro'); ?>
						</div>

					</div>

					<div class="exploration-section rwgps-embed-row">
						<div class="rwgps-embed">

							<?php the_field('route_embed'); ?>

						</div>
					</div>

					<div class="exploration-section route-content">

						<?php the_content(); ?>

					</div>

					<div class="exploration-section pullquote">

						<?php the_field('pullquote'); ?>

					</div>

					<div class="exploration-section list-callout need-to-knows">

						<?php if( have_rows('need_to_knows') ) : ?>

							<h4>Need to Know:</h4>
							<ul>
								<?php while ( have_rows('need_to_knows') ) : ?>

									<?php the_row(); ?>

									<li>
										<?php the_sub_field('need_to_know'); ?>
									</li>

								<?php endwhile; ?>
							</ul>

						<?php endif; ?>

					</div>

				</div>

			<?php endif; ?>

			<?php if( has_term('reports', 'category') ) : ?>
			<!-- Reports! -->
			<div class="exploration-term">
				Trip Report
			</div>
			<h1><?php the_title(); ?></h1>
			<?php endif; ?>

			<?php if( has_term('gear', 'category') ) : ?>
			<!-- Gear! -->
			<div class="exploration-term">
				Gear Review
			</div>
			<h1><?php the_title(); ?></h1>
			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div>

<?php get_footer(); ?>
