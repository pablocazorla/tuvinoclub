<?php $async = $_GET['async'];
if (!$async){
	get_header();
} ?>
<article id="article-main" class="blog-list-main search-main" data-page="{'page':'blog-list','title':'<?php get_page_title(); ?>'}">
	<section class="blog-list-section">

		<header>			
			<h1>Results of "<?php echo $s; ?></h1>
			<p><?php echo '<a href="' . pc_category_link('Noticias') . '">Noticias</a>';?></p>
		</header>
		
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<?php the_title(); ?>
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
					<?php next_posts_link('More Posts &gt;');	?>
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







<?php $async = $_GET['async'];
if (!$async){
	get_header();
} 
?>
	<article class="article-main article-blog article-list">
		<?php if ($async){?>
			<div id="hidden-title" class="invisible"><?php get_page_title(); ?></div>
		<?php } ?>
		<div class="invisible" id="page-data" data-page="search"></div>
		<section id="search" class="wrap blog-list">
			<header class="wrap header-section">
				<h1 class="softlight">Results of "<?php echo $s; ?>"</h1>
				<div class="red-line softlight"></div>
				<p class="softlight">
					<?php echo '<p class="subtitle softlight"><a href="' . pc_category_link('Blog') . '">Blog</a></p>';?>
				</p>
			</header>		
			<div class="blog-list-side softlight">
				<div class="row">
					<div class="col col-6">
						<?php include (TEMPLATEPATH . '/menublog.php'); ?>
					</div>
					<div class="col col-6">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
			<div class="row">
	<?php if (have_posts()) :?>
					<?php while (have_posts()) : the_post();?>
				<div class="col">
					<div class="post-in-list softlight" data-softlight="y:0,scale:0.7" id="post-<?php the_ID();?>">
						<figure>
							<?php if(has_post_thumbnail()){
								echo '<img class="img-sequence" src="" data-src="' . url_thumbnail('thumbnail') .'">';
								}else{ ?>
									<img class="img-sequence" src="" data-src="<?php bloginfo('template_url'); ?>/img/default-thumbnail.jpg" />		
								<?php } ?>							
							<a href="<?php the_permalink(); ?>">
								<span>More</span>
							</a>
						</figure>						
						<div class="post-caption">
							<h2>
								<a href="<?php the_permalink(); ?>">					
									<?php the_title(); ?>
								</a>
							</h2>
							<div class="category">
								<?php the_category(', '); ?>					
							</div>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php else :?>
				<div class="col col-12 post-not-found">
					<h3 class="softlight">Sorry, posts not found...</h3>
				</div>				
				<?php endif; ?>
			</div>			
		</section>
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
	</article>	
<?php
if (!$async){
	get_footer();
} ?>