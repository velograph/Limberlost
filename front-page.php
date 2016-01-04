<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Limberlost
 */

get_header(); ?>

<script>
	jQuery(document).ready(function(){

		jQuery('.exploration-slider').slick({
			arrows: false,
			dots: true,
			autoplay: false,
			autoplaySpeed: 3000,
			pauseOnHover: true,
			centered: true,
			mobileFirst: true,
		    lazyLoad: 'ondemand',
		});

		jQuery('.outfitting-slider').slick({
			arrows: true,
			dots: false,
			slidesToShow: 4,
			autoplay: false,
			centerMode: true,
			mobileFirst: true,
		    // lazyLoad: 'ondemand',
		});

	});
</script>
	<div class="front-page content-area">

		<section class="exploration section">

			<div class="section-portal">

				<?php

				    $args = array(
				        'post_type' => 'post',
						'posts_per_page' => 5,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field' => 'slug',
								'terms' => array('reports','gear','routes'),
							),
						),
				    );
				    $query = new WP_Query($args);

				    if($query->have_posts()) : ?>

					<div class="exploration-slider">

					    <?php while($query->have_posts()) : ?>

					        <?php $query->the_post(); ?>

							<div class="slide">

								<?php $mobile_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'product-banner-mobile'); ?>
								<?php $tablet_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'product-banner-tablet'); ?>
								<?php $desktop_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'product-banner-desktop'); ?>
								<?php $retina_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'product-banner-retina'); ?>

								<picture class="picture document-header-image">
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

								<div class="slide-caption">
									<?php
									$terms = get_the_terms( $post->ID, 'category' );

										$exploration_links = array();

										foreach ( $terms as $term ) {
											$exploration_links[] = $term->name;
										}

										$exploration_category = join( ", ", $exploration_links );
									?>

									<?php $post_type = get_post_type_object( get_post_type($post) ); ?>
									<a href="<?php the_permalink(); ?>">
										<span class="post-type"><?php echo $exploration_category; ?>:&nbsp;</span>
										<span class="post-title"><?php the_title() ?>&nbsp;&gt;</span>
									</a>
								</div>

							</div>

					    <?php endwhile; ?>

					</div>

				<?php endif; ?>

			</div>

			<div class="section-supporting">

				<div class="section-content">
					<div class="section-title">
						<h1>Exploration</h1>
					</div>

					<div class="section-description">
						<?php the_field('section_description', 2060); ?>
						<a href="/exploration"><?php the_field('homepage_link_text', 2060); ?></a>
					</div>
				</div>

			</div>

		</section>

		<!-- <section class="outfitting section">

			<div class="section-supporting">

				<div class="section-content">

					<div class="section-description">
						<?php the_field('section_description', 2100); ?>
						<?php the_field('homepage_link_text', 2100); ?>
					</div>

					<div class="section-icon-title">
						<img src="<?php the_field('section_icon', 2100); ?>" alt="exploration" />
						<h1>2. Outfitting</h1>
					</div>

				</div>

			</div>

			<div class="section-portal">
				<?php

					$args = array(
						'post_type' => array('product'),
						'posts_per_page' => 5,
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => 'guided-expedition',
								'operator' => 'NOT IN',
							),
						),
					);
					$query = new WP_Query($args);

					if($query->have_posts()) : ?>

					<div class="outfitting-slider">

						<?php while($query->have_posts()) : ?>

							<?php $query->the_post(); ?>

							<div class="product-portal slide">
								<div class="product-thumbnail">
									<?php the_post_thumbnail('portal-tablet'); ?>
								</div>
								<h5><?php the_title() ?></h5>
								<h6>product short description</h6>
							</div>

						<?php endwhile; ?>

					</div>

				<?php endif; ?>

			</div>

		</section> -->

		<section class="expeditions section">

			<div class="section-supporting">

				<div class="section-content">

					<div class="section-title">
						<h1>Expeditions</h1>
					</div>

					<div class="section-description">
						<?php the_field('section_description', 2102); ?>
						<a href="/expeditions"><?php the_field('homepage_link_text', 2102); ?></a>
					</div>

				</div>

			</div>

			<div class="section-portal">

				<?php

					$args = array(
						'post_type' => array('product'),
						'posts_per_page' => 2,
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => 'guided-expedition',
							),
						),
					);
					$query = new WP_Query($args);

					if($query->have_posts()) : ?>

					<?php while($query->have_posts()) : ?>

						<?php $query->the_post(); ?>

						<?php $mobile = wp_get_attachment_image_src(get_field('tall_trip_banner'), 'banner-mobile'); ?>
						<?php $retina = wp_get_attachment_image_src(get_field('wide_trip_banner'), 'portal-desktop'); ?>

						<a href="<?php the_permalink(); ?>">
							<picture>
								<!--[if IE 9]><video style="display: none"><![endif]-->
								<source
									srcset="<?php echo $mobile[0]; ?>"
									media="(max-width: 768px)" />
								<source
									srcset="<?php echo $retina[0]; ?>"
									media="(min-width: 769px)" />
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $image[0]; ?>">
							</picture>
						</a>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

		</section>

		<section class="partnerships section">

			<div class="section-portal">

				<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( 2104 ), 'mobile' ); ?>
				<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( 2104 ), 'tablet' ); ?>
				<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( 2104 ), 'desktop' ); ?>
				<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( 2104 ), 'retina' ); ?>

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

			</div>

			<div class="section-supporting">

				<div class="section-content">

					<div class="section-title">
						<h1>Partnerships</h1>
					</div>

					<div class="section-description">
						<?php the_field('section_description', 2104); ?>
						<a href="/partnerships"><?php the_field('homepage_link_text', 2104); ?></a>
					</div>

					<?php

					    $args = array(
					        'post_type' => 'partnership',
							'posts_per_page' => 4,
					    );
					    $query = new WP_Query($args);

					    if($query->have_posts()) : ?>

						<div class="partner-logos">

						    <?php while($query->have_posts()) : ?>

						        <?php $query->the_post(); ?>

				        		<div class="partner-logo"><img src="<?php the_field('company_logo'); ?>" alt="partnership_logo" /></div>

					    	<?php endwhile; ?>

						</div>

					<?php endif; ?>

				</div>

			</div>

		</section>

	</div><!-- .content-area -->

<?php get_footer(); ?>
