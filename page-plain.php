<?php
/*
Template Name: Plain text
*/
get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="site-container">

   <div class="relative max-w-4xl mx-auto py-32 lg:py-40">
      <article class="single-content">
         <?php the_content(); ?>
      </article>
   </div>

</div>


<?php get_template_part( 'page', 'modules' ); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
