var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

var channel = getUrlParameter('channel');

if ( (channel.indexOf('google') !== -1) && (channel.indexOf('facebook') !== -1) && (channel.indexOf('seo') !== -1) ) {
  var channel = 'all';
}

if ( (channel.indexOf('google') !== -1) && (channel.indexOf('facebook') !== -1) && (channel.indexOf('seo') !== -1) && (channel.indexOf('website') !== -1) ) {
  var channel = 'all';
}

if ( (channel.indexOf('google') !== -1) && (channel.indexOf('facebook') !== -1) && (channel.indexOf('seo') !== -1) && (channel.indexOf('website') !== -1) && (channel.indexOf('cro') !== -1) ) {
  var channel = 'all';
}

if ( (channel.indexOf('google') !== -1) && (channel.indexOf('facebook') !== -1) && (channel.indexOf('seo') !== -1) && (channel.indexOf('website') !== -1) && (channel.indexOf('cro') !== -1) && (channel.indexOf('linkedin') !== -1) ) {
  var channel = 'all';
}

if ( (channel.indexOf('google') !== -1) || (channel.indexOf('facebook') !== -1) || (channel.indexOf('linkedin') !== -1) ) {
  var channel = 'ppc';
}

if ( (channel.indexOf('cro') !== -1) || (channel.indexOf('website') !== -1) ) {
  var channel = 'website';
}


jQuery(document).ready(function($){

	switch (channel) { 
		case 'ppc': 
			$('#banner1').each(function(){
				$(this).parent().prepend(this);
				$('.company').text('Push Group').attr('style', 'color: #e31b70;');
				$('#banner2,#banner3,#banner4').hide();
			});
			$("<div class='alternatives'><h3>Below you can find some notable other agencies if you need a second opinion!</h3></div>").insertAfter('#banner1');
			break;
		case 'seo': 
			var minutes = new Date().getMinutes();
			if (minutes%2 == 0){
				$('#banner2').each(function(){
				$(this).parent().prepend(this);
				$('.company').text('Bubbl').attr('style', 'color: #1ba8ae;');
				$('#banner2 .mrkt_button').attr('style', 'background-color: #1ba8ae;');
				$('#banner3,#banner4,#banner5').hide();
			});
			$("<div class='alternatives'><h3>Below you can find some notable other agencies if you need a second opinion!</h3></div>").insertAfter('#banner2');
			}else{
				$('#banner4').each(function(){
				$(this).parent().prepend(this);
				$('.company').text('Artemis').attr('style', 'color: #fbaa27;');
				$('#banner4 .mrkt_button').attr('style', 'background-color: #1ba8ae;');
				$('#banner3,#banner2,#banner5').hide();
			});
			$("<div class='alternatives'><h3>Below you can find some notable other agencies if you need a second opinion!</h3></div>").insertAfter('#banner4');
			}			
			break;
		case 'website': 
			$('#banner3').each(function(){
				$(this).parent().prepend(this);
				$('.company').text('Pop Creative').attr('style', 'color: #F4AE25;');
				$('#banner2,#banner4').hide();
			});
			$("<div class='alternatives'><h3>Below you can find some notable other agencies if you need a second opinion!</h3></div>").insertAfter('#banner3');
			break;
		case 'all': 
			$('#banner1').each(function(){
				$(this).parent().prepend(this);
				$('.company').text('Push Group').attr('style', 'color: #e31b70;');
				//$('#banner2,#banner3,#banner4').hide();
			});
			$("<div class='alternatives'><h3>ALL Below you can find some notable other agencies if you need a second opinion!</h3></div>").insertAfter('#banner1');
			break;
			default:
			$('.company').text('Push Group').attr('style', 'color: #e31b70;');
			$("<div class='alternatives'><h3>Below you can find some notable other agencies if you need a second opinion!</h3></div>").insertAfter('#banner1');
			//$('#banner2,#banner3,#banner4').hide();
	}
}); 
