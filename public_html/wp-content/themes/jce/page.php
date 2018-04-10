<?php
/**
 * The template for displaying all single pages
 */

get_header(); ?>
	<div class="subPage">
		<section class="breadcrumbsers">
			<div class="container">
				<a href="<?php echo esc_url(home_url('/')); ?>">Головна</a>
				<i class="fa fa-angle-right"></i>
				<span><?php wp_title(' '); ?></span>
			</div>
		</section>
		<section class="news">
			<div class="container">
				<div class="articlesList fullWidth">
					<article class="single">
						<?php
						// Start the loop.
						while (have_posts()) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<?php if (has_post_thumbnail()) { ?>
								<div class="image"> <?php

									the_post_thumbnail(); ?>
								</div>
							<?php } ?>
							<?php the_content(); ?>
						<?php endwhile;
						?>
					</article>
				</div>
			</div>
		</section>
	</div>
<?php get_footer(); ?>