<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<input type="search" class="search-field" placeholder="Search" value="" name="s" title="Enter a keyword" size="1" />	
	<input type="submit" class="search-submit" value="" size="1" />	
	<input type="hidden" name="cat" id="cat" value="<?php echo get_cat_ID('Noticias');?>"/>
</form>