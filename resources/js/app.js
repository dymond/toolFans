/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap')

/*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/


function getMouseCoords(e) {
  var e = e || window.event;
  document.getElementById('msg').innerHTML = e.clientX + ', ' + e.clientY + '<br><br><strong>hell yeah brother</strong>' + e.screenX + ', ' + e.screenY;
}

var followCursor = (function() {
  var s = document.createElement('div');
  s.style.position = 'absolute';
  s.style.zIndex = '9999';
  s.style.margin = '0';
  s.style.color = 'red';
  s.style.padding = '5px';
  s.innerHTML = '<strong>&#x1F918 hell yeah!!</strong>'
  return {
		init: function() {
			document.body.appendChild(s);
		},
		run: function(e) {
			var e = e || window.event;
			s.style.left  = (e.clientX + 6) + 'px';
			s.style.top = (e.clientY - 12) + 'px';
			getMouseCoords(e);
		}
  };
}());

window.onload = function() {
  followCursor.init();
  document.body.onmousemove = followCursor.run;
}