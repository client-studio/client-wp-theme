
<div class="site-container py-5 flex items-center md:justify-center">

<form class="search" class="w-full flex" method="get" action="<?php echo home_url(); ?>" role="search">
	
	<input class="search-input border text-sm border-gray-300 rounded-sm py-2 px-4 w-[300px] focus:text-black focus:outline-0" type="search" name="s" placeholder="<?php _e( 'Search the site', 'client' ); ?>">

	<button class="search-submit ml-4 bg-[#C0F2F2] text-black px-4 py-2 rounded-full text-xs uppercase tracking-widest" type="submit" role="button">
	<?php _e( 'Search', 'client' ); ?>
</a>
	</button>
</form>

<div class="search-close absolute cursor-pointer right-0 md:right-5">
	  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#000000"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
</div>

               </div>