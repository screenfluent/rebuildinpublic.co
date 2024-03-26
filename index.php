<?php get_header(); ?>


    <div class="pb-4">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                if (is_front_page()) {
                    get_template_part('content');
                } else {
                    get_template_part('content', 'blog');
                }
            endwhile;
        endif;
        ?>
    </div>
    <?php get_footer(); ?>
</div>