<?php get_header(); ?>

<div class="w-full max-w-2xl mx-auto p-5 pt-20">
    <!-- Your content here -->
    <div class="flex flex-col items-start pb-7">
        <img class="w-12 h-12 rounded-full mb-4" src="https://framerusercontent.com/images/B0daymYlUsfgXpHo9PjmDZJv1sA.jpg" alt="Blog Logo">
        <h1 class="font-bold text-sm mb-8"><?php echo get_bloginfo('name'); ?></h1>
        <ul class="flex space-x-4 text-sm lg:text-15 -mb-1">
    <li class="<?php echo (is_front_page() ? 'current-page-item' : ''); ?>">
        <?php if (is_front_page()): ?>
            My Story
        <?php else: ?>
            <a class="text-gray-500 hover:text-gray-700" href="<?php echo esc_url(home_url('/')); ?>">My Story</a>
        <?php endif; ?>
    </li>
    <li class="<?php echo (is_home() ? 'current-page-item' : ''); ?>">
        <?php if (is_home()): ?>
            Blog
        <?php else: ?>
            <a class="text-gray-500 hover:text-gray-700" href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
        <?php endif; ?>
    </li>
            <li><a class="text-gray-500 hover:text-gray-700" href="<?php echo esc_url(home_url('/projects')); ?>">Projects</a></li>
            <li><a class="text-gray-500 hover:text-gray-700" href="<?php echo esc_url(home_url('/morning-walks')); ?>">Morning Walks</a></li>
        </ul>
    </div>
    <div class="bg-border-gray h-1px"></div>
    <div class="pt-4">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part('content');
            endwhile;
        endif;
        ?>
    </div>
    <?php get_footer(); ?>
</div>