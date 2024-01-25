<div class="module-cta relative">
   <div class="full-container min-h-[480px] lg:min-h-[600px] flex items-center h-full">

   <div class="absolute inset-0">
         <?php $img = get_sub_field('background'); ?><?php if( $img ): ?>
         <img src="<?php echo $img['sizes']['large']; ?>" class="w-full h-full object-cover" />
         <div class="absolute inset-0 bg-black/20 bg-gradient-to-r from-black/60 to-transparent"></div>
         <?php endif; ?>
      </div>

      <div class="site-container w-full">
         <div class="text-white max-w-2xl relative z-10 py-16">
            <article class="">
               <?php the_sub_field('text'); ?>

               <?php $link = get_sub_field('button');
               if( $link ):
               $link_url = $link['url'];
               $link_title = $link['title'];
               $link_target = $link['target'] ? $link['target'] : '_self';
               ?>
               <a class="btn btn-light" 
                  href="<?php echo esc_url($link_url); ?>" 
                  target="<?php echo esc_attr( $link_target ); ?>" >
                  <?php echo esc_html($link_title); ?>
               </a>
               <?php endif; ?>
            </article>
         </div>
      </div>

   </div>
</div>
