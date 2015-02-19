<?php /*
Template Name: Woocommerce
*/
get_header(); ?>
	<article id="article-main" class="woocommerce-main" data-page="{'page':'woocommerce','title':'<?php get_page_title(); ?>'}">
		<h1>Wooooo</h1>
		<?php woocommerce_content(); ?>	
	</article>
<?php get_footer(); ?>