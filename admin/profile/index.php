<?php
session_start();

//User session
include "../../../files_/session/usr.php";

//Functions
include "../../../files_/functions/index.php";

//Checking validity and others
include "../../../files_/session/validity.php";

if(!isset($validity))
{
	$_SESSION['nack']="1";
	header("Location: ../logout");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile - Yoorye.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body {
  background: url('../../../images/bg1.jpg') no-repeat center center fixed;
  -webkit-background-size: cover; 
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.navbar-default .navbar-toggle .icon-bar{
	background-color:#FFD595;
}

.btn-file {
    position: relative;
    overflow: hidden;
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

#img-upload, .shop_logo{
    width: 50%;
}

.nav_span{
	width:20%;
	display:inline-table;
}

.nav_btn{
	width:100%;
	border:none;
	background-color:transparent;
}

.nav_span:hover{
	cursor:pointer;
	background-color:#B7FFE8;
}

.nav_selected{
	cursor:pointer;
	background-color:#B7FFE8;
}

@media only screen and (max-width: 760px), screen and (max-device-width: 480px)  {
.span_mob{
	display:block;
 }
 
#img-upload, .shop_logo{
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
      <a class="navbar-brand" href="../"><img src="../../../icons/logo.png" class="img-responsive" style="display:inline-block; height:30px; margin-top:-5px;"></a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav navbar-right">
<?php
if($validity == 1)
{
echo'
  <li><a href="../stock"><span class="glyphicon glyphicon-plus"></span> New stock</a></li>
  <li><a href="../profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
  <li><a href="../logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
}

else
{
echo'
  <li><a href="../profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
  <li><a href="../logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
}
?>
  </ul>
  </div>
  </div>
</nav>
<div class="container-fluid" style="margin-top:50px; padding-top:20px; background-color:rgba(255,255,255,  0.6);">
     
<div class="row">
<div class="col-sm-12 text-center" style="margin-bottom:30px;">

<div class="nav_span">
 <a href="?m=4"><button class="nav_btn"><span class="glyphicon glyphicon-list-alt span_mob"></span> Details</button></a>
</div>

<div class="nav_span">
  <a href="?m=1"><button class="nav_btn"><span class="glyphicon glyphicon-picture span_mob"></span> Images</button></a>
</div>

<div class="nav_span">
  <a href="?m=2"><button class="nav_btn"><span class="glyphicon glyphicon-lock span_mob"></span> Security</button></a>
</div>

<div class="nav_span">
  <a href="?m=3"><button class="nav_btn"><span class="glyphicon glyphicon-hdd span_mob"></span> Account</button></a>
</div>

</div>


<div class="col-sm-2">
</div>

<div class="col-sm-8">

<?php
if(!isset($_GET['m']) || $_GET['m'] > 3)
{
	echo '

<div class="well" name="details">
  <h4><span class="glyphicon glyphicon-list-alt"></span> Details</h4>
<form method="post" enctype="multipart/form-data" action="query.php">
  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
    <input type="hidden" name="details" value="'. $shop_name.'">
    <input id="product" type="text" class="form-control" name="shop_name" placeholder="Shop name" value="'. $shop_name.'">
  </div>

  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
    <select class="form-control" name="shop_category">
                <option value="0" selected="selected">Select category</option>
                <option>Animals &amp; Pets</option>
                <option>Beauty &amp; Makeup</option>
                <option>Books &amp; Education</option>
                <option>Cards &amp; Vouchers</option>
                <option>Classifieds Ads</option>
                <option>Cars &amp; Vehicles</option>
                <option>Clothing &amp; Fashion</option>
                <option>Electronics &amp; Phones</option>
                <option>Food &amp; Medicine</option>
                <option>Gaming &amp; Videos</option>
                <option>Jewelleries &amp; Watches</option>
                <option>Property &amp; Housing</option>
                <option>Sports &amp; Equipments</option>
                <option>Others</option>    
    </select>
  </div>

  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
    <input id="product" type="text" class="form-control" name="shop_location" placeholder="Area served" value="'. $shop_location.'">
  </div>

  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
    <input id="product" type="text" class="form-control" name="shop_phone" placeholder="Phone number" value="'. $shop_phone.'">
  </div>

  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
    <textarea class="form-control" name="shop_details" placeholder="About shop">'. $shop_details.'</textarea>
  </div>

  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
    <input id="product" type="text" class="form-control" name="buy_word_link" placeholder="Buy word" value="'. $buy_word_link.'">
    <input id="product" type="text" class="form-control" name="buy_word" placeholder="URL" value="'. $buy_word.'">
  </div>

  <div class="form-group">
	<button class="btn btn-success" style="width:100%;"><span class=" glyphicon glyphicon-floppy-disk"></span> Save changes</button>
  </div>
</form>
</div>
';
}

//Images
if($_GET['m']==1)
{
	echo '

<div class="well">
  <h4><span class="glyphicon glyphicon-picture"></span> Images</h4>
  <div class="img_responsive">
  <img src="../../../_files/images/'.$shop_url.'/'.$shop_logo.'" class="shop_logo">
  </div>
<form method="post" enctype="multipart/form-data" action="query.php">
<input type="hidden" name="images" value="'.$shop_url.'">
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" name="shop_logo" id="imgInp">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
        <img id="img-upload"/>
    </div>

  <div class="form-group">
	<button class="btn btn-success" style="width:100%;"><span class="glyphicon glyphicon-floppy-disk"></span> Save changes</button>
  </div>

  </form>
  </div>';
}


//Security
if($_GET['m']==2)
{
	echo '

<div class="well" name="security">
  <h4><span class="glyphicon glyphicon-lock"></span> Security</h4>
<form method="post" enctype="multipart/form-data" action="query.php">
<input type="hidden" name="security" value="'.$shop_url.'">
  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-off"></i></span>
    <input id="old_password" type="password" class="form-control" name="password" placeholder="Current password">
  </div>

  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="new_password" type="password" class="form-control" name="new_password" placeholder="New password">
  </div>

  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="comfirm_password" type="password" class="form-control" name="comfirm_password" placeholder="Comfirm password">
  </div>

  <div class="form-group">
	<button class="btn btn-success" style="width:100%;"><span class="glyphicon glyphicon-floppy-disk"></span> Save changes</button>
  </div>
</form>
</div>';
}


//Account
if($_GET['m']==3)
{
	echo '

<div class="well">
  <h4><span class="glyphicon glyphicon-hdd"></span> Account</h4>
<form method="post" enctype="multipart/form-data" action="../../dashboard">
  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
    <select class="form-control" name="plan">
                <option value="0" selected="selected">Starter Shop</option>
                <option value="4">Upgrade to Pro Shop</option>
	</select>
  </div>

  <div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
    <select class="form-control" name="action">
                <option value="0" selected="selected">Upgrade duration</option>
                <option value="1">+3 more months</option>
                <option value="1">+6 more months</option>
                <option value="1">+9 more months</option>
                <option value="1">+12 more months</option>
                <option value="1">+24 more months</option>
	</select>
  </div>

  <div class="form-group">
	<button class="btn btn-success" style="width:100%;"><span class="glyphicon glyphicon-floppy-disk"></span> Take action</button>
  </div>
</form>
</div>
';
}

?>
</div>

<div class="col-sm-2">
</div>

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
	
	
//Navigation code
var a;

<?php
	if(isset($_SESSION['nack']) || strlen($_SESSION['nack']) > 5)
{
	echo "window.alert('".$_SESSION['nack']."');";
	$_SESSION['nack']=NULL;
}
?>
</script>

</body>
</html>