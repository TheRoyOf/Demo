// JavaScript Document

window.onscroll = function() {
var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  	document.getElementById("parallax-bg_1").style.backgroundPositionY= scrolled/20 + "%";
	document.getElementById("parallax-bg_2").style.backgroundPositionY= scrolled/25 + "%";
	document.getElementById("parallax-bg_3").style.backgroundPositionY= scrolled/40 + "%";
	document.getElementById("parallax-bg_4").style.backgroundPositionY= scrolled/60 + "%";
	document.getElementById("parallax-bg_down").style.backgroundPositionY= scrolled/40 + "%";
}
