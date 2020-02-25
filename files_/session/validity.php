<?php

//Checking account validity
$row=mysqli_query($con,"SELECT * FROM stores WHERE shop_id = '$_SESSION[dreadlocs]'");
	if($res=mysqli_fetch_array($row))
	{
		$shop_name				=  $res['shop_name'];
		$shop_url				=  $res['shop_url'];
		$shop_category			=  $res['shop_category'];
		$shop_details			 =  $res['shop_details'];
		$shop_phone			   =  $res['shop_phone'];
		$shop_location			=  $res['shop_location'];
		$shop_logo				=  $res['shop_logo'];
		$buy_word				 =  $res['buy_link'];
		$buy_word_link			=  $res['buy_link_word'];
		$validity				 =  $res['validity'];
		$_SESSION['searches']	 =  $res['searches'];
		$_SESSION['intotal']	 +=  $_SESSION['searches'];
	}

?>