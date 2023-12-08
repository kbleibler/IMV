<?php get_header(); ?>

    <article>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?></p>
    <?php endwhile; else : ?>
        <p>Es können keine Posts geladen werden.</p>
    <?php endif; ?>
    </article>
    <button id="scrollToTopBtn"></button>

<?php get_footer(); ?>