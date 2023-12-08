<?php get_header(); ?>

<section class="content-section">
    <div class="main-content">

        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 5,
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
            while ($custom_query->have_posts()) : $custom_query->the_post();
                ?>
                <article>
                    <h1><?php the_title() ?></h1>
                    <p><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink() ?>">mehr lesen</a>
                </article>
            <?php
            endwhile;
            wp_reset_postdata(); // Reset the post data
        else :
            ?>
            <p>Es können keine Posts geladen werden.</p>
        <?php endif;
        ?>
    </div>

    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
</section>

<button id="scrollToTopBtn"></button>

<?php get_footer(); ?>
