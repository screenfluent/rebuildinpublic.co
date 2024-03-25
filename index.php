<?php get_header(); ?>

<div class="w-full max-w-2xl mx-auto p-5 pt-20">
    <!-- Your content here -->
    <div class="flex flex-col items-start space-y-4 pb-11 border-b border-gray-200">
        <img class="w-12 h-12 rounded-full mb-4" src="https://framerusercontent.com/images/B0daymYlUsfgXpHo9PjmDZJv1sA.jpg" alt="Blog Logo">
        <h1 class="font-bold text-sm mb-4"><?php echo get_bloginfo('name'); ?></h1>
        <ul class="flex space-x-4 text-15">
            <li>
                <?php if (is_home()): ?>
                    My Story
                <?php else: ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">My Story</a>
                <?php endif; ?>
            </li>
            <li><a class="text-gray-500" href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
            <li><a class="text-gray-500" href="<?php echo esc_url(home_url('/morning-walks')); ?>">Morning Walks</a></li>
        </ul>
    </div>

    <div class="pt-12">
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
    </div>

<?php get_footer(); ?>
</div>