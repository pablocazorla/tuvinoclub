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

	<section class="products-section">		
		<?php query_posts('pagename=productos'); if (have_posts()) : while ( have_posts() ) : the_post();?>
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		<?php endwhile; endif; wp_reset_query(); ?>
	</section>

	<section class="about-me-section">		
		<?php query_posts('pagename=quienes-somos'); if (have_posts()) : while ( have_posts() ) : the_post();?>
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		<?php endwhile; endif; wp_reset_query(); ?>
	</section>

	<section class="blog-list-section">
		<h1>Noticias</h1>
		<?php query_posts('posts_per_page=3'); if (have_posts()) : while ( have_posts() ) : the_post();?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content();?>
		<?php endwhile; endif; wp_reset_query(); ?>

	</section>
	
	<section class="contact-section">		
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