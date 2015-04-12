<?php
	include("../../../etc/config.php");
	include("../../../php/inc.db.php");
	include("../../../php/helpers.php");
	include("../../../php/db/selectFromDB.php");
	$lang = "en";
	$category = "work";
	$subCategory = "ladenbau";
?>
<?php include("../../../php/inc.head.php");?>
<body>
<?php include("../../../php/inc.header.subSites.php");?>
<div id="wrapper">	
<div class="container">

<article>
	<header class="page-header">
	<h1>Work &gt; <small>SHOPFITTING & CORPORATE ARCHITECTURE</small></h1>
	</header>
	<section class="abstract">
	<div class="toggled" data-id="workLadenbau">
	Even the smallest spaces can provide room for inspiration. Whether your project involves the entire outfitting of an international chain store or of a single shop counter, a trendy young brand or a well established market leader. Whatever your requirements, we can guarantee three things right from the start: an independent design language, needs-based planning, and strict adherence to budgets.
	</div>
	<span class="toggler" data-id="workLadenbau">+ / -</span>
	</section>	
	<?php
		echo displayArticles($lang,$category,$subCategory);
	?>
	<?php //include("../../../admin/data/blocks/en/work_ladenbau.html"); ?>	
</article>
	<?php include("../../../php/inc.footer.php") ;?>
</div>
<?php include("../../../php/inc.scripts.php");?>
<script type="text/javascript" src="../../../js/heckhaus.subSite.js"></script>
</body>
</html>