<?php
	function displayArticles($lang,$category,$subCategory){
		$return = "";
		$smallItems = 0;
		/******************************\
		DEFINE THE SQL QUERY AND PERFORM IT
		\******************************/
		if($lang == "de"){
			$sql = "SELECT type,content,images,header,subHeader,id FROM article WHERE category='{$category}' AND subCategory='{$subCategory}' ORDER BY type,id DESC";
//			$sqlNumberOfSmallItems = "SELECT type,en_active FROM article WHERE type='smallItem'";// AND en_active=0";			
		} elseif($lang == "en") {
			$sql = "SELECT type,content_EN,images,header_EN,subHeader_EN,id FROM article WHERE category='{$category}' AND subCategory='{$subCategory}' AND en_active=1 ORDER BY type,id DESC";
//			$sqlNumberOfSmallItems = "SELECT type,en_active FROM article WHERE type='smallItem'";// AND en_active=1";
		}
//	    if (! $GLOBALS['DB']->query($sqlNumberOfSmallItems)) {
//	        alertDanger($mysqli->error);
//	    }
		$sqlNumberOfSmallItems = "SELECT type FROM article WHERE type='smallItem'";
		$numberOfSmallItems = $GLOBALS['DB']->query($sqlNumberOfSmallItems);
		//$numberOfSmallItems = $GLOBALS['DB']->query($sqlNumberOfSmallItems);		
		$items = $GLOBALS['DB']->query($sql);
		/******************************\
		WHILE FOR EACH ITEM
		\******************************/
		while ($item = $items->fetch_array()){
			//generate the first horizontal ruler
			//initialize counter for the smallItems, so after every 4th there will be another ruler
			if($lang == "en"){
				$item['content'] = $item['content_EN'];
				$item['header'] = $item['header_EN'];
				$item['subHeader'] = $item['subHeader_EN'];
			}
			if($item['type']=='smallItem'){
				$smallItems++;
				if ($smallItems == 1){
					$return .= "<hr>";
					$return .= "<div class=\"row\">";
				}			//CLOSE ROW AND GENERATE A RULER AFTER EVERY 4TH smallItem

				$return .=  createSmallItem($item);
				if ($smallItems%4 == 0){
					$return .= '</div><hr>';
					if($smallItems == $numberOfSmallItems->num_rows){
						
					} else {
						$return .= '<div class="row">';
					}
				}
			} elseif($item['type']=='bigItem'){
				$return .=  createBigItem($item);
			} elseif($item['type']=='aintroText'){
				$return .= createIntroText($item);
			}



			
		}
		return $return;
	}
	function createIntroText($item){
		/******************************\
		DEFINE THE VARIABLES
		\******************************/
		$header = $item['header'];
		$subHeader = $item['subHeader'];
		$content = $item['content'];
		$random = rand();
		if (empty($content)){
			$abstract = "";
		} else {
			$abstract = '<section class="abstract">
							<div class="toggled" data-id="'.$header.$subheader.$random.'"">
								'.$content.'
							</div>
							<span class="toggler" data-id="'.$header.$subheader.$random.'">+ / -</span>
							</section>';

		}
		/******************************\
		CREATE THE OUTPUT
		\******************************/
		$return = <<<INTROTEXT
<header class="page-header">
<h1>$header &gt; <small>$subHeader</small></h1>
</header>
$abstract
INTROTEXT;
		return $return;
	}
	
	function createSmallItem($item){
		/******************************\
		DEFINE THE VARIABLES
		\******************************/
		$return = "";
		$images = "";		
		$header = $item['header'];
		$subHeader = $item['subHeader'];
		$content = $item['content'];
		$id = $item['id'];
		$imagesArray = $item['images'];
		/******************************\
		CREATE THE IMAGES
		\******************************/
		$imageArray = explode(",",$imagesArray);
		$imageCount = count($imageArray);
		//preFormat($imageArray);
		if ($imageCount == "0"){
			//stays empty
		} elseif($imageCount == "1"){
			$images .= "<img class='img-responsive thumb' src='/images/$imageArray[0]'>";
		} else {
			$images .= "<a href=\"/images/$imageArray[1]\" data-lightbox='item$id' title='$header / $subHeader'>";
			$images .= "<img class='img-responsive thumb' src='/images/$imageArray[0]'>";
			$images .= "</a>";
			unset($imageArray[0]);
			unset($imageArray[1]);
			foreach($imageArray as $image){
				$images .= "<a href='/images/$image' data-lightbox='item$id' title='$header / $subHeader'></a>";		
			}//END OF PRINTING THE GALLERY IMAGES INTO <a>'s
		}//END OF IF	
		
/******************************\
		NEWSBOX MCBW
\******************************/		
		/*if($id == 303){
			$images = "<a id='mcbwLink' target='_blank' href='http://www.mcbw.de/'><img class='img-responsive thumb' src='/images/$imageArray[0]'></a>";	
		}*/		
/******************************\
		NEWSBOX MCBW
\******************************/		
//		if($id == 304){
//			$images = "<a href='http://www.mcbw.de/'><img class='img-responsive thumb' src='/images/$imageArray[0]'></a>";	
//		}
		/******************************\
		CREATE THE CONTENT
		\******************************/
		if(!empty($content)){
			$content = '<section class="details">
				<div class="toggled" data-id="item'.$id.'">
					'.$content.'
				</div>
				<span class="toggler" data-id="item'.$id.'">+ / - <span class="more"></span></span>
		</section>';
		}
		/******************************\
		CREATE THE OUTPUT
		\******************************/
				
$return = 	<<<SMALLITEM
	<div class="col-md-3 smallItem">
			$images
		<h2>$header /</h2>
		<h3>$subHeader</h3>
			$content
	</div>		
SMALLITEM;
return $return;	

	}
	function createBigItem($item){
		/******************************\
		DEFINE THE VARIABLES
		\******************************/
		$return = "";
		$images = "";		
		$header = $item['header'];
		$subHeader = $item['subHeader'];
		$content = $item['content'];
		$id = $item['id'];
		$imagesArray = $item['images'];
		/******************************\
		CREATE THE IMAGES
		\******************************/
		$imageArray = explode(",",$imagesArray);
		$imageCount = count($imageArray);
		//preFormat($imageArray);
		if ($imageCount == "0"){
			//stays empty
		} elseif($imageCount == "1"){
			$images .= "<img class='img-responsive thumb' src='/images/$imageArray[0]'>";
		} else {
			$images .= "<a href=\"/images/$imageArray[1]\" data-lightbox='item$id' title='$header / $subHeader'>";
			$images .= "<img class='img-responsive thumb' src='/images/$imageArray[0]'>";
			$images .= "</a>";
			unset($imageArray[0]);
			unset($imageArray[1]);
			foreach($imageArray as $image){
				$images .= "<a href='/images/$image' data-lightbox='item$id' title='$header / $subHeader'></a>";		
			}//END OF PRINTING THE GALLERY IMAGES INTO <a>'s
		}//END OF IF	
		
		
		/******************************\
		CREATE THE OUTPUT
		\******************************/
$return = 	<<<BIGITEM
<hr>
<div class="row">	
	<div class="item">
		<div class="col-xs-6 medImg">
			$images
		</div>
		<div class="col-xs-6 medTxt">
			<h2>$header / <small>$subHeader</small></h2>
			<section class="details">
				<div class="toggled" data-id="item$id">
					$content
				</div>
				<span class="toggler" data-id="item$id">+ / - <span class="more"></span></span>
			</section>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
		
BIGITEM;

	if($id == 386){
		$return = <<<SLIDER
<div class="row">
	<div class="item">
		<div class="col-md-6 medImg">
			<div class="slider-wrapper theme-default">
				<div id="europaSlider">
					 <img src="/images/we/art/europa/europa_start.jpg" class="img-responsive">
					 <img src="/images/we/art/europa/europa_d.jpg" class="img-responsive">
					 <img src="/images/we/art/europa/europa_e.jpg" class="img-responsive">
					 <img src="/images/we/art/europa/europa_f.jpg" class="img-responsive">
				</div>
			</div>
		</div>
		<div class="col-md-6 medTxt">
			<h2>$header / <small>$subHeader</small></h2>
			 <section class="details">
			<div class="toggled" data-id="item$id">
				$content
			</div>
			 <span class="toggler" data-id="item$id">+ / - <span class="more"></span></span> </section>
		</div>
		<div class="clearfix">
		</div>
	</div>
</div>	

SLIDER;
	
	}
	return $return;	
}
	
	function displayJumbotron($lang,$category){
		$return = "";
		/******************************\
		DEFINE THE SQL QUERY AND PERFORM IT
		\******************************/
		if($lang == "de"){
			$sql = "SELECT images,captions,subCaptions,color,id,category FROM jumbotron WHERE category='{$category}'";
		} elseif($lang == "en") {
			$sql = "SELECT images,captions_EN,subCaptions_EN,color,id,category FROM jumbotron WHERE category='{$category}'";
		}
		$items = $GLOBALS['DB']->query($sql);
		$item = $items->fetch_array();		
		if($lang == "en"){
			$item['captions'] = $item['captions_EN'];
			$item['subCaptions'] = $item['subCaptions_EN'];
		}
		$imageArray = $item['images'];
		$captionArray = $item['captions'];
		$subCaptionArray = $item['subCaptions'];	
		
		$imageArray = explode(",",$imageArray);
		$captionArray = explode(",",$captionArray);
		$subCaptionArray = explode(",",$subCaptionArray);

		$imageNumber = 0;
		$images = "";
		foreach($imageArray as $image){
			$images .= '
				<li>
					<img src="/images/'.$image.'">';
			if (!empty($captionArray[$imageNumber])) {
				$images .= '
					<div class="caption">
						<h2>'.$captionArray[$imageNumber].' / <small>'.$subCaptionArray[$imageNumber].'</small></h2>
					</div>
				';				
			}
			$images .= '</li>';
			$imageNumber++;			
		}//foreach $imageArray	
		
		$return = <<<JUMBOTRON
		
		<section id="jumbotron{$item['category']}" class="jumbotron" style="background-color:{$item['color']}">
			<div class="container">
				<div id="slider{$item['category']}" class="tinySlider">
					<a class="buttons prev" href="#">left</a>
						<div class="viewport">
							<ul class="overview">
								$images
							</ul>
						</div>
					<a class="buttons next" href="#">right</a>
				</div>
			</div>
		</section>
		
JUMBOTRON;
		return $return;
	}//function displayJumbotron
	function displayJobs(){
		$return = "";
		/******************************\
		DEFINE THE SQL QUERY AND PERFORM IT
		\******************************/

		$sql = "SELECT title,id,content FROM jobs WHERE title IS NOT NULL ORDER BY id";
		$jobs = $GLOBALS['DB']->query($sql);

		while($job = $jobs->fetch_array()){
			$return .= '<div class="job">
							<h4>'.$job['title'].'</h4>
							<span class="toggler" data-id="forYouJobs'.$job['id'].'">+ / -</span>
							<div class="toggled" data-id="forYouJobs'.$job['id'].'"><br>';

			$return .= $job['content'];
			$return .= "<br><br>";
			$return .= "</div>";
			$return .= "</div>";			
		}		
		return $return;		
	}
?>