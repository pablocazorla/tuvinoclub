// App
PANDORA.wootabs = {
	select: function(context) {
		var ctx = PANDORA.getContext(context);
		$(ctx + '.woocommerce-tabs').each(function() {
			var $this = $(this),
				$li = $this.find('.tabs li'),
				$a = $this.find('.tabs li a'),
				$panel = $this.find('.panel.entry-content');

			$a.click(function(e) {
				e.preventDefault();
				$li.removeClass('active');
				$(this).parent().addClass('active');

				var u = $(this).attr('href');
				$panel.hide();
				$(u).show();
			});
		});
		if (window.location.hash.indexOf('comment-') !== -1) {
			$('#tab-reviews').click();
		}
	}
};
PANDORA.open(function() {
	'use strict';

	// Store
	PANDORA.store('#header-main', '$header');

	var onComplete = function(async) {
		var context = (async) ? '' : '#content-main ',
			dataPage = PANDORA.parseData($('#article-main').attr('data-page'));

		switch (dataPage.page) {
			case 'home':
				PANDORA.log('Home');
				break;
			case 'woocommerce':
				switch (dataPage.subpage) {
					case 'shop':
						PANDORA.WOORATING.select(context);
						//PANDORA.WOOQUICKVIEW.select(context);
						break;
					case 'product':
						PANDORA.wootabs.select(context);
						PANDORA.WOORATING.select(context);
						PANDORA.INPUTS.select(context);
						break;
					case 'cart':
						PANDORA.INPUTS.select(context);
						break;
					default:
						//			
				}

				break;
			default:
				//
		}

	};



	onComplete(false);
});