<?php
/************************************************\

	INCLUDE NECCESSARY FILES
	
\************************************************/

include_once("etc/constants.php");
include_once("php/helpers.php");
include_once("php/inc.db.php");

/************************************************\

	DECIDE WHICH ARTICLE TO EDIT
	
\************************************************/

if(isset($_GET['id'])){
	$id = $_GET['id'];
}
if(!isset($id)){ //IF NO ID TO EDIT IS GIVEN GENERATE A NEW ENTRY INTO DATABASE UND THEN EDIT THIS ENTRY
	$sql = "INSERT INTO jobs (content) VALUES ('')";
	$test = $DB->query($sql);
	$sql = "SELECT id FROM jobs ORDER BY id DESC LIMIT 1";
	$test2 = $DB->query($sql);
	$test3 = $test2->fetch_array();
	$id = $test3['id'];
} //DO THIS, so SQL IS MAKING AN UPDATE QUERY AND IS DECIDING BY ITSELF WHICH ID TO GET


/************************************************\

	GET EXISTING CONTENT FROM DATABASE
	
\************************************************/

$sql = "SELECT language,id,name,content FROM landingpages WHERE id = '$id'";
$landingPages = $DB->query($sql);
$landingPage = $landingPages->fetch_array();

$title= $landingPage['name'];
$content = $landingPage['content'];

$output = <<<FORM

<div class="page-header">
	<h1>Landing Page</h1>
</div>

<div id="message"></div>

<form method="post" id="editLandingPage">
	<input type="hidden" name="id" value="$id">
	<div class="row">
		<div class="col-xs-12">
			<div class="input-group"><span class="input-group-addon"><img src="img/de.png" class="languageFlag"></span><input type="text" class="form-control" name="name" placeholder="Titel" value="$title" disabled></div>
		</div>
		<div class="col-xs-12">
			<div class="contentInputFormFields">
				<label for="content">Content</label>
				<textarea type="text" rows="30" class="form-control languageTextareaDE" name="content" id="content_DE">$content</textarea>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
				<span class="btn btn-danger" id="saveLandingPageToDB"><i class="fa fa-save fa-lg"></i> SAVE</span>
		</div>
	</div>

	<div class="clearfix"></div>
	<!-- WITHOUT THE NEXT LINE, NO SUBMIT IS AVAILABLE -->
	<input type="file" style="display:none;">
</form>

FORM;

echo $output;
?>