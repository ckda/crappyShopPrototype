<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to Yoorye.com</title>
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

.carousel
{
	margin-top:50px;
}

.navbar-default .navbar-toggle .icon-bar{
	background-color:#FFD595;
}

.hom_car{
    height: 500px;
}

@media only screen and (max-width: 760px), screen and (max-device-width: 480px)  {

.hom_car{
	height:100%;
}
}
</style>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">

<div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="../icons/logo.png" class="img-responsive" style="display:inline-block; height:30px; margin-top:-5px;"></a>
</div>
  
<form method="post" action="dashboard">
<div class="nav navbar-nav navbar-right form-group input-group">
    <input id="search" type="text" class="form-control" name="email" placeholder="Search for items" style="border:1px #060 solid;">
        <div class="input-group-btn">
      <button class="btn btn-success" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
	    </div>
</div>
</form>

</div>
</nav>

</body>
</html>