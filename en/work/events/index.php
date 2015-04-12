<?php
	include("../../../etc/config.php");
	include("../../../php/inc.db.php");
	include("../../../php/helpers.php");
	include("../../../php/db/selectFromDB.php");
	$lang = "en";
	$category = "work";
	$subCategory = "events";
?>
<?php include("../../../php/inc.head.php");?>
<body>
<?php include("../../../php/inc.header.subSites.php");?>
<div id="wrapper">	
<div class="container">

<article>
	<header class="page-header">
	<h1>Work &gt; <small>TRADE SHOW / EVENT</small></h1>
	</header>
	<?php
		echo displayArticles($lang,$category,$subCategory);
	?>
	<?php //include("../../../admin/data/blocks/en/work_events.html"); ?>	
</article>
	<?php include("../../../php/inc.footer.php") ;?>
</div>
<?php include("../../../php/inc.scripts.php");?>
<script type="text/javascript" src="../../../js/heckhaus.subSite.js"></script>
</body>
</html>