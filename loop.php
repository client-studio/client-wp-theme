<div class="blog-item relative w-full mb-12 md:mb-0">

   <a href="<?php the_permalink(); ?>" class="block group">
      
      <div class="h-[240px] bg-black w-full rounded-xl relative overflow-hidden">
         <div class="absolute top-3 left-3 z-30 font-medium text-white/80">
            <h4><?php echo (string) YoastSEO()->meta->for_post( get_the_ID() )->estimated_reading_time_minutes, " min read"; ?></h4>
         </div>
         <div class="absolute inset-0">
            <img src="<?php the_post_thumbnail_url('thumbnail') ?>" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500" alt="<?php the_title() ?>">
         </div>
      </div>

     
      <div class="pt-3">
        
         <div class="post-meta text-xs font-medium flex gap-x-2">
            <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>
            <time datetime="<?php the_date('d.m.Y'); ?>" class="opacity-70">
               <?php echo get_the_date('d.m.Y'); ?>
            </time>
         </div>

         <article class="mt-1">
            <h3><?php the_title(); ?></h3>
         </article>
      </div>

   </a>

</div>
