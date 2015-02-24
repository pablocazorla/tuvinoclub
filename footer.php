		</div> <!-- end of content-main -->		
		
		<!--
		<footer id="main-footer">
			<div class="wrap">
				Copyright <?php echo date('Y'); ?> Pablo Cazorla. All rights reserved.
			</div>			
		</footer>
		<a id="goto-top" class="no-hash bubble" title="Top page" href="#content-main"></a>
		<div id="blank-dimmer">
			<div id="blank-dimmer-content" class="noselect">
				<div class="loader-graph"></div>
				&nbsp;Loading...
			</div>
		</div>
		<div id="loader-line">
			<div class="loader-line-range"></div>
		</div>
		-->
		<p>FOOTER</p>
		<?php wp_footer(); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.$ || document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.9.1.min.js"><\/script>')</script>

		<?php $pandora = 'http://localhost:82/pandora/js/pandora/';?>

		<script src="<?php echo $pandora; ?>box.js" type="text/javascript"></script>


		<script src="<?php bloginfo('template_url'); ?>/js/app.js" type="text/javascript"></script>		
	</body>
</html>