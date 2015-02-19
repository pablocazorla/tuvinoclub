<?php $async = $_GET['async'];
if (!$async){
	get_header();
} ?>
<article id="article-main" class="page-main" data-page="{'page':'page','title':'<?php get_page_title(); ?>'}">
	
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<header>
		<h1><?php the_title();?></h1>		
	</header>
	<section class="page-section">		
		<?php the_content(); ?>
	</section>
	<?php endwhile; endif; ?>
	
</article>
<?php
if (!$async){
	get_footer();
} ?>