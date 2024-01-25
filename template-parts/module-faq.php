
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

<div class="module-faq site-container mb-16">

      <?php if( get_sub_field('faq_title') ): ?>
      <article class="mb-8">
        <?php the_sub_field('faq_title'); ?>
      </article>
      <?php endif; ?>
      
        <?php $i = 0; ?>
        <?php if( have_rows('repeater') ): ?>
        <div class="faq flex-grow w-full">
            <ul class="list-none" x-data="{selected:null}">
                <?php while( have_rows('repeater') ): the_row(); ?>

                          <li class="list-none mb-5 bg-white shadow-sm hover:shadow transition-shadow duration-300 rounded-xl px-5">
                              <article class="flex justify-between justify-center w-full h-full cursor-pointer pb-2 pt-5 group" @click="selected !== <?php echo $i ?> ? selected = <?php echo $i ?> : selected = null">
                              <h3 class="faq-h3"><?php the_sub_field('question'); ?></h3> 
                               
                               <div class="group-hover:opacity-100 opacity-50 text-3xl">+</div>
                              
                              </article>
                              
                              <article x-show="selected == <?php echo $i ?>" class="pt-0 pb-6 max-w-4xl">
                                      <?php the_sub_field('answer'); ?>
                              </article>
                          </li>

                <?php $i++; endwhile; ?>
              </ul>
          </div>
          <?php endif; ?>

</div>
