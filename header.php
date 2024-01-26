<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <link href="<?php bloginfo( "template_directory",); ?>/webfonts/font.css" rel="stylesheet">

      <?php wp_head(); ?>
   </head>

   <body <?php body_class( 'antialiased bg-body' ); ?>>
      <div id="page" class="min-h-screen">

         <header class="site-header w-full fixed top-0 z-50">

            <?php if( have_rows('infobar', 'option') ): while ( have_rows('infobar', 'option') ) : the_row(); ?><?php if ( get_sub_field('show_infobar') ): ?>

            <div class="infobar overflow-hidden bg-black">
               <div class="site-container flex py-2 lg:py-3">
                  
                  <div class="grow">
                  <p class="text-xs text-neutral-400"><?php the_sub_field('text') ?></p>
                  </div>

                  <?php $link = get_sub_field('link'); if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  ?>
                  <p class="ml-auto text-xs">
                  <a class="font-medium text-white" href="<?php echo esc_url($link_url); ?>" target="_blank"><?php echo esc_html($link_title); ?></a>
                  </p>
                  <?php endif; ?>

               </div>
            </div>
            <?php endif; endwhile; endif; ?>
            
            <div class="main-header bg-black/20 backdrop-blur-xl text-white">
            <nav class="site-container">
               <div class="grid grid-cols-2 items-center w-full py-3 lg:py-5">
                  <a class="logo" href="<?php echo home_url(); ?>">
                     <span class="sr-only"><?php echo get_bloginfo( 'name' );?></span>
                        <img class="h-5 w-auto" 
                        src="<?php bloginfo("template_directory"); ?>/img/logo.svg"
                        alt="<?php echo get_bloginfo( 'name' );?>" >
                  </a>

                  <div class="hidden md:block ml-auto">
                     <?php wp_nav_menu( array(
                        'container_id'    => 'primary-menu',
                        'container'			=> 'none',
                        'menu_class'      => 'flex',
                        'theme_location'  => 'primary',
                        'li_class'        => 'text-base font-medium mx-4 last:mr-0 pb-0 mb-0',
                        'fallback_cb'     => false,
                     )); ?>
                  </div>

                  <div class="block md:hidden ml-auto">
                     <button type="button" class="w-9 h-9 align-middle relative menu-btn fill-neutral-300" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Toggle menu</span>
                        <svg class="icon-open anim" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z"/></svg>
                        <svg class="icon-close anim opacity-0 absolute top-0" xmlns="http://www.w3.org/2000/svg" fill="white" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve"><path d="M0,24v2h50v-2H0z"/></svg>

                             </button>
                  </div>
               </div>
            </nav>
            

            <!-- Mobile menu -->
            <div class="invisible h-0 overflow-hidden md:hidden" id="mobile-menu">
               <nav class="site-container py-4">
                  <?php wp_nav_menu( array(
                     'container_id'    => 'primary-menu',
                     'container'			=> 'none',
                     'menu_class'      => '',
                     'theme_location'  => 'primary',
                     'li_class'        => 'text-xl py-6',
                     'fallback_cb'     => false,
                  )); ?>
               </dinavv>
            </div>


            </div>
         </header>

         <div id="content" class="site-content">
            <main>
