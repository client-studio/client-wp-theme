<?php
/*
Template Name: Maintenance
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width">
      <link rel="profile" href="http://gmpg.org/xfn/11">

      <?php wp_head(); ?>
   </head>
   

   <body class="bg-black relative">
   
   <?php  $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );  ?>

      <?php if ( has_post_thumbnail() ) : ?>
         <div class="absolute inset-0">
            <img class="h-full w-full object-cover" src="<?php echo $img[0]; ?>" alt="">
            <div class="absolute inset-0 opacity-20 bg-black"></div>
         </div>
      <?php endif; ?>

      <div class="text-center min-h-screen w-full md:w-1/2 md:mx-auto flex items-center justify-center text-white relative z-50">

         <div>
       
         <div class="logo mb-10">
            <span class="sr-only"><?php echo get_bloginfo( 'name' );?></span>
             <img class="h-5 w-auto mx-auto" src="<?php bloginfo("template_directory"); ?>/img/logo.svg" alt="<?php echo get_bloginfo( 'name' );?>" />
         </div>
             
         <article class="text-center">
           <?php the_content(); ?>
         </article>

         </div>

      </div>

 <?php get_footer(); ?>