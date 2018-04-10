<?php
/**
 * The template for displaying all single news
 */

get_header(); ?>
	<div class="subPage">
		<section class="news">
			<div class="container">
				<div class="articlesList">
					<article class="single">
						<?php
						// Start the loop.
						while (have_posts()) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<span class="superDate"><span class="date"><?php the_time('j.m.Y'); ?></span></span>
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
				<aside>
					<div class="news">
						<div class="blockTitle">Новини</div>
						<?php
						$args3 = array(
							'post_type' => 'post',
							'post_count' => '3'
						);
						$news_query = new WP_Query($args3);
						if ($news_query->have_posts()) :
							while ($news_query->have_posts()) : $news_query->the_post(); ?>
								<a href="<?php the_permalink(); ?>" class="item">
									<span
										class="item-date"><?php the_time('j.m.Y'); ?></span>
									<span class="item-title"><?php the_title(); ?></span>
								</a>
							<?
							endwhile;
						endif;
						wp_reset_postdata();
						?>
						<a href="<?php echo esc_url(home_url('/')); ?>novyny/" class="all">Всі новини →</a>
					</div>
				</aside>
			</div>
		</section>
	</div>
<?php get_footer(); ?>