<?php if (!is_page('maintenance')) { ?>
</main>
</div>

<footer class="bg-black text-white" aria-labelledby="footer">
   <div class="site-container py-12 lg:pt-16 lg:pb-20">

      <div class="grid grid-cols-12">
         
         <div class="col-span-12 lg:col-span-6 mb-12">
            <a class="footer-logo" href="<?php echo home_url(); ?>">
               <span class="sr-only"><?php echo get_bloginfo( 'name' );?></span>
               <img 
                  class="h-5 w-auto" 
                  src="<?php bloginfo("template_directory"); ?>/img/logo.svg"
                  alt="<?php echo get_bloginfo( 'name' );?>" >
            </a>

            <div class="pt-4 footer-text">
               <?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
            </div>
         </div>

         <nav class="footer-menu-1 col-span-12 sm:col-span-4 lg:col-span-2 mb-5">
         <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
         </nav>

         <nav class="footer-menu-2 col-span-12 sm:col-span-4 lg:col-span-2 mb-5">
         <?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
         </nav>

         <nav class="footer-menu-3 col-span-12 sm:col-span-4 lg:col-span-2">
         <?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
         </nav>

         
      </div>


      <div class="pt-12 md:pt-24 sm:flex sm:justify-between">

         <div class="left flex footer-copyright">
            <p>&copy; <?php echo date('Y');?> All rights reserved.</p>
            <nav class="footer-legal flex">
            <?php dynamic_sidebar( 'footer-widget-area-5' ); ?>
            </nav>
         </div>

         <div class="right"><?php get_template_part( 'template-parts/block', 'social' ); ?></div>
      
      </div>


   </div>
</footer>

</div>
<?php } ?>

<?php wp_footer(); ?>


<?php if ( get_field( 'enable_contact_form_on_this_page' ) ) { ?>
<script>
/** hide the form after submit **/
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    document.querySelectorAll("form.wpcf7-form > :not(.wpcf7-response-output)").forEach(el => {
      el.style.display = 'none';
    });
  }, false );


/** hide the original loader icon **/
document.addEventListener('DOMContentLoaded', function() {
  var forms = document.querySelectorAll('form.wpcf7-form');
  forms.forEach(function(form) {
    form.addEventListener('submit', function() {
      var spinner = form.querySelector('.wpcf7-spinner');

      // Add a CSS class to hide the spinner
      spinner.classList.add('hidden');
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
  /**
   * Disable WPCF7 button while it's submitting
   * Stops duplicate enquiries coming through
   */
  document.addEventListener('wpcf7submit', function(event) {
    // Find only disabled submit buttons
    var button = document.querySelector('.wpcf7-submit[disabled]');

    // Grab the old value
    var old_value = button.getAttribute('data-value');

    // Enable the button
    button.disabled = false;

    // Put the old value back in
    button.value = old_value;
  }, false);

  var forms = document.querySelectorAll('form.wpcf7-form');
  forms.forEach(function(form) {
    form.addEventListener('submit', function() {
      var button = form.querySelector('input[type=submit]');
      var current_val = button.value;

      // Store the current value so we can reset it later
      button.setAttribute('data-value', current_val);

      // Disable the button
      button.disabled = true;

      // Tell the user what's happening
      button.value = 'Hold on...';
    });
  });
});
</script>
<?php } ?>

</body>
</html>
