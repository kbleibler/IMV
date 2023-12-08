<?php
/*
Template Name: Wissenschaft
*/
get_header();
?>

<div id="sidebar-science">
    <ul class="post-list">
        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'wissenschaft',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $post_id = get_the_ID();
                ?>
                <li class="post-item">
                    <a href="#post-<?php echo $post_id; ?>">
                        <p><?php the_title(); ?></p>
                    </a>
                </li>
                <?php
            endwhile;
            wp_reset_postdata(); // Reset the post data to prevent conflicts with the main loop
        else :
            // No posts found
            echo 'No posts found';
        endif;
        ?>
    </ul>
</div> <!-- sidebar_science -->

<div id="science">
    <?php
    $query = new WP_Query($args); // Use the same $args

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $post_id = get_the_ID();
            ?>
            <article class="science-post" id="post-<?php echo $post_id; ?>">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </article>
            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data to prevent conflicts with the main loop
    else :
        // No posts found
        echo 'No posts found';
    endif;
    ?>
</div> <!-- science -->

<button id="scrollToTopBtn"></button>

<?php get_footer(); ?>
