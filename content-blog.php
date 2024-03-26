<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post mb-6'); ?>>
    <header>
        <h2 class="font-bold text-lg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta">
            <span class="text-xs text-gray-400"><?php the_date(); ?></span>
        </div>
    </header>
</article>