<?php if(have_rows('social', 'option')) : ?>
   <div class="flex">
   <?php while(have_rows('social', 'option')) : the_row(); ?>

      <?php if( get_sub_field('facebook') ): ?>
         <a href="<?php the_sub_field('facebook'); ?>" target="_blank" class="social-icon">
            <span class="sr-only">Facebook</span>
            <svg class="h-full w-full" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
         </a>
      <?php endif; ?>

      <?php if( get_sub_field('instagram') ): ?>
         <a href="<?php the_sub_field('instagram'); ?>" target="_blank" class="social-icon">
            <span class="sr-only">Instagram</span>
            <svg class="h-full w-full" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M12.7 10c0-1.5-1.2-2.7-2.7-2.7S7.3 8.5 7.3 10s1.2 2.7 2.7 2.7c1.5 0 2.7-1.2 2.7-2.7zm1.4 0c0 2.3-1.8 4.1-4.1 4.1S5.9 12.3 5.9 10 7.7 5.9 10 5.9s4.1 1.8 4.1 4.1zm1.1-4.3c0 .6-.4 1-1 1s-1-.4-1-1 .4-1 1-1 1 .5 1 1zM10 3.4c-1.2 0-3.7-.1-4.7.3-.7.3-1.3.9-1.5 1.6-.4 1-.3 3.5-.3 4.7s-.1 3.7.3 4.7c.2.7.8 1.3 1.5 1.5 1 .4 3.6.3 4.7.3s3.7.1 4.7-.3c.7-.3 1.2-.8 1.5-1.5.4-1.1.3-3.6.3-4.7s.1-3.7-.3-4.7c-.2-.7-.8-1.3-1.5-1.5-1-.5-3.5-.4-4.7-.4zm8 6.6v3.3c0 1.2-.4 2.4-1.3 3.4-.9.9-2.1 1.3-3.4 1.3H6.7c-1.2 0-2.4-.4-3.4-1.3-.8-.9-1.3-2.1-1.3-3.4V10 6.7c0-1.3.5-2.5 1.3-3.4C4.3 2.5 5.5 2 6.7 2h6.6c1.2 0 2.4.4 3.4 1.3.8.9 1.3 2.1 1.3 3.4V10z"/></svg>
         </a>
      <?php endif; ?>

      <?php if( get_sub_field('twitter') ): ?>
         <a href="<?php the_sub_field('twitter'); ?>" target="_blank" class="social-icon">
            <span class="sr-only">Twitter</span>
            <svg class="h-full w-full" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M18.94 4.46c-.49.73-1.11 1.38-1.83 1.9.01.15.01.31.01.47 0 4.85-3.69 10.44-10.43 10.44-2.07 0-4-.61-5.63-1.65.29.03.58.05.88.05 1.72 0 3.3-.59 4.55-1.57-1.6-.03-2.95-1.09-3.42-2.55.22.04.45.07.69.07.33 0 .66-.05.96-.13-1.67-.34-2.94-1.82-2.94-3.6v-.04c.5.27 1.06.44 1.66.46-.98-.66-1.63-1.78-1.63-3.06 0-.67.18-1.3.5-1.84 1.81 2.22 4.51 3.68 7.56 3.83-.06-.27-.1-.55-.1-.84 0-2.02 1.65-3.66 3.67-3.66 1.06 0 2.01.44 2.68 1.16.83-.17 1.62-.47 2.33-.89-.28.85-.86 1.57-1.62 2.02.75-.08 1.45-.28 2.11-.57z"/></svg>
         </a>
      <?php endif; ?>

      <?php if( get_sub_field('linkedin') ): ?>
         <a href="<?php the_sub_field('linkedin'); ?>" target="_blank" class="social-icon">
            <span class="sr-only">LinkedIn</span>
            <svg class="h-full w-full" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M2.5 18h3V6.9h-3V18zM4 2c-1 0-1.8.8-1.8 1.8S3 5.6 4 5.6s1.8-.8 1.8-1.8S5 2 4 2zm6.6 6.6V6.9h-3V18h3v-5.7c0-3.2 4.1-3.4 4.1 0V18h3v-6.8c0-5.4-5.7-5.2-7.1-2.6z"/></svg>
         </a>
      <?php endif; ?>

   <?php endwhile; ?>
   </div>
<?php endif; ?>
