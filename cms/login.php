<?php
	session_start();
	
    $username = $_POST['username'];
    $passwort = $_POST['password'];

    // Benutzername und Passwort werden überprüft
    if ($username == 'administrator' && $passwort == 'jdk215kdj') {
    	$_SESSION['login'] = "user";
    }

	if($_SESSION['login'] === "user"){
		header('Location:index.php');
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
	<body id="login">
		<!-- !Modal -->
		<form action="login.php" method="post">
			<div class="modal" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" id="myModalLabel">Login</h4>
			      </div>
			      <div class="modal-body">
						<div class="input-group">
						  <span class="input-group-addon" style="width:100px;">Username</span>
						  <input type="text" class="form-control" placeholder="Username" name="username">
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon" style="width:100px;">Passwort</span>
						  <input type="password" class="form-control" placeholder="Username" name="password">
						</div>	
			      </div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-danger" id="deleteButton">Login</button>	        
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</form>	

		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.form.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>	  
		<script type="text/javascript" src="js/hecklive.js"></script>		
	</body>
</html>