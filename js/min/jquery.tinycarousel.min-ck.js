!function(t){function i(i,n){function e(){if(n.controls&&(v.toggleClass("disable",0>=g),f.toggleClass("disable",!(p>g+1))),n.pager){var i=t(".pagenum",m);i.removeClass("active"),t(i[g]).addClass("active")}}function a(i){return t(this).hasClass("pagenum")&&l.move(parseInt(this.rel,10),!0),!1}function o(){n.interval&&!x&&(clearTimeout(y),y=setTimeout(function(){g=g+1===p?-1:g,k=g+1===p?!1:0===g?!0:k,l.move(k?1:-1)},n.intervaltime))}function r(){n.controls&&v.length>0&&f.length>0&&(v.click(function(){return l.move(-1),!1}),f.click(function(){return l.move(1),!1})),n.interval&&i.hover(l.stop,l.start),n.pager&&m.length>0&&t("a",m).click(a)}function s(){d=b?t(h[0]).outerWidth(!0):t(h[0]).outerHeight(!0);var i=Math.ceil((b?c.outerWidth():c.outerHeight())/(d*n.display)-1);return p=Math.max(1,Math.ceil(h.length/n.display)-i),g=Math.min(p,Math.max(1,n.start))-2,u.css(b?"width":"height",d*h.length),l.move(1),r(),l}var l=this,c=t(".viewport:first",i),u=t(".overview:first",i),h=u.children(),f=t(".next:first",i),v=t(".prev:first",i),m=t(".pager:first",i),d=0,p=0,g=0,y=void 0,x=!1,k=!0,b="x"===n.axis;return this.stop=function(){clearTimeout(y),x=!0},this.start=function(){x=!1,o()},this.move=function(t,i){if(g=i?t:g+=t,g>-1&&p>g){var a={};a[b?"left":"top"]=-(g*d*n.display),u.animate(a,{queue:!1,duration:n.animation?n.duration:0,complete:function(){"function"==typeof n.callback&&n.callback.call(this,h[g],g)}}),e(),o()}},s()}t.tiny=t.tiny||{},t.tiny.carousel={options:{start:1,display:1,axis:"x",controls:!0,pager:!1,interval:!1,intervaltime:3e3,rewind:!1,animation:!0,duration:1e3,callback:null}},t.fn.tinycarousel_start=function(){t(this).data("tcl").start()},t.fn.tinycarousel_stop=function(){t(this).data("tcl").stop()},t.fn.tinycarousel_move=function(i){t(this).data("tcl").move(i-1,!0)},t.fn.tinycarousel=function(n){var e=t.extend({},t.tiny.carousel.options,n);return this.each(function(){t(this).data("tcl",new i(t(this),e))}),this}}(jQuery);