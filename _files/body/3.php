<div class="container">

<div class="row" style="margin-top:120px;">
<?php
	
$resulta=mysqli_query($con,"SELECT * FROM $SHOPid  ORDER BY last_updated DESC");
$a = mysqli_num_rows($resulta);
if($a > 0)
{	
while($row=mysqli_fetch_array($resulta))
{

echo '
<div class="col-sm-4 thumbnail">
<a href="bses.php?name='.$row["its5"].'">
<div style="width:25%; display:inline-block; vertical-align: top;">
<img src="../../_files/images/'.$_GET['yourSh'].'/'.$row["img_1"].'" style="width:100%; height:100px; margin-top:10px;">
</div>

<div style="width:70%; display:inline-block; vertical-align: top;">
<h4>'.$row["stock"].' </h4>
<h5><mark>GH&cent'.$row["price"].'</mark> </h5>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
</div>

</div>';
}
}
?>

</div>
