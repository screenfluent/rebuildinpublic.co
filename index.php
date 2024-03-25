<?php get_header(); ?>

<div class="max-w-xl mx-auto p-5 pt-20">
    <!-- Your content here -->
    <div class="flex flex-col items-start">
        <img class="w-12 h-12 rounded-full mb-4" src="https://framerusercontent.com/images/B0daymYlUsfgXpHo9PjmDZJv1sA.jpg" alt="Blog Logo">
        <h1 class="text-2xl mb-4"><?php echo get_bloginfo('name'); ?></h1>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </div>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

    <p class="text-gray-500 text-15">This is some body text 15.</p>
    <p class="text-gray-800 text-15">This is some <a href="#" class="text-blue-500">body</a> text 15.</p>

    <p class="text-lg">This is some body text lg.</p>


<?php get_footer(); ?>
</div>