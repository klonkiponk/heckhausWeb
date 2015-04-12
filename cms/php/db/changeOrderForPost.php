<?php include_once("../../etc/constants.php"); ?>
<?php include_once("../../php/inc.db.php"); ?>
<?php include_once("../../php/helpers.php"); ?>
<?php
$thisItemID 	= $_POST['thisItemID'];
$previousItemID = $_POST['previousItemID'];

$sql1 = "UPDATE article SET id='999999' WHERE id = $thisItemID";
$sql2 = "UPDATE article SET id='$thisItemID' WHERE id = $previousItemID";
$sql3 = "UPDATE article SET id='$previousItemID' WHERE id = '999999'";

$GLOBALS['DB']->query($sql1);
$GLOBALS['DB']->query($sql2);
$GLOBALS['DB']->query($sql3);

echo "DONE";
?>