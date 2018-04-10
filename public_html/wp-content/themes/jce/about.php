<?php
/**
 * Template name: About
 */

get_header();
?>
    <div class="about_us_template">
        <section class="about">
            <div class="container">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        }
                        the_content();
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </section>

        <section class="partners">
            <div class="container">
                <div class="slider-carousel cycle-slideshow"
                     data-cycle-fx="carousel"
                     data-cycle-timeout=3000
                     data-cycle-slides=".slidePartner"
                     data-cycle-prev="#prev2"
                     data-cycle-next="#next2">
                    <?php
                    $args = array(
                        'post_type' => 'partners'
                    );
                    $slides_query = new WP_Query($args);
                    if ($slides_query->have_posts()) :
                        while ($slides_query->have_posts()) : $slides_query->the_post();
                            $url = simple_fields_value("sldieLinker"); ?>
                            <a href="<?php echo $url; ?>" class="slidePartner">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('full');
                                } ?>
                            </a>
                        <?
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="slider-controls">
                    <a href="#" id="prev2" class="prevPartner"><i class="fa fa-angle-left"></i></a>
                    <a href="#" id="next2" class="nextPartner"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </section>

        <section class="team">
            <div class="container">
                <h2>Наша команда</h2>

                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'team',
                        'showposts' => '8',
                    );
                    $slides_query = new WP_Query($args);
                    if ($slides_query->have_posts()) :
                        while ($slides_query->have_posts()) : $slides_query->the_post();
                            $job = simple_fields_value("job_place");
                            $innerargs = array(
                                'post_type' => 'team',
                                'connected_type' => 'team_to_practics',
                                'connected_to' => $post->ID,
                                'nopaging' => true
                            );
                            $in_query = new WP_Query($innerargs);
                            ?>
                            <div class="col4">
                                <div class="person">

                                    <?php if (has_post_thumbnail()) { ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('practics'); ?></a>
                                    <?php } ?>

                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <span class="job"><?php echo $job; ?></span>
                                    <?php the_content(); ?>
                                    <ul class="skills">
                                        <?php if ($in_query->have_posts()) :
                                        while ($in_query->have_posts()) :
                                        $in_query->the_post(); ?>
                                        <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                                            <?php
                                            endwhile;
                                            endif;
                                            wp_reset_postdata(); ?>
                                    </ul>
                                </div>
                            </div>
                        <?
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>

        <section class="askUs">
            <div class="container">
                <h4>Виникли запитання? Звертайтеся до нас!</h4>

                <p>Ви можете задати питання нашим адвокатам скориставшись формою зворотнього зв’язку.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>contacts/" class="btn"><span>зв’язатися з нами</span></a>
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
                        'post_type' => 'slider',
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

    </div>

<?php get_footer(); ?>