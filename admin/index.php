<?php
session_start();

//User session
include "../files_/session/usr.php";

//Functions
include "../files_/functions/index.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

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
      <a class="navbar-brand" href="../dashboard"><img src="../icons/logo.png" class="img-responsive" style="display:inline-block; height:30px; margin-top:-5px;"></a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav navbar-right">
  <li><a href="stock"><span class="glyphicon glyphicon-plus"></span> New stock</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
  <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';

  </ul>
  </div>
  </div>
</nav>


<div class="container" style="margin-top:70px;">

<div class="well">

<div class="row">
<div class="progress">

<div class="progress-bar progress-bar-success progress-bar-striped active" aria-valuenow="60" aria-valuemax="100" aria-valuemin="0" role="progressbar" style="width:<?php 
		 if(isset($_SESSION['shop_visits']))
		 {
			 echo $inheight = 100 * (10);
		 }
		 
		  else
		 {
			 echo 30;
		 }
?>%;">
</div>
<div class="progress-bar progress-bar-danger progress-bar-striped active" aria-valuenow="60" aria-valuemax="100" aria-valuemin="0" role="progressbar" style="width:<?php 
		 if(isset($_SESSION['searches']))
		 {
			 echo $inheight = 100 * (21);
		 }
		 
		  else
		 {
			 echo 30;
		 }
?>%;">
</div>
<div class="progress-bar progress-bar-warning progress-bar-striped active" aria-valuenow="60" aria-valuemax="100" aria-valuemin="0" role="progressbar" style="width:<?php 
		 if(isset($_SESSION['orders']))
		 {
			 echo $inheight = 100 * (32);
		 }
		 
		  else
		 {
			 echo 30;
		 }
?>%;">
</div>

</div>
</div>

<div style="margin-bottom:15px;">
<div class="col-sm-4"><span class="badge" style="background-color:#6C6;">&nbsp;</span>Shop visits(<?php echo $_SESSION['shop_visits']; ?>)</div>
<div class="col-sm-4"><span class="badge" style="background-color:#F03;">&nbsp;</span>Searches performed(<?php echo $_SESSION['orders']; ?>)</div>
<div class="col-sm-4"><span class="badge" style="background-color:#FC3;">&nbsp;</span>Orders</div>
</div>

</div>

<!--first row-->
<div class="row">
<?php
$result=mysqli_query($con,"SELECT * FROM products ORDER BY id DESC");

while($row=mysqli_fetch_array($result))
{
  $stock_img = "../_files/images/".$row["image"];

echo
'
<div class="col-sm-3">
<a href="#" data-toggle="modal" data-target="#stock_edit" onclick="document.getElementById('."'stock_img'".').src='."'".$stock_img."'".'; document.getElementById('."'product'".').value='."'".$row['name']."'".'; document.getElementById('."'price'".').value='."'".$row['price']."'".'; document.getElementById('."'details'".').value='."'".$row['details']."'".'; document.getElementById('."'id'".').value='."'".$row['id']."'".';">
<div class="thumbnail">
<img src="';


if(file_exists($stock_img)){echo $stock_img;} else{echo '../../ad.png';}

echo '">
<caption>
<mark>'.$row['name'].'</mark>
<kbd>GH&cent;'.$row["price"].'</kbd>
</caption>
</div>
</a>
</div>
';

}
?>
</div>

<!-- Modal -->
<div id="stock_edit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-shopping-cart"></i>Stock edit</h4>
      </div>
      <div class="modal-body text-center">

<div class="thumbnail">
<img style="margin-bottom:20px;" id="stock_img" src="" height="100" width="100">
<caption>
</caption>
</div>
<form method="post" enctype="multipart/form-data" action="#">
  <div class="form-group input-group">
    <span class="input-group-addon">&nbsp;&nbsp;<i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;&nbsp;</span>
    <input type="hidden" name="id">
    <input id="product" type="text" class="form-control" name="stock" placeholder="Stock name">
  </div>
  <div class="form-group input-group">
    <span class="input-group-addon">GH&cent;</span>
    <input id="price" type="number" min="1.00" class="form-control" placeholder="Stock price">
  </div>
  <div class="form-group input-group">
    <span class="input-group-addon">&nbsp;&nbsp;<i class="glyphicon glyphicon-barcode"></i>&nbsp;&nbsp;</span>
    <textarea class="form-control" name="details" id="details" placeholder="Stock details"></textarea>
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
	<button class="btn btn-success" style="width:100%;"><span class=' glyphicon glyphicon-floppy-saved'></span> Save changes</button>
  </div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div>


<script>
//Image preview

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