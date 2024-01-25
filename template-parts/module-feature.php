<div class="module-feature py-8">
   <div class="site-container">

      <div class="grid md:grid-cols-2 items-center gap-x-8 lg:gap-x-16">
         
         <figure class="module-feature__image mb-4 md:mb-0<?php if ( get_sub_field( 'ltr' ) ): ?> md:order-2<?php endif ?>">
            <?php $image = get_sub_field('image'); ?><?php if( $image ): ?>
            <img src="<?php echo $image['sizes']['large']; ?>" class="max-h-[620px] w-full object-cover rounded-xl" />
            <?php endif; ?>
         </figure>

         <div class="module-feature__text<?php if ( get_sub_field( 'ltr' ) ): ?> md:order-1<?php endif ?>">
            <article>
               <?php the_sub_field('text'); ?>

               <?php $link = get_sub_field('button');
               if( $link ):
               $link_url = $link['url'];
               $link_title = $link['title'];
               $link_target = $link['target'] ? $link['target'] : '_self';
               ?>
               <a class="btn block mt-5" 
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
