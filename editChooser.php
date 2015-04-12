<section id="editChooserSection">
<div class="page-header">
	<h1>Choose what you want to edit</h1>
</div>
<div id="message"></div>
<?php include_once("etc/constants.php"); ?>
<?php include_once("php/helpers.php"); ?>
<?php include_once("php/inc.db.php"); ?>
<?php 

function displayLandingPages(){
		$return = "";
		/******************************\
		DEFINE THE SQL QUERY AND PERFORM IT
		\******************************/
		$sql = "SELECT language,id,name,content FROM landingpages WHERE name IS NOT NULL ORDER BY id";
		$landingPages = $GLOBALS['DB']->query($sql);

		$return .= '<div class="col-xs-12">';
		$return .= '<h1 class="category">Landing Pages<span class="toggler pull-right" data-id="landingPages"><i class="fa fa-chevron-down"></i></span></h1>';
		$return .= '<section class="details">
		<div class="toggled" data-id="landingPages">';


		while($landingPage = $landingPages->fetch_array()){
			$return .= '
			<div class="col-xs-3 job smallItem well" data-thisItemID="'.$landingPage['id'].'">

							<div class="imageControlButtons">
								<span class="btn btn-default fa fa-wrench editALandingPageButton" data-id="'.$landingPage['id'].'"></span>
							</div>
			
							<h2>'.$landingPage['name'].'</h2>';
			$return .= "</div>";
		}
		$return .='</div></div>';
		return $return;		
}

function displayJobs(){
		$return = "";
		/******************************\
		DEFINE THE SQL QUERY AND PERFORM IT
		\******************************/

		$sql = "SELECT title,id,content FROM jobs WHERE title IS NOT NULL ORDER BY id";
		$jobs = $GLOBALS['DB']->query($sql);

		$return .= '<div class="col-xs-12 article">';
		$return .= '<h2 class="subCategory">Jobs<span class="toggler pull-right" data-id="forYouJobs"><i class="fa fa-chevron-down"></i></span></h2>';
		$return .= '<section class="details">
		<div class="toggled" data-id="forYouJobs">';



		$previousJobID = "";
		while($job = $jobs->fetch_array()){
			$return .= '
			<div class="col-xs-3 job smallItem well" data-thisItemID="'.$job['id'].'" data-previousItemID="'.$previousJobID.'">

							<div class="imageControlButtons">
								<span class="btn btn-default fa fa-wrench editAnJobButton" data-id="'.$job['id'].'"></span>
								<span class="btn btn-default fa fa-trash-o deleteAnJobButton" data-id="'.$job['id'].'" data-table="jobs"></span>
								<span class="btn btn-default fa fa-chevron-up switchJobOrderUp"></span>							
							</div>
			
							<h2>'.$job['title'].'</h2>';
			$return .= "</div>";
			$previousJobID = $job['id'];
		}
		$return .='</div></div>';
		return $return;		
}


/************************************************\

    CATEGORY

\************************************************/
$categoriesArray[0] = "we";
$categoriesArray[1] = "work";
$categoriesArray[2] = "forYou";

/************************************************\

    Articles for each SubCategory

\************************************************/

foreach($categoriesArray as $category){
	echo '<div class="col-xs-12">';
	echo '<h1 class="category">'.$category.'<span class="toggler pull-right" data-id="'.$category.'"><i class="fa fa-chevron-down"></i></span></h1>';
	echo '<div class="toggled" style="margin-top:0 !important;display:none;" data-id="'.$category.'">';

	/************************************************\

		SUBCATEGORIES

	\************************************************/	
	$sql = "SELECT subCategory FROM article WHERE category='$category' GROUP BY subCategory";
	$subCategories = $DB->query($sql);
	$previousItemID = "";
	while ($subCategory = $subCategories->fetch_array()){
		echo '<div class="col-xs-12 article">';
		echo '<h2 class="subCategory">'.$subCategory['subCategory'].'<span class="toggler pull-right" data-id="'.$subCategory['subCategory'].'"><i class="fa fa-chevron-down"></i></span></h2>';
		echo '<section class="details">
		<div class="toggled" data-id="'.$subCategory['subCategory'].'">';


					/************************************************\
			
						Articles for each SubCategory
			
					\************************************************/		
					$sql = "SELECT header,subHeader,id,images,type FROM article WHERE category='$category' and subCategory='{$subCategory['subCategory']}' ORDER BY id DESC";
					$articles = $DB->query($sql);
					while($article = $articles->fetch_array()){
						//preFormat($article);
						$imagesArray = $article['images'];
						/******************************\
						CREATE THE IMAGES
						\******************************/
						$imageArray = explode(",",$imagesArray);
						if($article['type']=="aintroText"){
							$imageArray[0] = "introText.png";
						}
						//preFormat($imageArray);
						echo '<div class="col-xs-3 smallItem well" style="height:250px;overflow:hidden;" data-thisItemID="'.$article['id'].'" data-previousItemID="'.		$previousItemID.'">';
						echo '	<div class="imageControlButtons">
									<span class="btn btn-default fa fa-wrench editAnExistingPostButton" data-id="'.$article['id'].'"></span>
									<span class="btn btn-default fa fa-trash-o deleteAnExistingPostButton" data-id="'.$article['id'].'" data-table="article"></span>
									<span class="btn btn-default fa fa-chevron-up switchItemOrderUp"></span>							
								</div>';
						echo "<img class='img-responsive thumb' src='/images/";
						echo $imageArray[0];
						echo "'>";			
						echo '<h2>';
						echo $article['header'];
						echo '</h2>';
						echo '<h3>';
						echo $article['subHeader'];
						echo '</h3>';		
						echo '</div>';//end of smallItem
						$previousItemID = $article['id'];
					}//END OF WHILE FOR ARTICLES
					/************************************************\
			
						END OF ALL ARTICLES
			
					\************************************************/	
		
		
		//HERE COME THE LAST THREE LINE OF SINGLE SUBCATEGORY END
		echo '<div class="clearfix"></div>';
		echo '</div></section>';
		echo '</div>';
		echo '<div class="clearfix"></div>';
	} //END OF WHILE OF THE SUBCATEGORIES
	/************************************************\

		END OF ALL SUBCATEGORIES

	\************************************************/	

	if($category == "forYou"){
		echo displayJobs();
	}
	

	echo '</div>';
	echo '</div>';	
	
} //END OF WHILE OF THE CATEGORIES
	echo displayLandingPages();
?>

</section>