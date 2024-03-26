<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="font-bold text-lg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_excerpt(); ?></p>
</article>