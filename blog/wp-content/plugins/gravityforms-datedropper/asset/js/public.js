jQuery(document).ready(function($){
	function init(){
		$('.datedropper').remove();
	    $('.gfield_jb_datedropper').each(function(i){
	    	var ths = $(this);
	    	var d_class = (ths.data('arrow-d')) ? 'picker-arrow-d ' : '';
	    		d_class += (ths.data('arrow-m')) ? 'picker-arrow-m ' : '';
	    		d_class += (ths.data('arrow-y')) ? 'picker-arrow-y' : '';

	    	if( ths.data('submit-value') != "" ) {
				var dte = new Date( ths.data('submit-value') );
				var m = dte.getMonth() + 1,
					d = dte.getDate(),
					y = dte.getFullYear();
				var sd = m + '-' + d + '-' + y;
				ths.attr('data-default-date',sd);
			}
	    	ths.dateDropper();
	    	$( '#datedropper-' + i ).addClass( d_class );
		});
	}
	init();
	jQuery(document).on('gform_post_render', function(){
		init();
	});
});