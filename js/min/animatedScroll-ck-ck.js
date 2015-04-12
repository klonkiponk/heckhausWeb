!function(e){e.fn.animatescroll=function(n){var t=e.extend({},e.fn.animatescroll.defaults,n);if(jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,n,t,a,u){return jQuery.easing[jQuery.easing.def](e,n,t,a,u)},easeInQuad:function(e,n,t,a,u){return a*(n/=u)*n+t},easeOutQuad:function(e,n,t,a,u){return-a*(n/=u)*(n-2)+t},easeInOutQuad:function(e,n,t,a,u){return(n/=u/2)<1?a/2*n*n+t:-a/2*(--n*(n-2)-1)+t},easeInCubic:function(e,n,t,a,u){return a*(n/=u)*n*n+t},easeOutCubic:function(e,n,t,a,u){return a*((n=n/u-1)*n*n+1)+t},easeInOutCubic:function(e,n,t,a,u){return(n/=u/2)<1?a/2*n*n*n+t:a/2*((n-=2)*n*n+2)+t},easeInQuart:function(e,n,t,a,u){return a*(n/=u)*n*n*n+t},easeOutQuart:function(e,n,t,a,u){return-a*((n=n/u-1)*n*n*n-1)+t},easeInOutQuart:function(e,n,t,a,u){return(n/=u/2)<1?a/2*n*n*n*n+t:-a/2*((n-=2)*n*n*n-2)+t},easeInQuint:function(e,n,t,a,u){return a*(n/=u)*n*n*n*n+t},easeOutQuint:function(e,n,t,a,u){return a*((n=n/u-1)*n*n*n*n+1)+t},easeInOutQuint:function(e,n,t,a,u){return(n/=u/2)<1?a/2*n*n*n*n*n+t:a/2*((n-=2)*n*n*n*n+2)+t},easeInSine:function(e,n,t,a,u){return-a*Math.cos(n/u*(Math.PI/2))+a+t},easeOutSine:function(e,n,t,a,u){return a*Math.sin(n/u*(Math.PI/2))+t},easeInOutSine:function(e,n,t,a,u){return-a/2*(Math.cos(Math.PI*n/u)-1)+t},easeInExpo:function(e,n,t,a,u){return 0==n?t:a*Math.pow(2,10*(n/u-1))+t},easeOutExpo:function(e,n,t,a,u){return n==u?t+a:a*(-Math.pow(2,-10*n/u)+1)+t},easeInOutExpo:function(e,n,t,a,u){return 0==n?t:n==u?t+a:(n/=u/2)<1?a/2*Math.pow(2,10*(n-1))+t:a/2*(-Math.pow(2,-10*--n)+2)+t},easeInCirc:function(e,n,t,a,u){return-a*(Math.sqrt(1-(n/=u)*n)-1)+t},easeOutCirc:function(e,n,t,a,u){return a*Math.sqrt(1-(n=n/u-1)*n)+t},easeInOutCirc:function(e,n,t,a,u){return(n/=u/2)<1?-a/2*(Math.sqrt(1-n*n)-1)+t:a/2*(Math.sqrt(1-(n-=2)*n)+1)+t},easeInElastic:function(e,n,t,a,u){var r=1.70158,i=0,s=a;if(0==n)return t;if(1==(n/=u))return t+a;if(i||(i=.3*u),s<Math.abs(a)){s=a;var r=i/4}else var r=i/(2*Math.PI)*Math.asin(a/s);return-(s*Math.pow(2,10*(n-=1))*Math.sin(2*(n*u-r)*Math.PI/i))+t},easeOutElastic:function(e,n,t,a,u){var r=1.70158,i=0,s=a;if(0==n)return t;if(1==(n/=u))return t+a;if(i||(i=.3*u),s<Math.abs(a)){s=a;var r=i/4}else var r=i/(2*Math.PI)*Math.asin(a/s);return s*Math.pow(2,-10*n)*Math.sin(2*(n*u-r)*Math.PI/i)+a+t},easeInOutElastic:function(e,n,t,a,u){var r=1.70158,i=0,s=a;if(0==n)return t;if(2==(n/=u/2))return t+a;if(i||(i=.3*u*1.5),s<Math.abs(a)){s=a;var r=i/4}else var r=i/(2*Math.PI)*Math.asin(a/s);return 1>n?-.5*s*Math.pow(2,10*(n-=1))*Math.sin(2*(n*u-r)*Math.PI/i)+t:s*Math.pow(2,-10*(n-=1))*Math.sin(2*(n*u-r)*Math.PI/i)*.5+a+t},easeInBack:function(e,n,t,a,u,r){return void 0==r&&(r=1.70158),a*(n/=u)*n*((r+1)*n-r)+t},easeOutBack:function(e,n,t,a,u,r){return void 0==r&&(r=1.70158),a*((n=n/u-1)*n*((r+1)*n+r)+1)+t},easeInOutBack:function(e,n,t,a,u,r){return void 0==r&&(r=1.70158),(n/=u/2)<1?a/2*n*n*(((r*=1.525)+1)*n-r)+t:a/2*((n-=2)*n*(((r*=1.525)+1)*n+r)+2)+t},easeInBounce:function(e,n,t,a,u){return a-jQuery.easing.easeOutBounce(e,u-n,0,a,u)+t},easeOutBounce:function(e,n,t,a,u){return(n/=u)<1/2.75?7.5625*a*n*n+t:2/2.75>n?a*(7.5625*(n-=1.5/2.75)*n+.75)+t:2.5/2.75>n?a*(7.5625*(n-=2.25/2.75)*n+.9375)+t:a*(7.5625*(n-=2.625/2.75)*n+.984375)+t},easeInOutBounce:function(e,n,t,a,u){return u/2>n?.5*jQuery.easing.easeInBounce(e,2*n,0,a,u)+t:.5*jQuery.easing.easeOutBounce(e,2*n-u,0,a,u)+.5*a+t}}),"html,body"==t.element){var a=this.offset().top;e(t.element).animate({scrollTop:a-t.padding},t.scrollSpeed,t.easing)}else e(t.element).animate({scrollTop:this.offset().top-this.parent().offset().top+this.parent().scrollTop()-t.padding},t.scrollSpeed,t.easing)},e.fn.animatescroll.defaults={easing:"swing",scrollSpeed:800,padding:0,element:"html,body"}}(jQuery);