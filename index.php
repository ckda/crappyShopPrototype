<?php
session_start();

//User session
include "files_/session/usr.php";

//Functions
include "files_/functions/index.php";


?><!DOCTYPE html>
<html lang="en">
<head>
<title>THE CLOTHESMAKER</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

.media{
	padding:10px;
}
.col-sm-6, .panel-footer
{
	margin-top:25px;
}

.bottom_col_1{
	text-align:left;
}

.bottom_col_2{
	text-align:right;
}

.carousel
{
	margin-top:50px;
}

.navbar-default .navbar-toggle .icon-bar{
	background-color:#FFD595;
}

.navbar{
	background-color:#FFFFF;
}

.hom_car{
    height: 500px;
}

@media only screen and (max-width: 760px), screen and (max-device-width: 480px)  {

.hom_car{
	height:100%;
}

.bottom_col_1, .bottom_col_2{
	text-align:center;
}

}
</style>
<body>

<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #fff;">
  <div class="container-fluid">
    <div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border:none; background-color: transparent;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><img src="icons/logo.png" class="img-responsive" style="display:inline-block; height:30px; margin-top:-5px;"></a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav">
</ul>
  
  <ul class="nav navbar-nav navbar-right">
  <li><a href="account" style="color:#FFD595"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="#" style="color:#FFD595"><span class="glyphicon glyphicon-shopping-cart"></span> Shop</a></li>
  </ul>
  </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active hom_car">
      <img src="images/1.jpg">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item hom_car">
      <img src="images/2.jpg">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item hom_car">
      <img src="images/3.jpg">
      <div class="carousel-caption">
      </div>
    </div>

  </div>

</div>

<div class="container">
<h3 class="text-center">THE CLOTHESMAKER</h3>
</div>

<div class="container-fluid" style="margin-top:20px;">
<hr>
<div class="col-sm-6">
<div class="media">
  <div class="media-left">
  </div>
  <div class="media-body">
    <h4 class="media-heading">The Founder</h4>
    <p>Edem A. has been bringing exceptional style to shoppers far and wide since our founding, and we don’t intend on stopping anytime soon. Our vision is fast-paced, forward-thinking and fashion-centered at its core, and all of our products reflect these ideals. We invite you to browse through our site to find just what you have been looking for.</a><div id="social" class="collapse">it simultaneously makes you easier and more accessible for new customers, and makes you more familiar and recognizable for existing customers. For example, a frequent Twitter user could hear about your company for the first time only after stumbling upon it in a newsfeed.</div></p>
  </div>
</div>
</div>


<div class="col-sm-6">
<img src="images/ed.png" class="img img-responsive">
</div>


<div class="col-sm-4">

</div>

</div>

<hr>

<div class="container-fluid" name="shop">

<div style="margin-top:15px;">
<div class="row">
<?php
$result=mysqli_query($con,"SELECT * FROM products ORDER BY id DESC");

while($row=mysqli_fetch_array($result))
{
  $stock_img = "_files/images/".$row["image"];
echo
'
<div class="col-sm-6">
<div class="media">
<div class="media-left">
<img src="'.$stock_img.'" style="width:100px;">
</div>
<div class="media-body text-left">
<ul>
<h4 class="media-heading">'.$row['name'].'</h4>
<li>GH&cent;'.$row["price"].'</li>
<li>'.$row['details'].'</li>
</ul>
<button class="btn btn-infos" style="width:100%">Buy now</button>
</div>

</div>
</div>
';
}
?>

</div>

</div>
</div>

<hr>
	
<div class="container-fluid">

<div class="col-sm-12 text-center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15884.50959041374!2d-0.26440548293867694!3d5.548123635635959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf97711b12b299%3A0xffd4d7dd05fb27f1!2sDansoman%2C%20Accra!5e0!3m2!1sen!2sgh!4v1582124536118!5m2!1sen!2sgh" style='width:100%; height: 300px;' frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</div>



<div class="container-fluid well" style="border:none;border-radius: 0px;">

<div class="col-sm-6 bottom_col_1">
<p><a href="http://www.facebook.com/something" style="color:#066;">Like us on <img src="icons/facebook.png"></a></p>
</div>



<div class="col-sm-6 bottom_col_2">
<p>Terms and regulation apply.</p>
</div>

</div>	

</body>
</html>