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
<body>

<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">

<div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="<?php if(!isset($SHOPlogo)){echo "../bas.png";} else{echo "../../_files/images/$_GET[yourSh]/".$SHOPlogo;} ?>" class="img-responsive" style="display:inline-block; height:80px; margin-top:-5px;"></a>
</div>
  
<form method="post" action="dashboard">
<div class="nav navbar-nav navbar-right">
  <div class="form-group">
    <input type="text" class="form-control" style="width:98%;" name="search" placeholder="Search for items">
  </div>
  <div class="form-group">
      <button class="btn btn-success" style="width:98%;" type="submit">
        Search <i class="glyphicon glyphicon-search"></i>
      </button>
  </div>
</form>

</div>
</nav>
