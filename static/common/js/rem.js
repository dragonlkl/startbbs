! function() {
	var reset = "@charset \"utf-8\";html{::-webkit-scrollbar{width:0px;height:0px;}overflow-y:scroll;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}input,select,textarea{font-size:100%}table{border-collapse:collapse;border-spacing:0}fieldset,img{border:0}abbr,acronym{border:0;font-variant:normal}del{text-decoration:line-through}address,caption,cite,code,dfn,em,th,var{font-style:normal;font-weight:500}ol,ul{list-style:none;overflow:hidden}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:500}q:before,q:after{content:''}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}a:hover{text-decoration:none}ins,a{text-decoration:none}.clearfix:after {content:\".\";display:block;height: 0;clear:both;visibility: hidden;}.clearfix{display:inline-block;}*html .clearfix {height: 1%;}.clearfix {display: block;}button,input,optgroup,select,textarea{-webkit-appearance:none;}input::-webkit-input-placeholder{color:#ccc;}input:focus::-webkit-input-placeholder{color:#ccc;}a,img{-webkit-touch-callout: none;}",
		docStyle = document.createElement("style");
	if (document.getElementsByTagName("head")[0].appendChild(docStyle), docStyle.styleSheet) docStyle.styleSheet.disabled || (docStyle.styleSheet.cssText = reset);
	else try {
		docStyle.innerHTML = reset
	} catch (c) {
		docStyle.innerText = reset
	}
}();
;(function(win, lib) {
	var win = window;
	var doc = win.document;
	var docEl = doc.documentElement;
	var tid;

	function refreshRem(){
	    var width = docEl.getBoundingClientRect().width;
		if (width > 720) {
			width = 720 * 1;
		}
	    var rem = width / 16;
	    docEl.style.fontSize = rem + 'px';
	}

	win.addEventListener('resize', function() {
	    clearTimeout(tid);
	    tid = setTimeout(refreshRem, 300);
	}, false);
	win.addEventListener('pageshow', function(e) {
	    if (e.persisted) {
	        clearTimeout(tid);
	        tid = setTimeout(refreshRem, 300);
	    }
	}, false);

	refreshRem();
})(window, window['lib'] || (window['lib'] = {}));
