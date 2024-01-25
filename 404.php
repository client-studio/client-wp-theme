<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width">
      <link rel="profile" href="http://gmpg.org/xfn/11">

      <?php wp_head(); ?>
   </head>

   <body class="bg-dark">
      <div class="text-center min-h-screen w-full md:w-1/2 md:mx-auto flex items-center justify-center text-white">
         <article class="flex flex-col justify-center items-center">
         <?php if( have_rows('404', 'option') ): ?>
            <?php while( have_rows('404', 'option') ): the_row();  ?>
            
            <?php the_sub_field('Missing', 'option'); ?>

            <?php endwhile; ?>
          <?php endif; ?>

         </article>
      </div>
   </body>
</html>
