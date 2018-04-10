<?php
/**
The main Template
 */

get_header();
?>
<div class="subPage">
	<section class="news">
		<div class="container">
			<div class="articlesList">
				<h1>Новини</h1>
				<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<article>
							<? if (has_post_thumbnail()) { ?>
								<div class="image">
									<a href="<?php the_permalink(); ?>"><? the_post_thumbnail('news'); ?></a>
								</div>
								<div class="texter">
									<span class="date"><?php the_time('j.m.Y'); ?></span>

									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

									<p><?php the_excerpt(); ?></p>
								</div>
							<? } else { ?>

								<i class="fa fa-calendar"></i><span class="date"><?php the_time('j.m.Y'); ?></span>

								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<p><?php the_excerpt(); ?></p>

							<? } ?>
						</article>
					<? endwhile;
					numeric_posts_nav();
				endif;
				?>
			</div>
			<aside>
				<!--<div class="news">
                    <div class="blockTitle">Новини</div>
                    <a href="#" class="item">
                        <i class="fa fa-calendar"></i><span class="item-date">21.04.2015</span>
                        <span class="item-title">Адвокатська контора</span>
                    </a>
                    <a href="#" class="item">
                        <i class="fa fa-calendar"></i><span class="item-date">21.04.2015</span>
                        <span class="item-title">Фахівці мають досвід у питаннях реєстрації та злиття</span>
                    </a>
                    <a href="#" class="item">
                        <i class="fa fa-calendar"></i><span class="item-date">21.04.2015</span>
                        <span class="item-title">Адвокатська контора</span>
                    </a>
                    <a href="#" class="all">Всі новини →</a>
                </div>-->
			</aside>
		</div>
	</section>
</div>
<?php get_footer(); ?>