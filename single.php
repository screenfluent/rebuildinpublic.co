<?php get_header(); ?>

<main id="main" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        get_template_part( 'content', get_post_type() );
    endwhile; 
    ?>
</main>

<?php get_footer(); ?>