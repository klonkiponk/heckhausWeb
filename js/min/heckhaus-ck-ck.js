$(document).ready(function(){var e=$(window).height();e-=120;var t=$(window).width(),a=3*t;$("#wrapper").css("height",e),$("#wrapper").css("width",t),$("#container").css("width",a),$("#contentLeft").css("width",t),$("#contentRight").css("width",t),$("#contentCenter").css("width",t),$(window).resize(function(){var e=$(window).height();e-=120;var t=$(window).width(),a=3*t;$("#wrapper").css("height",e),$("#wrapper").css("width",t),$("#container").css("width",a),$("#contentLeft").css("width",t),$("#contentRight").css("width",t),$("#contentCenter").css("width",t)}),$(document).on("click","span.toggler",function(){var e=$(this).attr("data-id"),t=this;$(".toggled[data-id='"+e+"']").slideToggle("slow",function(){$(t).find("span").toggleClass("less"),$(t).find("span").toggleClass("more");var e=$("#container").find(".active").height();$("#container").css("height",e)})}),$(document).on("click",".newsletterToggler",function(){var e=$(this).attr("data-id"),t=this;$(".toggled[data-id='"+e+"']").slideToggle("slow",function(){$(t).find("span").toggleClass("less"),$(t).find("span").toggleClass("more");var e=$("#container").find(".active").height();$("#container").css("height",e)})}),$(document).on("click",".navbar-fixed-top .navbar-nav a",function(e){var t=$("#wrapper"),a=$(this).attr("data-link");$("#contentLeft").removeClass("active"),$("#contentRight").removeClass("active"),$("#contentCenter").removeClass("active"),$(a).parent().parent().addClass("active");var i=$("#container").find(".active").height();$("#container").css("height",i),e.preventDefault(),t.scrollTo(a,2e3,{queue:!0})}),$(document).on("click","#workNews a",function(e){var t=$("#wrapper"),a=$(this).attr("data-link");$("#contentLeft").removeClass("active"),$("#contentRight").removeClass("active"),$("#contentCenter").removeClass("active"),$(a).parent().parent().addClass("active");var i=$("#container").find(".active").height();$("#container").css("height",i),e.preventDefault(),t.scrollTo(a,2e3,{queue:!0})}),$(document).on("click","#linkToNewsletter",function(e){var t=$("#wrapper"),a=$(this).attr("data-link");$("#contentLeft").removeClass("active"),$("#contentRight").removeClass("active"),$("#contentCenter").removeClass("active"),$(a).parent().parent().addClass("active");var i=$("#container").find(".active").height();$("#container").css("height",i),e.preventDefault(),t.scrollTo(a,2e3,{queue:!0})}),$(document).on("click","#forYouReferences ul li a",function(e){var t=$("#wrapper"),a=$(this).attr("data-link");$("#contentLeft").removeClass("active"),$("#contentRight").removeClass("active"),$("#contentCenter").removeClass("active"),$(a).parent().parent().addClass("active");var i=$("#container").find(".active").height();$("#container").css("height",i),e.preventDefault(),t.scrollTo(a,2e3,{queue:!0})}),$("#wePress article").load("we/press/index.php article"),$("#weProfile article").load("we/profile/index.php article"),$("#weTeam article").load("we/team/index.php article"),$("#workHome article").load("work/home/index.php article"),$("#workBestOf article").load("work/bestOf/index.php article"),$("#workSetDesign article").load("work/setDesign/index.php article"),$("#workLadenbau article").load("work/ladenbau/index.php article"),$("#workRetail article").load("work/retail/index.php article"),$("#workDisplay article").load("work/display/index.php article"),$("#workGraphics article").load("work/graphics/index.php article"),$("#workShowroom article").load("work/showroom/index.php article"),$("#workEvents article").load("work/events/index.php article"),$("#workSetDesign article").load("work/setDesign/index.php article"),$("#forYouJobs article").load("forYou/jobs/index.php article"),$("#forYouReferences article").load("forYou/references/index.php article"),$("#forYouPartner article").load("forYou/partner/index.php article"),$("#forYouDownloads article").load("forYou/downloads/index.php article",function(){}),$("#heckhausSlider").nivoSlider({effect:"slideInLeft",slices:15,boxCols:8,boxRows:4,animSpeed:750,pauseTime:3e3,directionNav:!0,controlNav:!1,controlNavThumbs:!1,pauseOnHover:!0,manualAdvance:!1}),$(document).on("click",".submitNewsletter",function(){$.ajax({type:"post",url:"../php/newsletter.php",data:$(this).parent().serialize(),success:function(e){$("#newsletter form").html(e)}})}),$(document).on("click",".spamProtection img",function(){$(".spamProtection img").removeClass("activeImg"),$(this).addClass("activeImg")}),$("#slider1").tinycarousel({axis:"y",interval:!0,intervaltime:3e3}),$("#slider2").tinycarousel({axis:"y",interval:!0,intervaltime:3e3}),$("#weArt article").load("we/art/index.php article",function(){$("#europaSlider").nivoSlider({effect:"fade",controlNav:!1,controlNavThumbs:!1,directionNav:!1,pauseTime:2e3})})});