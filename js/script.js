$(document).ready(function(){
		var browser = jQuery.browser;
		var version = parseFloat(browser.version);
		
			if(browser.msie && version == 7) {
				var sty = document.createElement('link');
				sty.setAttribute('href','css/ie7.css');
				sty.setAttribute('type','text/css');
				sty.setAttribute('rel','stylesheet');
				document.getElementsByTagName('head')[0].appendChild(sty);
	          }
			
			if(browser.msie && version == 8) {
				var sty = document.createElement('link');
				sty.setAttribute('href','css/ie8.css');
				sty.setAttribute('type','text/css');
				sty.setAttribute('rel','stylesheet');
				document.getElementsByTagName('head')[0].appendChild(sty);
	          }
			
			if(browser.msie && version == 9) {
				var sty = document.createElement('link');
				sty.setAttribute('href','css/ie9.css');
				sty.setAttribute('type','text/css');
				sty.setAttribute('rel','stylesheet');
				document.getElementsByTagName('head')[0].appendChild(sty);
	          }
				
			if(browser.webkit == true) {
				var sty = document.createElement('link');
				sty.setAttribute('href','css/webkit.css');
				sty.setAttribute('type','text/css');
				sty.setAttribute('rel','stylesheet');
				document.getElementsByTagName('head')[0].appendChild(sty);
	          }
			
			if(browser.opera == true) {
				var sty = document.createElement('link');
				sty.setAttribute('href','css/opera.css');
				sty.setAttribute('type','text/css');
				sty.setAttribute('rel','stylesheet');
				document.getElementsByTagName('head')[0].appendChild(sty);
	          }
			});