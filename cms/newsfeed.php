<section id="newsfeed">
<div class="page-header">
	<h1>Newsfeed</h1>
</div>
<div id="newsfeedMessage">

</div>



<?php include_once("etc/constants.php"); ?>
<?php include_once("php/helpers.php"); ?>
<?php include_once("php/inc.db.php"); ?>
<?php
	//alertDanger(SERVER);
?>
<?php 
	$sql = "SELECT * FROM article ORDER BY type";
	$sqlNumberOfSmallItems = "SELECT * FROM article WHERE type='smallItem'";	
	$articles = $DB->query($sql);
	$numberOfSmallItems = $DB->query($sqlNumberOfSmallItems);
	$numberOfSmallItems->num_rows;
	$bigItems = 0;
	$smallItems = 0;
	while ($article = $articles->fetch_array()){
		//preFormat($article);
		$id = $article['id'];
		$header= $article['header'];
		$header_EN= $article['header_EN'];
		$subHeader= $article['subHeader'];
		$subHeader_EN= $article['subHeader_EN'];
		$category= $article['category'];
		$subCategory= $article['subCategory'];
		$type = $article['type'];
		$imageArray = $article['images'];
		$content = $article['content'];
		$content_EN = $article['content_EN'];		
		$imagefolder = $article['imagefolder'];
		$en_active = $article['en_active'];		
		$identifier = $imagefolder;
		$identifier = str_replace(' ', '', $identifier);
		$output = "";

		$server = SERVER;

$imageArray = explode(",",$imageArray);
$imageCount = count($imageArray);
//preFormat($imageArray);
if ($imageArray[0] == ""){
	$images = "<img class='img-responsive' src='$server/img/logo.png'>";
} elseif($imageCount == "1"){
	$images = "<img class='img-responsive' src='$server/images/".$imageArray[0]."'>";
} else {
	$images = "<a href=\"$server/images/"."$imageArray[1]\" data-lightbox=\"$id\" title=\"$header / $subHeader\">";
	$images .= "<img class='img-responsive' src='$server/images/".$imageArray[0]."'>";
	$images .= "</a>";
    unset($imageArray[0]);
    unset($imageArray[1]);
	foreach($imageArray as $image){
		$images .= "<a href=\"$server/images/$image\" data-lightbox=\"$id\" title=\"$header / $subHeader\"></a>";		
	}
}



if ($type=="smallItem"){
$smallItems++;
if ($smallItems === 1){
	$output .= "<hr>";
	$output .= "<div class=\"row\">";
}
//preFormat($smallItems);
$output .= <<<ARTICLE
	<div class="col-xs-3 $type">
		<div class="imageControlButtons">
			<span class="btn btn-default fa fa-wrench editAnExistingPostButton" data-id="$id"></span>
			<span class="btn btn-default fa fa-trash-o deleteAnExistingPostButton" data-id="$id"></span>			
		</div>
		$images
		<h2>$header /</h2>
		<h3>$subHeader</h3>
		<section class="details">
			<div class="toggled" data-id="$id">
				$content
			</div>
			<!--<span class="toggler" data-id="$id">+ / - <span class="more"></span></span>--><br>
		</section>

ARTICLE;

if ($en_active == 1) {
$output .= <<<ARTICLE_EN
		<h2>$header_EN /</h2>
		<h3>$subHeader_EN</h3>
		<section class="details">
			<div class="toggled" data-id="$id">
				$content_EN			
			</div>
			<!--<span class="toggler" data-id="$id">+ / - <span class="more"></span></span>--><br>
		</section>		
ARTICLE_EN;
}
$output .= '</div>';

if ($smallItems%4 === 0){
	$output .= '</div><hr><div class="row">';
}
if($smallItems == $numberOfSmallItems->num_rows){
	$output .= "</div>";
}
	
} elseif ($type=="bigItem") {
$bigItems++;
$output .= <<<ARTICLE
<hr>
<div class="row">
	<div class="item $type">
		<div class="col-xs-6 medImg">
			$images
		</div>
		<div class="col-xs-6 medTxt">
			<div class='imageControlButtons'>
				<span class="btn btn-default fa fa-wrench editAnExistingPostButton" data-id="$id"></span>
				<span class="btn btn-default fa fa-trash-o deleteAnExistingPostButton" data-id="$id"></span>
			</div>
			<h2>$header / <small>$subHeader</small></h2>
			<section class="details">
			<div class="toggled" data-id="$id">
				$content				
			</div>
			 <!--<span class="toggler" data-id="$id">+ / - <span class="more"></span></span>--></section>
ARTICLE;
if($en_active == 1){
$output .= <<<ARTICLE_EN
		<h2>$header_EN / <small>$subHeader_EN</small></h2>
		<section class="details">
			<div class="toggled" data-id="$id">
				$content_EN			
			</div>
			<!--<span class="toggler" data-id="$id">+ / - <span class="more"></span></span>--><br>
		</section>		
ARTICLE_EN;
}
$output.= '	</div>
		<div class="clearfix"></div>
	</div>
</div>';
}
	echo $output;
	}
?>
</section>