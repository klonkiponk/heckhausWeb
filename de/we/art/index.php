<?php
	include("../../../etc/config.php");
	include("../../../php/inc.db.php");
	include("../../../php/helpers.php");
	include("../../../php/db/selectFromDB.php");
	$lang = "de";
	$category = "we";
	$subCategory = "art";
?>
<?php include("../../../php/inc.head.php");?>
<body>
<?php include("../../../php/inc.header.subSites.php");?>
<div id="wrapper">	
<div class="container">

<article>
	<?php echo displayArticles($lang,$category,$subCategory);?>
</article>
	<?php include("../../../php/inc.footer.php") ;?>
</div>
<?php include("../../../php/inc.scripts.php");?>
<script type="text/javascript" src="../../../js/heckhaus.subSite.js"></script>
</body>
</html>