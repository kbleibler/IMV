<?php get_header(); ?>
 
   <div id="main">
       
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h2><?php the_title(); ?></h2>
         <div id="meta">
            <p>erstellt am: <?php the_date('d.m.Y'); ?> | 
         </div>
         <div class="entry">
            <?php the_content(); ?>
         </div>
      <?php endwhile; endif; ?>
       
   </div><!-- main -->

   <button id="scrollToTopBtn"></button>

 
<?php get_footer(); ?>