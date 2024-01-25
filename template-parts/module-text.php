<div class="module-text">
   <div class="site-container py-12 lg:py-20">

      <div class="max-w-2xl">
         <article>
            <?php the_sub_field('text'); ?>

            <?php $link = get_sub_field('button');
            if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn" 
               href="<?php echo esc_url($link_url); ?>" 
               target="<?php echo esc_attr( $link_target ); ?>" >
               <?php echo esc_html($link_title); ?>
            </a>
            <?php endif; ?>
         </article>
      </div>

   </div>
</div>
