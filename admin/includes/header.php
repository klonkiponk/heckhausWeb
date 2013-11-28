<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang_page_title; ?></title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="css/style.css" media="all" />
	<link rel="stylesheet" href="css/hide.css" media="all" />
	<link rel="stylesheet" href="plugins/plupload/css/plupload.queue.css" media="all" />
	<link rel="stylesheet" href="plugins/redactor/css/redactor.css" />
<!--	<link rel="stylesheet" href="http://localhost/heckhausWeb/css/redactor_editor.css" />-->
	
	<meta name = "viewport" content = "initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no">
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
	
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ios-icon-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ios-sm-precomposed.png" />
	
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/redactor/redactor.min.js"></script>
	<script src="plugins/jquery/jquery_ui.js"></script>
	
	<!-- <script src="plugins/redactor/de.js"></script> -->
	
	<!-- Redactor's plugin -->
    <script src="plugins/redactor/fullscreen.js"></script>
    <script src="plugins/redactor/fontsize.js"></script>
    <script src="plugins/redactor/fontfamily.js"></script>
    <script src="plugins/redactor/fontcolor.js"></script>
	
	<script>
		$(document).ready(function(){
			$('a.embed_toggle').on('click', function(e) {    
			e.preventDefault();    
			$('#main').slideToggle(400);})		
		});
	</script>
	
	<script>
		$(document).ready(
			function()
			{
				$('#redactor_content').redactor({ 
					iframe: true,
					css: 'http://localhost/heckhausWeb/css/redactor_editor.css',
					lang: 'en',
					buttons: ['html', '|', 'formatting', '|', 'bold', 'italic'],
					paragraphy: false,
					imageUpload: 'includes/editor_images.php',
					imageGetJson: 'includes/data_json.php',
					fileUpload: 'includes/editor_files.php',
					convertDivs: false,
					autoresize: true,
					minHeight: 350,
					phpTags: true,
					linebreaks: true,
					linkEmail: true,
					plugins: ['fullscreen','fontsize','fontfamily','fontcolor'],
					removeEmptyTags: false,
					buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'deleted', '|',
'unorderedlist', 'orderedlist', 'outdent', 'indent', '|',
'image', 'video', 'file', 'table', 'link', '|', '|', 'alignment', '|', 'horizontalrule']
				});
			}
		);
	</script>
	
</head>
	
<body>

<script> 
	function select_all(obj) 
		{ var text_val=eval(obj); 
			text_val.select(); 
		} 
</script>
		
<div id="header">

<a href="index.php?p=home">
<div class="logo"></div>
</a>

<a class="logout" href="includes/logout.php"><?php echo $lang_nav_logout; ?></a>

</div>