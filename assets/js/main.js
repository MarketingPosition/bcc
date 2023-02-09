var _uf = _uf || {};
_uf.domain = ".businesscostcomparison.co.uk";

_uf.additional_params_map = {
  gclid: "gclid"
};

jQuery('.products__item__content').hover(function() {

});

/* Dynamic Headline */
jQuery(document).ready(function() {
	function getParameterByName(name, url) {
	    if (!url) url = window.location.href;
	    name = name.replace(/[\[\]]/g, "\\$&");
	    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
	        results = regex.exec(url);
	    if (!results) return null;
	    if (!results[2]) return '';
	    return decodeURIComponent(results[2].replace(/\+/g, " "));
	}
  var txtTag = getParameterByName('headline');
  if (txtTag) {
  jQuery(".headline .hero__title > h1").text(txtTag.replace(/\-/g, " "));
  }
});
