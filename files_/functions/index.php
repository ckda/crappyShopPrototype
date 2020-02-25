<?php
//Function

//1. Short details
function short_details($format)
{
		if(strlen($format)>70)
	{
		return substr($format,0,70)."...";
	}
	
		else
	{
		return $format;
	}
}


//2. Short details
function variable_empty($variable)
{
		if(strlen($variable)<1)
	{
		return FALSE;
	}
	
		else
	{
		return TRUE;
	}
}


//3. Upload function
function client_img($image_form, $image_temp, $image_size, $target_dir)
{
$target_file = $target_dir . basename($image_form);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST['submit'])) {
    $check = getimagesize($image_temp);
    if($check !== false) {
		
        $uploadOk = 1;
    } else {
        echo 'File is not an image.<br>';
        $uploadOk = 0;
    }
}	
	
	

// Check file size
if ($image_size > 6096000) {
    echo 'Sorry, your file is too large.<br>';
    $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType !== 'png' && $imageFileType !== 'PNG' && $imageFileType !== 'jpg' && $imageFileType !== 'jpeg' && $imageFileType !== 'JPG' && $imageFileType !== 'JPEG') {
    echo 'Sorry you have an Internet browser problem or wrong picture format<br>Only JPG, JPEG files are allowed.<br>';
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo 'Sorry, your file was not uploaded.<br>';
// if everything is ok, try to upload file
} else {
	move_uploaded_file($image_temp, $target_file);
	$raw_name = time() . basename($image_form);
	$the_file_name = $target_dir . $raw_name;
	$target_file = rename($target_file,$the_file_name);


}

return $raw_name;

}

?>