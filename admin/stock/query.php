<?php
session_start();

//User session
include "../../files_/session/usr.php";

//Functions
include "../../files_/functions/index.php";


$stock_img1 = str_replace("../../_files/images/", "", client_img($_FILES["img_1"]["name"], $_FILES["img_1"]["tmp_name"], $_FILES["img_1"]['size'],"../../_files/images/"));
$key		= md5(time());

//Query
$sup= "INSERT INTO products (name, price, details, image) VALUES ('$_POST[stock]', '$_POST[price]', '$_POST[details]','$stock_img1')";

if (mysqli_query($con,$sup))
{
	
echo "Stock was successfully added";
	
}

else
{
	
echo "Error! Kindly try again ".mysqli_error($con);
	
}

?>