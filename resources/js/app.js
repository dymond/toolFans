/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap')

/*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var cer = document.getElementById('cerchio');
var pro = document.getElementById('prova');

var mouseX = 0, mouseY = 0, limitX, limitY, containerWidth;

window.onload = function(e) {
  var containerObjStyle = window.getComputedStyle(document.querySelectorAll("body")[0]);
  containerWidth =  parseFloat(containerObjStyle.width).toFixed(0);
  containerHeight = parseFloat(containerObjStyle.height).toFixed(0);
  var follower = document.getElementById("follower");
  var xp = 0, yp = 0;
  limitX = containerWidth-15;
  limitY = containerHeight-15;
  var loop = setInterval(function(){
    xp = (mouseX == limitX) ? limitX : mouseX -7;
    xp = (xp < 0) ? 0 : xp;
    yp = (mouseY == limitY) ? limitY : mouseY -7;
    yp = (yp < 0) ? 0 : yp;
    follower.style.left = xp + 'px';
    follower.style.top = yp + 'px';
  }, 15);
  window.onresize = function(e) {
    limitX = parseFloat(window.getComputedStyle(document.querySelectorAll("body")[0]).width).toFixed(0);
  }
  document.onmousemove = function(e) {
    mouseX = Math.min(e.pageX, limitX);
    mouseY = Math.min(e.pageY, limitY);
  }
};