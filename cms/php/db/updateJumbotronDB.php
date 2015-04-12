<?php include_once("../../etc/constants.php"); ?>
<?php include_once("../../php/inc.db.php"); ?>
<?php include_once("../../php/helpers.php"); ?>

<?php

$type 			= $_POST['type'];
$category 		= $_POST['category'];
$color 			= $_POST['color'];
$id				= $_POST['id'];
$imageOrder		= $_POST['images'];
$captionArray 	= $_POST['caption'];
$caption_ENArray 	= $_POST['caption_EN'];
$subCaption_ENArray 	= $_POST['subCaption_EN'];
$subCaptionArray 	= $_POST['subCaption'];
//preFormat($_POST);
//preFormat($_SERVER);
/*foreach($_FILES as $image){
	echo "<pre>";
	echo "FOREACH OF FILES: <br>";
	print_r($image);
	echo "</pre>";
}*/


$images = "";
$captions = "";
$captions_EN = "";
$subCaptions = "";
$subCaptions_EN = "";

if($_FILES['images']['error'][0] == 4){
	alertInfo("keine Datei gewählt");

} else {
	$uploadedFile = 0;
	$numberOfFile = 0;
	foreach($imageOrder as $file){
		if($file == "newUpload"){
			$tmp 		= $_FILES['images']['tmp_name'][$uploadedFile];
			$imageType 	= $_FILES['images']['type'][$uploadedFile];
			$size		= $_FILES['images']['size'][$uploadedFile];
			$name		= $_FILES['images']['name'][$uploadedFile];
			switch ($imageType) {
			    case "image/png":
			        $imageType = ".png";
			        break;
			    case "image/jpeg":
			        $imageType = ".jpg";
			        break;
			}
			$filename = explode(".",$name);
			$filename = $filename[0];
			//CLEAN FILENAME FROM VOWEL MUTUATIONS OR UNDERSCORES ETC !!
			$filename = post_slug($subCategory)."_".post_slug($header)."_".post_slug($subHeader)."_".post_slug($filename);
			//CLEANED BY A FUNCTION IN HELPERS
			
			alertInfo($filename);
			
			$path = "/home2/admn1772/public_html/heckhaus/images/".$filename.$imageType;
			
			
			
			if(move_uploaded_file($tmp, $path)){
				$thumb = "<img style='width:100px;' src='images/$filename$imageType'>";
				alertSuccess("Uploaded The Image Successfully".$thumb);
			} else {
				alertDanger("failed to Upload Image");
			}
			$file = $filename.$imageType;
			$uploadedFile++;
			
			alertDanger("you are in uploaded File");
		} else {
			$file = $file;
		}//end of IF "newUpload"
		
		$fileCaption = $captionArray[$numberOfFile];
		$fileSubCaption = $subCaptionArray[$numberOfFile];
		$fileCaption_EN	= $caption_ENArray[$numberOfFile];
		$fileSubCaption_EN	= $subCaption_ENArray[$numberOfFile];
		
		//alertInfo($numberOfFile);
		//alertInfo($fileCaption);
		//alertInfo($fileSubCaption);		
		//alertInfo($fileCaption_EN);				
		//alertInfo($fileSubCaption_EN);
		
		$images .= $file.",";
		$captions .= $fileCaption.",";
		$captions_EN .= $fileCaption_EN.",";
		$subCaptions .= $fileSubCaption.",";
		$subCaptions_EN .= $fileSubCaption_EN.",";
		
		$numberOfFile++;		
	}
	$images = rtrim($images,",");
	$captions = rtrim($captions,",");
	$captions_EN = rtrim($captions_EN,",");	
	$subCaptions = rtrim($subCaptions,",");
	$subCaptions_EN = rtrim($subCaptions_EN,",");	
}

//preFormat($captions);

$sql = "UPDATE jumbotron SET category=?, images=?, captions=?, captions_EN=?,subCaptions=?, subCaptions_EN=?, color=? WHERE id = $id";

if ($stmt = $DB->prepare($sql)) {
	//echo "prepare completed"; //No output cause there should be no Problem
} else {
	alertDanger($DB->error);
	//var_dump($stmt);
}
$stmt->bind_param("sssssss",$category,$images,$captions,$captions_EN,$subCaptions,$subCaptions_EN,$color);
if ($stmt->execute()) {
	alertSuccess("Wrote Successful to Database");
} else {
	alertDanger($stmt->error);
}

?>
