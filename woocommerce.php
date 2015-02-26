<?php /*
Template Name: Woocommerce
*/
get_header(); ?>
	<article id="article-main" class="woocommerce-main" data-page="{'page':'woocommerce','title':'<?php get_page_title(); ?>'}">
		<div class="wrap-woo <?php wooClass();?>">
			<?php woocommerce_content(); ?>
		</div>
	</article>
<?php get_footer(); ?>