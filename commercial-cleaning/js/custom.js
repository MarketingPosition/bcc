/* Slick SLider */
$( "<span> </span>" ).insertBefore(".dropdown-toggle");
  $(".nav-item.dropdown  span").click(function(){
    $(this).parent().find(".dropdown-menu").toggle();
  });
$('.logos-slider').slick({
	dots: false,
	arrows: false,
	infinite: true,
	autoplay: true,
	autoplaySpeed: 2500,
	//speed: 300,
	slidesToShow: 6,
	slidesToScroll: 1,
	responsive: [
		{
		breakpoint: 1400,
			settings: {
				slidesToShow: 7,
				slidesToScroll: 2,
				infinite: false,
				dots: true
			}
		},
		{
		breakpoint: 992,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1
			}
		},
		{
		breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false
			}
		},
		{
		breakpoint: 480,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false
			}
		}
	]
});	

