$(document).ready(function(){var e=$(window).height();e-=120;var t=$(window).width(),n=t*3;$("#wrapper").css("height",e);$("#wrapper").css("width",t);$("#container").css("width",n);$("#contentLeft").css("width",t);$("#contentRight").css("width",t);$("#contentCenter").css("width",t);$(window).resize(function(){var e=$(window).height();e-=120;var t=$(window).width(),n=t*3;$("#wrapper").css("height",e);$("#wrapper").css("width",t);$("#container").css("width",n);$("#contentLeft").css("width",t);$("#contentRight").css("width",t);$("#contentCenter").css("width",t)});$(document).on("click","span.toggler",function(){var e=$(this).attr("data-id"),t=this;$(".toggled[data-id='"+e+"']").slideToggle("slow",function(){$(t).find("span").toggleClass("less");$(t).find("span").toggleClass("more");var e=$("#container").find(".active").height();$("#container").css("height",e)})});$(document).on("click",".newsletterToggler",function(){var e=$(this).attr("data-id"),t=this;$(".toggled[data-id='"+e+"']").slideToggle("slow",function(){$(t).find("span").toggleClass("less");$(t).find("span").toggleClass("more");var e=$("#container").find(".active").height();$("#container").css("height",e)})});$(document).on("click",".navbar-fixed-top a",function(e){var t=$("#wrapper"),n=$(this).attr("data-link");$("#contentLeft").removeClass("active");$("#contentRight").removeClass("active");$("#contentCenter").removeClass("active");$(n).parent().parent().addClass("active");var r=$("#container").find(".active").height();$("#container").css("height",r);e.preventDefault();t.scrollTo(n,2e3,{queue:!0})});$(document).on("click","#workNews a",function(e){var t=$("#wrapper"),n=$(this).attr("data-link");$("#contentLeft").removeClass("active");$("#contentRight").removeClass("active");$("#contentCenter").removeClass("active");$(n).parent().parent().addClass("active");var r=$("#container").find(".active").height();$("#container").css("height",r);e.preventDefault();t.scrollTo(n,2e3,{queue:!0})});$(document).on("click","#forYouReferences ul li a",function(e){var t=$("#wrapper"),n=$(this).attr("data-link");$("#contentLeft").removeClass("active");$("#contentRight").removeClass("active");$("#contentCenter").removeClass("active");$(n).parent().parent().addClass("active");var r=$("#container").find(".active").height();$("#container").css("height",r);e.preventDefault();t.scrollTo(n,2e3,{queue:!0})});$("#weContact article").load("we/contact.php article");$("#wePress article").load("we/press.php article");$("#weProfile article").load("we/profile.php article");$("#weTeam article").load("we/team.php article");$("#workHome article").load("work/home.php article");$("#workBestOf article").load("work/bestOf.php article");$("#workSetDesign article").load("work/setDesign.php article");$("#workLadenbau article").load("work/ladenbau.php article");$("#workRetail article").load("work/retail.php article");$("#workDisplay article").load("work/display.php article");$("#workGraphics article").load("work/graphics.php article");$("#workShowroom article").load("work/showroom.php article");$("#workEvents article").load("work/events.php article");$("#workSetDesign article").load("work/setDesign.php article");$("#forYouJobs article").load("forYou/jobs.php article");$("#forYouReferences article").load("forYou/references.php article");$("#forYouPartner article").load("forYou/partner.php article");$("#forYouDownloads article").load("forYou/downloads.php article",function(){});$("#heckhausSlider").nivoSlider({effect:"slideInLeft",slices:15,boxCols:8,boxRows:4,animSpeed:750,pauseTime:3e3,directionNav:!0,controlNav:!1,controlNavThumbs:!1,pauseOnHover:!0,manualAdvance:!1});$(document).on("click",".submitNewsletter",function(){$.ajax({type:"post",url:"../php/newsletter.php",data:$(this).parent().serialize(),success:function(e){$("#newsletter form").html(e)}})});$("#slider1").tinycarousel({axis:"y",interval:!0,intervaltime:3e3});$("#slider2").tinycarousel({axis:"y",interval:!0,intervaltime:3e3});$("#weArt article").load("we/art.php article",function(){$("#europaSlider").nivoSlider({effect:"fade",controlNav:!1,controlNavThumbs:!1,directionNav:!1,pauseTime:2e3})})});