<?php include_once("../../etc/constants.php"); ?>
<?php include_once("../../php/inc.db.php"); ?>
<?php include_once("../../php/helpers.php"); ?>

<?php

$content 		= $_POST['content'];
$id				= $_POST['id'];
$name			= $_POST['name'];

$sql = "UPDATE landingpages SET content=?, name=? WHERE id = $id";

if ($stmt = $DB->prepare($sql)) {
	//echo "prepare completed"; //No output cause there should be no Problem
} else {
	alertDanger($DB->error);
	//var_dump($stmt);
}
$stmt->bind_param("ss",$content,$name);
if ($stmt->execute()) {
	alertSuccess("Wrote Successful to Database");
} else {
	alertDanger($stmt->error);
}

?>
