<?php
/**
 * Template name: Contacts
 */

get_header();
?>
    <section class="contacts">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

<?php get_footer(); ?>