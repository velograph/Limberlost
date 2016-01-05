<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Limberlost
 */

get_header(); ?>

<div class="content-area exploration offset-alternating">

	<section class="section">
		<div class="section-lead-in">
			<div class="section-title">
				<h1>Exploration</h1>
			</div>
			<div class="exploration-taxonomies">
				<div class="taxonomy">
					<h3>Routes</h3>
					<?php the_field('routes_description',2060); ?>
					<a class="read-more-link" href="/category/routes/">See all featured routes.</a>
				</div>
				<div class="taxonomy">
					<h3>Reports</h3>
					<?php the_field('reports_description',2060); ?>
					<a class="read-more-link" href="/category/reports/">See all trip reports.</a>
				</div>
				<div class="taxonomy">
					<h3>Gear</h3>
					<?php the_field('gear_description',2060); ?>
					<a class="read-more-link" href="/category/gear/">See all gear posts.</a>
				</div>
			</div>
		</div>
	</section>

	<?php
		function single_tax_slug() {
			$get_term = get_queried_object();

			if ( !$get_term )
			return;

			if ( is_category() ) {
				$term_slug = $get_term->slug;
			}

			return $term_slug;
		}
		$current_term = single_tax_slug();

	$oddpost = 'odd-row';

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 5,
		'paged' => $paged,
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => $current_term,
			),
		),
	);
	$query = new WP_Query($args);

	if($query->have_posts()) : ?>

		<?php while($query->have_posts()) : ?>

			<?php $query->the_post(); ?>

			<?php if ($query->current_post % 2 == 0): ?>

				<section class="entry <?php echo $oddpost; ?>">

					<?php if( has_term('routes','category') ) : ?>
						<div class="section-portal route-map" style="background-image: url('<?php the_field('map_image'); ?>');">
					<?php else: ?>
						<div class="section-portal">
					<?php endif; ?>

						<div class="section-content">

							<?php if( has_term('routes','category') ) : ?>
								<span class="featured-route-title">Featured Route:</span>
							<?php endif; ?>
							<h1>
								<a href="<?php the_permalink(); ?>">
									<?php the_title() ?>
								</a>
							</h1>
							<a href="<?php the_permalink(); ?>">See More&nbsp;&gt;</a>

						</div>

					</div>

					<div class="section-supporting">

						<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-mobile' ); ?>
						<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-tablet' ); ?>
						<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-desktop' ); ?>
						<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-retina' ); ?>

						<a href="<?php the_permalink(); ?>">
							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
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
						</a>

					</div>

				</section>

			<?php else: ?>

				<section class="entry <?php echo $oddpost; ?>">

					<div class="section-supporting">

						<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-mobile' ); ?>
						<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-tablet' ); ?>
						<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-desktop' ); ?>
						<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-retina' ); ?>

						<a href="<?php the_permalink(); ?>">
							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
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
						</a>

					</div>

					<?php if( has_term('routes','category') ) : ?>
						<div class="section-portal route-map" style="background-image: url('<?php the_field('map_image'); ?>');">
					<?php else: ?>
						<div class="section-portal">
					<?php endif; ?>

						<div class="section-content">

							<?php if( has_term('routes','category') ) : ?>
								<span class="featured-route-title">Featured Route:</span>
							<?php endif; ?>
							<h1>
								<a href="<?php the_permalink(); ?>">
									<?php the_title() ?>
								</a>
							</h1>
							<a href="<?php the_permalink(); ?>">See More&nbsp;&gt;</a>

						</div>

					</div>

				</section>

			<?php endif ?>

			<?php /* Changes every other post to a different class */
				if ('odd-row' == $oddpost) $oddpost = 'even-row';
				else $oddpost = 'odd-row';
			?>

		<?php endwhile; ?>

	<?php endif; ?>

	<div class="post-navigation">
		<div class="older"><?php next_posts_link( '&laquo; Older', '' ); ?></div>
		<div class="newer"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
	</div>

</div>

<?php get_footer(); ?>
