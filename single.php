<?php get_header(); ?>


    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="mb-6">
                    <h1 class="text-3xl font-bold mb-2"><?php the_title(); ?></h1>
                    <div class="text-sm text-gray-400">
                        <?php the_date(); ?>
                    </div>
                </header>

                <div class="prose prose-lg text-gray-700">
                    <?php the_content(); ?>
                </div>

                <footer class="mt-8">
                    <?php the_tags('<div class="text-sm text-gray-600">Tags: ', ', ', '</div>'); ?>
                </footer>
            </article>
    <?php
        endwhile;
    else :
        echo '<p>No posts found</p>';
    endif;
    ?>


<?php get_footer(); ?>