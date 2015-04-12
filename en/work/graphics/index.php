<?php
	include("../../../etc/config.php");
	include("../../../php/inc.db.php");
	include("../../../php/helpers.php");
	include("../../../php/db/selectFromDB.php");
	$lang = "en";
	$category = "work";
	$subCategory = "graphics";
?>
<?php include("../../../php/inc.head.php");?>
<body>
<?php include("../../../php/inc.header.subSites.php");?>
<div id="wrapper">	
<div class="container">

<article>
	<header class="page-header">
	<h1>Arbeit &gt; <small>GRAPHICS & WINDOW DRESSING</small></h1>
	</header>	
	<section class="abstract">
	<div class="toggled" data-id="workGraphics">
	Heckhaus turns ideas into completely new experiences. We add a unique dimension to shop systems and showrooms. Whether your preference is futuristic, stylish or "used look", the overall impression we create is invariably striking. We use a wide range of materials, from precise prints and film plots to three-dimensional objects and interactive POS material. Top quality is assured by careful attention to detail. Our visualizations are exactly right for the products, our films and foils adhere to any surface, and your logo is reproduced with absolute accuracy. Our services are available to you either individually or in the form of end-to-end solutions.
	</div>
	<span class="toggler" data-id="workGraphics">+ / -</span>
	</section>
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