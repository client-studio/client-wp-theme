<?php get_header('users'); ?>

<div class="pt-32 pb-8">


   <div class="site-container mt-12 gap-8">

    <?php if ( have_posts() ) { ?>
    <?php get_template_part('loop', 'search'); ?>
  <?php } else { ?>
    <h2 class="text-center">Sorry, no results were found.</h2>
  <? } ?>

   </div>

 </div>

<?php get_footer();
