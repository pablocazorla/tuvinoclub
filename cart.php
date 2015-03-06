<?php /*
Template Name: Cart
*/
get_header(); ?>
<article id="article-main" class="woocommerce-main" data-page="{'page':'woocommerce', 'subpage':'cart','title':'<?php get_page_title(); ?>'}">
	
	<?php if (have_posts()) : while (have_posts()) : the_post();?>	
	<div class="wrap-woo cart-container">
		<h1><?php the_title();?></h1>		
		<?php the_content(); ?>
	</div>
	<?php endwhile; endif; ?>
	
</article>
<?php get_footer(); ?>