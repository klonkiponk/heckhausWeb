<?php
	include("../../../etc/config.php");
	include("../../../php/inc.db.php");
	include("../../../php/helpers.php");
	include("../../../php/db/selectFromDB.php");
	$lang = "de";
	$category = "forYou";
	$subCategory = "downloads";
?>
<?php include("../../../php/inc.head.php");?>
<body>
<?php include("../../../php/inc.header.subSites.php");?>
<div id="wrapper">	
<div class="container">

<article>
	<header class="page-header">
	<h1>For You &gt; <small>Downloads</small></h1>
	</header>
	<?php
		echo displayArticles($lang,$category,$subCategory);
	?>
</article>
	<?php include("../../../php/inc.footer.php") ;?>
</div>
<?php include("../../../php/inc.scripts.php");?>
<script type="text/javascript" src="../../../js/heckhaus.subSite.js"></script>
</body>
</html>