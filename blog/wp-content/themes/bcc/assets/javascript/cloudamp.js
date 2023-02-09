window._cloudAmp = window._cloudAmp || {};
	_cloudAmp.forms = [];
	(function () {
		var scripts = document.getElementsByTagName('script'),
		    sLen = scripts.length,
		    ca_script = document.createElement('script'),
		    head = document.getElementsByTagName('head'),
		    protocol = document.location.protocol,
		    httpsDomain = '1d5ef9e9369608f625a8-878b10192d4a956595449977ade9187d.ssl.cf2.rackcdn.com',
		    httpDomain = 'trk.cloudamp.net',
		    filename = 'ctk.js',
		    srcDomain = protocol === 'http:' ? httpDomain : httpsDomain;

		ca_script.type = 'text/javascript';
		ca_script.async = true;
		ca_script.src = protocol + '//' + srcDomain + '/' + filename;
		head[0].appendChild(ca_script);
	})();
