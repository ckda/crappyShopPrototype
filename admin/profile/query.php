<?php
session_start();

//User session
include "../../../files_/session/usr.php";

//Functions
include "../../../files_/functions/index.php";


//Detials
if(isset($_POST['details']))
	{
		if(mysqli_query($con,"UPDATE stores SET shop_name = '$_POST[shop_name]', shop_category = '$_POST[shop_category]', shop_location = '$_POST[shop_location]', shop_phone = '$_POST[shop_phone]', shop_details = '$_POST[shop_details]', buy_link = '$_POST[buy_word]', buy_link_word = '$_POST[buy_word_link]' WHERE shop_id='$_SESSION[dreadlocs]'"))
	{
		$_SESSION['nack']="Details updated";
		header("Location: ../profile?m=4");
	}

		else
	{
		$_SESSION['nack']="Unable to update shop details";
		header("Location:  ../profile?m=4");
	}
}


//Imgaes
elseif(isset($_POST['images']))
{
	$shop_logo = client_img($_FILES['shop_logo']['name'],$_FILES['shop_logo']['tmp_name'],$_FILES['shop_logo']['size'],"../../../_files/images/".$_POST['images']."/");
	
		$r= mysqli_query($con,"SELECT shop_logo FROM stores WHERE shop_id='$_SESSION[dreadlocs]'");
		while($r = mysqli_fetch_array($r))
	{
		unlink($r['shop_logo']);
		
	}
	
		if(mysqli_query($con,"UPDATE stores SET shop_logo = '$shop_logo' WHERE shop_id='$_SESSION[dreadlocs]'"))
	{
		$_SESSION['nack']="Shop logo updated";
		header("Location: ../profile?m=1");
	}

		else
	{
		$_SESSION['nack']="Unable to update shop logo";
		header("Location:  ../profile?m=1");
	}
}

//Security
elseif(isset($_POST['security']))
{

	if(md5($_POST['password'])==$_SESSION['pass'])
{
	
		if(strlen($_POST['new_password'])>5 && $_POST['new_password']==$_POST['comfirm_password'])
	{
		//Account connection
		$password	= md5($_POST['new_password']);
		$usr_tbl	 = md5("$0=k]|43ng.m,");
		

			if(mysqli_query($con,"UPDATE $usr_tbl SET password = '$password' WHERE shop_id='$_SESSION[dreadlocs]'"))
		{
			$_SESSION['pass'] = $password;
			$_SESSION['nack'] = "Password changed";
			header("Location: ../profile?m=2");
		}

			else
		{
			$_SESSION['nack']="Unable to change password";
			header("Location:  ../profile?m=2");
		}

	}

		else
	{
		$_SESSION['nack']="Unable to change password";
		header("Location:  ../profile?m=2");
	}
	
}


	else
{
	$_SESSION['nack']="Password error";
	header("Location:  ../profile?m=2");
}

}
?>