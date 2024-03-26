<?php get_header(); ?>

<div class="w-full max-w-2xl mx-auto p-5 pt-20">
    <!-- Your content here -->
    <div class="flex flex-col items-start space-y-4 pb-7">
        <img class="w-12 h-12 rounded-full mb-4" src="https://framerusercontent.com/images/B0daymYlUsfgXpHo9PjmDZJv1sA.jpg" alt="Blog Logo">
        <h1 class="font-bold text-sm mb-4"><?php echo get_bloginfo('name'); ?></h1>
        <ul class="flex space-x-4 text-15">
            <li>
                <?php if (is_front_page()): ?>
                    My Story
                <?php else: ?>
                    <a class="hover:text-gray-700" href="<?php echo esc_url(home_url('/')); ?>">My Story</a>
                <?php endif; ?>
            </li>
            <li><a class="text-gray-500 hover:text-gray-700" href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
            <li><a class="text-gray-500 hover:text-gray-700" href="<?php echo esc_url(home_url('/blog')); ?>">Projects</a></li>
            <li><a class="text-gray-500 hover:text-gray-700" href="<?php echo esc_url(home_url('/morning-walks')); ?>">Morning Walks</a></li>
        </ul>
    </div>
    <div class="bg-border-gray h-1px"></div>
    <div class="pt-10">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
    <?php get_footer(); ?>
</div>