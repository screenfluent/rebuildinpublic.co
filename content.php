<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h2 class="font-bold text-lg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta">
            <span>Posted on <?php the_date(); ?></span>
            <span>By <?php the_author(); ?></span>
        </div>
    </header>
    <div class="post-content">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
</article>