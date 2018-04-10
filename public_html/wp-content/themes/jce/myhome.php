<?php
/**
 * Template name: Homepage
 */

get_header();
?>

    <!--
<?php if ($sa_settings['sales_title']) { ?>
    <h2><?php echo $sa_settings['sales_title']; ?></h2>
<?php } else { ?>
    <h2>Акция</h2>
<?php } ?>
-->

    <section class="banner">
        <div class="cycle-slideshow"
             data-cycle-timeout=5000
             data-cycle-slides=".slide2">
<?php
$args = array(
    'post_type' => 'slider2'
);
$count = 1;
$slides_query = new WP_Query($args);
if ($slides_query->have_posts()) :
    while ($slides_query->have_posts()) : $slides_query->the_post();
        $url = simple_fields_value("sldieLinker"); ?>
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        $url2 = $thumb['0']; ?>
            <div class="slide2 slderNumber-<?php echo $count; ?>" style="">
                <div class="image"> <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('banner');
                } ?></div>
                <div class="caption">
                    <div class="caption-text">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <a href="<?php echo $url; ?>" class="btn"><span>Дізнатись більше<i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
                <style>
                    .banner .slide2.slderNumber-<?php echo $count; ?> .caption:before {
                        background: url(<?php echo $url2; ?>) no-repeat;
                    }
                </style>
            </div>
    <?
        $count++;
    endwhile;
endif;
wp_reset_postdata();
?>

            <div class="cycle-pager"></div>
        </div>
    </section>

    <section class="slider">
        <div class="container">
            <div class="slider-carousel cycle-slideshow"
                 data-cycle-fx="carousel"
                 data-cycle-timeout=5000
                 data-cycle-slides=".slide"
                 data-cycle-prev="#prev"
                 data-cycle-next="#next">
                <?php
                $args = array(
                    'post_type' => 'slider'
                );
                $slides_query = new WP_Query($args);
                if ($slides_query->have_posts()) :
                    while ($slides_query->have_posts()) : $slides_query->the_post();
                        $url = simple_fields_value("sldieLinker"); ?>
                        <a href="<?php echo $url; ?>" class="slide">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('slider');
                            } ?>

                            <h3><?php the_title(); ?></h3>
                        </a>
                    <?
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="slider-controls">
                <a href="#" id="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                <a href="#" id="next" class="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="content">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <? endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <aside>
                <div class="news">
                    <div class="blockTitle">Новини</div>
                    <?php
                    $args3 = array(
                        'post_type' => 'post',
                        'showposts' => '3'
                    );
                    $news_query = new WP_Query($args3);
                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="item">
                                <span class="item-date"><?php the_time('j.m.Y'); ?></span>
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

<?php get_footer(); ?>