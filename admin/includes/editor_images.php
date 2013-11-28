<?php

include_once("config.php");
include_once("login.php");
 
// Target dimensions
$max_width = 1200;
$max_height = 1200;

// files storage folder
$dir1 = '../data/img/uploads/';

// files site path
$dir2 = "/$pulse_dir/data/img/uploads/";
 
$_FILES['file']['type'] = strtolower($_FILES['file']['type']);

if ( ($_FILES['file']['type'] == 'image/png' 
|| $_FILES['file']['type'] == 'image/jpg' 
|| $_FILES['file']['type'] == 'image/gif' 
|| $_FILES['file']['type'] == 'image/jpeg'
|| $_FILES['file']['type'] == 'image/pjpeg')  )
{
	
			$fileName = $_FILES['file']['name'];
			if (file_exists($dir1.$fileName)) { 
				    $fileName = rand().$fileName;
			}
                			
  	copy($_FILES['file']['tmp_name'], $dir1.$fileName);
    	
  		if ( ($_FILES['file']['type'] == 'image/jpg' 
  		|| $_FILES['file']['type'] == 'image/jpeg'
  		|| $_FILES['file']['type'] == 'image/pjpeg')  ){
	
	  		$image = $dir1.$fileName;	  			
	  		$size = getimagesize($image);
		
	  		if($size[0] > $max_width || $size[0] > $max_height){
		
			// Get current dimensions
			$old_width  = $size[0];
			$old_height = $size[1];

			// Calculate the scaling we need to do to fit the image inside our frame
			$scale = min($max_width/$old_width, $max_height/$old_height);

			// Get the new dimensions
			$new_width  = ceil($scale*$old_width);
			$new_height = ceil($scale*$old_height);			
	
			// Load
			$thumb = imagecreatetruecolor($new_width, $new_height);
			$source = imagecreatefromjpeg($image);

			// Resize
			imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

			// Output
			imagejpeg($thumb, $dir1.$fileName,95);
						
			$array = array('filelink' => $dir2.$fileName);
			
			}
			else{ $array = array('filelink' => $dir2.$fileName);}
  	
		}  	
	  	else{ $array = array('filelink' => $dir2.$fileName);}

    echo stripslashes(json_encode($array));   
}

?>