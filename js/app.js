// App
PANDORA.open(function(){
	'use strict';

	// Store
	PANDORA.store('#header-main','$header');

	var onComplete = function(async){
		var dataPage = PANDORA.parseData($('#article-main').attr('data-page'));

		switch(dataPage.page){
			case 'home':
				PANDORA.log('Home');
				break;
			default:
				//
		}

	};




	onComplete(false);
});