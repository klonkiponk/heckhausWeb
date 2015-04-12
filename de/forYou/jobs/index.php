<?php
	include("../../../etc/config.php");
	include("../../../php/inc.db.php");
	include("../../../php/helpers.php");
	include("../../../php/db/selectFromDB.php");
	$lang = "de";
	$category = "forYou";
	$subCategory = "jobs";
?>
<?php include("../../../php/inc.head.php");?>
<body>
<?php include("../../../php/inc.header.subSites.php");?>
<div id="wrapper">	
<div class="container">

<article>
<header class="page-header">
<h1>For you &gt; <small>Jobs</small></h1>
 </header> <section class="abstract">
<hr>
<div class="row">
	<div class="col-md-6 medImg">
		 <img src="/admin/data/img/uploads/heckhaus_forYou_Jobs.jpg" class="pull-left img-responsive">
	</div>
	<div class="col-md-6 medTxt">
		<div class="caption">
			<h2>Heckhaus / <small>Jobs</small></h2>
		</div>
		                            Wir glauben an gutes Design und daran, dass es dort entsteht, wo Menschen über den Tellerrand hinausblicken und neue Wege gehen. Deshalb arbeiten wir mit Designern und Projektleitern zusammen, die nicht nur viel können, sondern auch viel bewegen wollen. Sie sind engagiert, mit Spaß bei der Sache und wollen frische Ideen einbringen? Dann werden Sie Teil unseres Teams: <a href="mailto:jobs@heckhaus.de">jobs@heckhaus.de</a> <br>
		 <br>	
	<?php
		echo displayJobs();
	?>
		 <br>
		Wir bieten unseren Mitarbeitern Inspiration und die Möglichkeit, an internationalen Projekten für Kunden aus der Sports-, Lifestyle- und Fashionbranche mitzuwirken. Ein herzliches und offenes Team wartet auf Sie.
	</div>
	<div class="row">
	</div>
</div>
 </section>	
</article>
	<?php include("../../../php/inc.footer.php") ;?>
</div>
<?php include("../../../php/inc.scripts.php");?>
<script type="text/javascript" src="../../../js/heckhaus.subSite.js"></script>
</body>
</html>