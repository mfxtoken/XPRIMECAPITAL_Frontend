"use strict";function _typeof(o){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(o){return typeof o}:function(o){return o&&"function"==typeof Symbol&&o.constructor===Symbol&&o!==Symbol.prototype?"symbol":typeof o})(o)}!function(t){var n={};function a(o){if(n[o])return n[o].exports;var e=n[o]={i:o,l:!1,exports:{}};return t[o].call(e.exports,e,e.exports,a),e.l=!0,e.exports}a.m=t,a.c=n,a.d=function(o,e,t){a.o(o,e)||Object.defineProperty(o,e,{enumerable:!0,get:t})},a.r=function(o){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(o,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(o,"__esModule",{value:!0})},a.t=function(e,o){if(1&o&&(e=a(e)),8&o)return e;if(4&o&&"object"==_typeof(e)&&e&&e.__esModule)return e;var t=Object.create(null);if(a.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&o&&"string"!=typeof e)for(var n in e)a.d(t,n,function(o){return e[o]}.bind(null,n));return t},a.n=function(o){var e=o&&o.__esModule?function(){return o.default}:function(){return o};return a.d(e,"a",e),e},a.o=function(o,e){return Object.prototype.hasOwnProperty.call(o,e)},a.p="",a(a.s=0)}([function(o,e,t){t(1),o.exports=t(2)},function(o,e){$(document).ready(function(){$(window).width(),$(window).on("load resize scroll",function(o){var e=$(window).scrollTop(),t=$("body"),n=$("header.header");e>n.height()/3?(n.addClass("headscroll"),t.addClass("bodyscroll")):(n.removeClass("headscroll"),t.removeClass("bodyscroll"))})}),$(document).ready(function(){$("body").addClass("daphne-navbody"),$(window).width()<1060?$(".daphne-mobile").click(function(){$(".daphne-navbody").toggleClass("daphne-moverlay")}):$('.daphne-navbar .nav-link[data-toggle="dropdown"]').click(function(){$("body").addClass("daphne-doverlay"),$(document).click(function(o){$(o.target).parent().hasClass("show")||setTimeout(function(){$("body").removeClass("daphne-doverlay")},250)})})}),$(function(){$('[data-toggle="tooltip"]').tooltip()}),$(function(){$('[data-toggle="popover"]').popover()})},function(o,e){$(document).ready(function(){$(".JsWelcomeBtn").on("click",function(){"openliveaccount"===$(this).attr("data-function")&&$(".openaccount-wrapper").removeClass("opendemoacc").addClass("openliveacc"),"opendemoaccount"===$(this).attr("data-function")&&$(".openaccount-wrapper").removeClass("openliveacc").addClass("opendemoacc")})}),$(".headsliderowl").owlCarousel({loop:!0,nav:!1,dots:!0,autoplay:!0,autoplayTimeout:5e3,autoplayHoverPause:!1,items:1,margin:30,autoWidth:!1,mouseDrag:!1,responsiveClass:!0,responsive:{0:{},819:{},1059:{},1379:{},1619:{},1939:{}}}),$(document).ready(function(){var o=$(".stickyside-ticker");$(".footer").css("padding-bottom",o.height()+"px")}),$(".stickytickersowl").owlCarousel({loop:!0,nav:!0,dots:!1,autoplay:!0,autoplayTimeout:2e3,autoplayHoverPause:!0,items:8,margin:0,autoWidth:!1,mouseDrag:!1,responsiveClass:!0,responsive:{0:{items:1,mouseDrag:!0},619:{items:2,mouseDrag:!0},819:{items:4,mouseDrag:!0},1059:{items:4},1379:{items:6},1939:{}}}),$(".homenewsnewscatlistowl").owlCarousel({loop:!0,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:5e3,autoplayHoverPause:!0,items:4,autoWidth:!1,mouseDrag:!0,animateIn:"fadeInLeft",animateOut:"fadeOutRight",responsiveClass:!0,responsive:{0:{items:1,margin:0},819:{items:2,margin:20},1059:{items:3,margin:20},1379:{items:4,margin:25},1619:{items:4,margin:30},1939:{margin:30}}}),$(".accounttypesboxowlx").owlCarousel({loop:!1,nav:!1,dots:!1,autoplay:!1,autoplayTimeout:2e3,autoplayHoverPause:!1,items:5,margin:0,autoWidth:!1,mouseDrag:!1,responsiveClass:!0,responsive:{0:{},819:{items:2,mouseDrag:!0,dots:!0},1059:{},1379:{},1939:{}}})}]);