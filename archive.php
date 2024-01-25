<?php get_header(); ?>

<div class="hero">
   <div class="full-container">

      <div class="relative py-12">
         <div class="site-container mt-24">
            <article class="lead">
               <h1><?php the_archive_title(); ?></h1>
               <?php $desc = the_archive_description();
               if ($desc) : ?>
               <p><?php the_archive_description(); ?></p>
               <?php endif; ?>
            </article>
         </div>
      </div>

      <?php if ( have_posts() ) : ?> 
      <div class="site-container py-10 mb-12">
         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="">
               <?php get_template_part( 'loop' ); ?>
            </div>
            <?php endwhile; ?>
         </div>
      </div>
      <?php endif; ?>

      <?php 
      $prev_link = get_previous_posts_link(__('&laquo; Older'));
      $next_link = get_next_posts_link(__('Newer &raquo;'));
      if ($prev_link || $next_link) : ?>
         <div class="pt-8 pb-4">
            <?php client_pagination(); ?>
         </div>
      <?php endif; ?>

   </div>
</div>

<?php get_footer();
