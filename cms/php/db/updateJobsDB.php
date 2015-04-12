<?php include_once("../../etc/constants.php"); ?>
<?php include_once("../../php/inc.db.php"); ?>
<?php include_once("../../php/helpers.php"); ?>

<?php

$content 		= $_POST['content'];
$id				= $_POST['id'];
$title			= $_POST['title'];

$sql = "UPDATE jobs SET content=?, title=? WHERE id = $id";

if ($stmt = $DB->prepare($sql)) {
	//echo "prepare completed"; //No output cause there should be no Problem
} else {
	alertDanger($DB->error);
	//var_dump($stmt);
}
$stmt->bind_param("ss",$content,$title);
if ($stmt->execute()) {
	alertSuccess("Wrote Successful to Database");
} else {
	alertDanger($stmt->error);
}

?>
