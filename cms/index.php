<?php session_start();
	if(!isset($_SESSION['login'])){
		header('Location:login.php');
	} else {
		if ($_SESSION['login'] !== "user"){
			header('Location:login.php');
		}
	}	
?>
<!DOCTYPE html>
<html>
  <head>
    <title>HECKHAUS CMS</title>
	<link type="image/icon" href="http://heckhaus.de/img/heckhaus_favicon.ico" rel="shortcut icon" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <meta charset="UTF-8">
	<meta name="apple-mobile-web-app-capable" content="yes" />    
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  </head>
  <body>

		<!-- !Modal -->
		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">DELETE</h4>
		      </div>
		      <div class="modal-body">
		        Möchten sie wirklich löschen?
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-danger" id="deleteButton">Confirm Delete</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- !wrapper -->
	    <nav id="menu" class="navbar col-xs-2">
	    	<span class="navbar-brand pull-right">CMS</span>
	    	<div class="clearfix"></div>
			<ul class="list-group">
				<li class="list-group-item"><span data-href="editChooser">ÜBERSICHT</span></li>			
				
	            <li class="list-group-item"><span data-href="newPost">NEUER BEITRAG</span></li>
				
				<li class="list-group-item"><span data-href="newJob">NEW JOB</span></li>
				
				<li class="list-group-item"><span data-href="editJumbotronWe">JUMBOTRON WE</span></li>
				
				<li class="list-group-item"><span data-href="editJumbotronWork">JUMBOTRON WORK</span></li>				
			</ul>
			<div class="swiper"></div>
	    </nav>
	    <div id="content" class="pusher col-xs-11 col-xs-offset-1">
			<div id="innerPusher">
	        <article id="main">
			</article>
			</div>
	    </div>
	    
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>	  
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="js/hecklive.js"></script>
	<?php //INCLUDE ADDITIONAL SCRIPTS DEPENDING ON THE BROWSER
	$iOS = false;
	if (preg_match("/\biPhone\b/i",$_SERVER['HTTP_USER_AGENT']) OR preg_match("/\biPad\b/i",$_SERVER['HTTP_USER_AGENT'])) {
		$iOS = true;
	}
	if($iOS == true) {
		echo '<script type="text/javascript" src="js/swipe.jquery.js"></script>';
		echo '<script type="text/javascript" src="js/iOS.js"></script>';
	} else {
		echo '<script type="text/javascript" src="js/desktop.js"></script>';		
	}
		
	?>			 
  </body>
</html>