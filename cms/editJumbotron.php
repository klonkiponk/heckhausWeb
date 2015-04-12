<?php include_once("etc/constants.php"); ?>
<?php include_once("php/helpers.php"); ?>
<?php include_once("php/inc.db.php"); ?>
<?php

$id = $_GET['id'];
//preFormat($id);

if(!empty($id)){
	$sql = "SELECT * FROM jumbotron WHERE id = '$id'";
	$jumbotron = $DB->query($sql);
	$jumbotron = $jumbotron->fetch_array();
	$captionArray = $jumbotron['captions'];
	$captionArray_EN = $jumbotron['captions_EN'];	
	$subCaptionArray = $jumbotron['subCaptions'];
	$subCaptionArray_EN = $jumbotron['subCaptions_EN'];	
	$category= $jumbotron['category'];
	$imageArray = $jumbotron['images'];
	$color = $jumbotron['color'];		
	$images = "";
	//preFormat($jumbotron);




	/************************\
		EXPLODE imageArray and display the Images
	\************************/

	$imageArray = explode(",",$imageArray);
		//preFormat($imageArray);
	$captionArray = explode(",",$captionArray);
		//preFormat($captionArray);
	$captionArray_EN = explode(",",$captionArray_EN);
		//preFormat($captionArray_EN);
	$subCaptionArray = explode(",",$subCaptionArray);
		//preFormat($captionArray);
	$subCaptionArray_EN = explode(",",$subCaptionArray_EN);
		//preFormat($captionArray_EN);		
	if($imageArray[0] === ""){
			
	} else {
		$imageNumber = 0;
		foreach($imageArray as $image){
			$images .= "
			<div class='image well'>
				<input type='hidden' name='imageOrder[]' value='$image'>
				<input type='hidden' value='$image' name='images[]'>
				<div class='imageAlignment'>
					<img class='jumbotronThumb' src=\"/images/$image\">
					
					
					<div class='input-group'>
						<span class='input-group-addon'><img src='img/de.png' class='languageFlag'></span>
						<input type='text' class='form-control' value='$captionArray[$imageNumber]' name='caption[]'>
						<input type='text' class='form-control' value='$subCaptionArray[$imageNumber]' name='subCaption[]'>						
					</div>

					<div class='input-group'>
						<span class='input-group-addon'><img src='img/en.png' class='languageFlag'></span>
						<input type='text' class='form-control' value='$captionArray_EN[$imageNumber]' name='caption_EN[]'>
						<input type='text' class='form-control' value='$subCaptionArray_EN[$imageNumber]' name='subCaption_EN[]'>						
					</div>

				
				</div>
				".'
				<div class="imageControlButtons">
					<span class="btn btn-default fa fa-trash-o removeImage"></span>
					<span class="btn btn-default fa fa-chevron-up switchOrderUp"></span>
					<span class="btn btn-default fa fa-chevron-down switchOrderDown"></span>				
				</div>
			</div>
			';
			$imageNumber++;
		}//end of foreach $imageArray
	}//end of $imageArray


	
} else {
	//echo "NEW";
}







$categories = '<label for="category">Category</label><select type="text" class="form-control" name="category" id="category">';			
$categoryList = array(
	"we" => "We",
	"work" => "Work",
);
foreach ($categoryList as $key=>$value){
	if ($category == $key){
		$selected = "selected";
	} else {
		$selected = "";
	}
	$categories .= "<option value='$key' $selected>$value</option>";
}
$categories .= '</select>';
$output = <<<FORM
<div class="page-header">
		<span class="btn btn-default btn-language pull-right addEnglishLanguage"><i class="fa fa-plus"></i><img src="/img/en.png" class="languageFlag"></span>
	<h1>Edit the Jumbotron</h1>
</div>


<div id="message">
</div>


<form method="post" id="editJumbotron">
	<input type="hidden" name="id" value="$id">
	<input type="hidden" name="category" value="$category">	
	<div class="row">
		<div class="col-xs-3">
			<input type="text" name="color" class="form-control" id="colorForm" maxlength="7" value="$color">
		</div>
		<div class="col-xs-3">
			<span class="form-control" id="colorPreview" style="background:$color"></span>
		</div>		
	</div>

	<div class="row">
		<div class="col-xs-12">	
			<div class="imageContainer">
				$images
			</div>
			<label class="noMarginTop" for="images"><span class="btn btn-default fa fa-plus addImageFormFieldForJumbotron"></span></label>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
				<span class="btn btn-danger" id="saveJumbotron">SAVE</span>
		</div>
	</div>
<div class="clearfix"></div>
<!-- WITHOUT THE NEXT LINE, NO SUBMIT IS AVAILABLE -->
<input type="file" style="display:none;">
</form>

FORM;

$output .= <<<FORM2
<div class="clearfix"></div>
<form class="singleImageUploadFormForJumbotron" id="singleImageUploadFormForJumbotron$id">
		<input type="hidden" name="id" value="$id">						
		<input type="file" class="form-control" name="images[]" id="images">
</form>
FORM2;

echo $output;
?>