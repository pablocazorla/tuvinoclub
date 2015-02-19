<?php $async = $_GET['async'];
if (!$async){
	get_header();
} ?>
<article id="article-main" class="blog-list-main" data-page="{'page':'blog-list','title':'<?php get_page_title(); ?>'}">
	<section class="blog-list-section">

		<header class="wrap header-section">
			<?php $cat_name = single_cat_title('',false);?>
			<h1>
				<?php if(is_category()):
					echo $cat_name; 
				elseif(is_tag()):
					echo "Tag <i>".$cat_name."</i>"; 
				elseif(is_author()):
					echo "Author: <i>".$cat_name."<i>"; 
				elseif(is_archive()):
					echo "On archive <i>".$cat_name."<i>";
				endif; ?>
			</h1>
			<p>
			<?php 
				if($cat_name != 'Noticias'){
					echo '<p class="subtitle softlight"><a href="' . pc_category_link('Noticias') . '">Noticias</a></p>';
				}else{
					echo category_description();
				}
				?>
			</p>
		</header>
		
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content();?>
		<?php endwhile; else :?>
			<h2>Sorry, posts not found</h2>
		<?php endif; ?>

		<?php if ( $wp_query->max_num_pages > 1 ){ ?>
		<nav class="blog-pagination">
			<div class="wrap clearfix">
				<div class="blog-pagination-arrow to-left">
					<?php previous_posts_link('&lt; Previous Posts'); ?>
				</div>
				<div class="blog-pagination-arrow to-right">				
					<?php next_posts_link('Next Posts &gt;');	?>
				</div>
			</div>
		</nav>
		<?php } ?>
	</section>
</article>
<?php
if (!$async){
	get_footer();
} ?>