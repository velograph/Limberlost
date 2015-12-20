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

	<div class="content-area">

		<section class="section">

			<div class="section-portal">

				<?php

				    $args = array(
				        'post_type' => array('trip', 'route'),
						'posts_per_page' => 5,
				    );
				    $query = new WP_Query($args);

				    if($query->have_posts()) : ?>

				    <?php while($query->have_posts()) : ?>

				        <?php $query->the_post(); ?>

				        <h1><?php the_title() ?></h1>

				    <?php endwhile; ?>

				<?php endif; ?>

			</div>

			<div class="section-supporting">

				icon

				<h1>1. Exploration</h1>

				<?php the_field('section_description', 2060); ?>
				<?php the_field('homepage_link_text', 2060); ?>

			</div>

		</section>

		<section class="section">

			<?php the_field('section_description', 2100); ?>
			<?php the_field('homepage_link_text', 2100); ?>

			icon

			<h1>2. Outfitting</h1>

			<?php

				$args = array(
					'post_type' => array('product'),
					'posts_per_page' => 5,
				);
				$query = new WP_Query($args);

				if($query->have_posts()) : ?>

				<?php while($query->have_posts()) : ?>

					<?php $query->the_post(); ?>

					<h1><?php the_title() ?></h1>

				<?php endwhile; ?>

			<?php endif; ?>

		</section>

		<section class="section">

			<div class="section-supporting">

				icon

				<h1>3. Expeditions</h1>

				<?php the_field('section_description', 2102); ?>
				<?php the_field('homepage_link_text', 2102); ?>

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

						<h1><?php the_title() ?></h1>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

		</section>

		<section class="section">

			<div class="section-portal">

				<?php

					$args = array(
						'post_type' => array('partnership'),
						'posts_per_page' => 4,
					);
					$query = new WP_Query($args);

					if($query->have_posts()) : ?>

					<?php while($query->have_posts()) : ?>

						<?php $query->the_post(); ?>

						<h1><?php the_title() ?></h1>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

			<div class="section-supporting">

				icon

				<h1>4. Partnerships</h1>

				<?php the_field('section_description', 2104); ?>
				<?php the_field('homepage_link_text', 2104); ?>

			</div>

		</section>

	</div><!-- .content-area -->

<?php get_footer(); ?>
