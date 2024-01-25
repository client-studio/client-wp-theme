<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( wp_is_mobile() ) {
$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); } else {
$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); } ?>

<div class="single">
   <div class="full-container">

      <?php if ( has_post_thumbnail() ) : ?>
      <div class="absolute inset-0">
         <img class="h-full w-full object-cover" src="<?php echo $img[0]; ?>" alt="">
         <div class="absolute inset-0 opacity-30 bg-black"></div>
      </div>
      <?php endif; ?>

      <div class="relative py-32 lg:py-60">
         <div class="site-container">
            <article class="lead text-white text-center">
               <h1><?php the_title(); ?></h1>
               <p><time datetime="<?php the_time('F jS, Y'); ?>">
                  <?php the_time('F jS, Y'); ?>
               </time></p>
            </article>
         </div>
      </div>

   </div>
</div>

<div class="site-container py-16 lg:py-24">
   <div class="max-w-2xl mx-auto">
      <article id="post-<?php the_ID(); ?>" <?php post_class('single-content'); ?>>
         <?php the_content(); ?>
      </article>
   </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer();
