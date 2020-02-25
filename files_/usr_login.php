<?php
session_start();

//Connection
include "connection/usr_con.php";

//Login credentials
$_SESSION['email']=$_POST['email'];
$_SESSION['pass']=md5($_POST['password']);

//Verifying email
if(filter_var($_SESSION['email'],FILTER_VALIDATE_EMAIL)==false)
{
$_SESSION['nack']="Email not entered!";
$_SESSION['pass']=NULL;
$_SESSION['email']=NULL;
$_SESSION['vlv']=NULL;
	
	header("Location: ../account");
}

//Verifying login credentials
else
{
$usr_tbl= md5("$0=k]|43ng.m,");
$result=mysqli_query($con,"SELECT email,password FROM $usr_tbl WHERE email = '$_SESSION[email]' AND password='$_SESSION[pass]'");
$a = mysqli_num_rows($result);

	if($a==1)
	{
		header("Location: ../account/dashboard");

	}
	
	else
	{
		$_SESSION['nack']="Wrong account credentials";
        $_SESSION['pass']=NULL;
		$_SESSION['email']=NULL;
        $_SESSION['vlv']=NULL;
		header("Location: ../account");

	}

}

?>