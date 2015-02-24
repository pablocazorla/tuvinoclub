<?php $async = $_GET['async'];
if (!$async){
	get_header();
} ?>
<article id="article-main" class="home-main" data-page="{'page':'home','title':'<?php get_page_title(); ?>'}">

	<section class="presentation-section">		
		<?php query_posts('pagename=inicio'); if (have_posts()) : while ( have_posts() ) : the_post();?>
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		<?php endwhile; endif; wp_reset_query(); ?>
	</section>

	<section class="products-section" id="products">		
		<?php query_posts('pagename=productos'); if (have_posts()) : while ( have_posts() ) : the_post();?>
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		<?php endwhile; endif; wp_reset_query(); ?>
	</section>

	<section class="about-section" id="about">		
		<?php query_posts('pagename=quienes-somos'); if (have_posts()) : while ( have_posts() ) : the_post();?>
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		<?php endwhile; endif; wp_reset_query(); ?>
	</section>

	<section class="blog-list-section" id="news">
		<h1>Noticias</h1>
		<?php query_posts('posts_per_page=3'); if (have_posts()) : while ( have_posts() ) : the_post();?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content();?>
		<?php endwhile; endif; wp_reset_query(); ?>
		<a href="<?php echo pc_category_link('Noticias');?>" class="">Mas Noticias</a>
	</section>
	
	<section class="contact-section" id="contact">		
		<?php query_posts('pagename=contacto'); if (have_posts()) : while ( have_posts() ) : the_post();?>
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		<?php endwhile; endif; wp_reset_query(); ?>
	</section>
</article>
<?php
if (!$async){
	get_footer();
} ?>