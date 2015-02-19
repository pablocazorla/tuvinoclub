<?php $async = $_GET['async'];
if (!$async){
	get_header();
} ?>
<article id="article-main" class="blog-post-main" data-page="{'page':'blog-post','title':'<?php get_page_title(); ?>'}">
	
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<header>
		<h1><?php the_title();?></h1>
		<p>
			<?php the_category(', '); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#comments">Comments</a>				
		</p>
	</header>
	<section class="blog-post-section">		
		<?php the_content(); ?>
		<?php comments_template(); ?>
	</section>
	<?php get_sidebar(); ?>
	<?php endwhile; endif; ?>

	<nav class="blog-pagination">
		<div class="wrap clearfix">
			<div class="blog-pagination-arrow to-left">
				<?php previous_post_link('&lt; %link'); ?>
			</div>
			<div class="blog-pagination-arrow to-right">				
				<?php next_post_link('%link &gt;');	?>
			</div>
		</div>
	</nav>
</article>
<?php
if (!$async){
	get_footer();
} ?>