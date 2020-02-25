<?php
session_start();

//User session
include "../../files_/session/usr.php";

//Functions
include "../../files_/functions/index.php";
$validity=1;
if(!isset($validity))
{
	$_SESSION['nack']="1";
	header("Location: ../../logout");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>New product</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body {
  background: url('../../images/bg2.jpg') no-repeat center center fixed;
  -webkit-background-size: cover; 
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.navbar-default .navbar-toggle .icon-bar{
	background-color:#FFD595;
}

.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 250px;
}

@media only screen and (max-width: 760px), screen and (max-device-width: 480px)  {

#img-upload{
    width: 100%;
}
}
</style>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border:none; background-color: transparent;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="../"><img src="../../icons/logo.png" class="img-responsive" style="display:inline-block; height:30px; margin-top:-5px;"></a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav navbar-right">
<?php
if($validity == 1)
{
echo'
  <li><a href="../stock"><span class="glyphicon glyphicon-plus"></span> New stock</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
  <li><a href="../logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
}

else
{
echo'
  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
  <li><a href="../logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
}
?>
  </ul>
  </div>
  </div>
</nav>
<div class="container well" style="margin-top:70px; border:none; padding-top:35px; background-color:rgba(255,255,255,  0.6);">

<div class="col-sm-12">
<form method="post" enctype="multipart/form-data" action="query.php">
  <div class="form-group input-group">
    <span class="input-group-addon">&nbsp;&nbsp;<i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;&nbsp;</span>
    <input id="product" type="text" class="form-control" name="stock" placeholder="Name">
  </div>
  <div class="form-group input-group">
    <span class="input-group-addon">GH&cent;</span>
    <input id="price" type="number" min="1.00" class="form-control" name="price" placeholder="Price">
  </div>

  <div class="form-group input-group">
    <span class="input-group-addon">&nbsp;&nbsp;<i class="glyphicon glyphicon-barcode"></i>&nbsp;&nbsp;</span>
    <textarea class="form-control" name="details" placeholder="Details"></textarea>
  </div>

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Image1... <input type="file" name="img_1" id="imgInp">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
        <img id='img-upload'/>
    </div>

  <div class="form-group">
	<button class="btn btn-success" style="width:100%;"><span class=' glyphicon glyphicon-pushpin'></span> Add to shop</button>
  </div>
</form>
</div>

</div>
<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>

</body>
</html>