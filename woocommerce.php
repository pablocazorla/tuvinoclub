<?php
/*
Template Name: Woocommerce
*/
$async = $_GET['async'];
if (!$async){
	get_header();
?>
	<article id="article-main" class="woocommerce-main" data-page="{'page':'woocommerce', 'subpage':'<?php wooClass();?>','title':'<?php get_page_title(); ?>'}">
		<div class="wrap <?php wooClass();?>-container">
<?php } ?>

			<?php woocommerce_content(); ?>

<?php if (!$async){ ?>
		</div>
	</article>
	<?php get_footer();
} ?>