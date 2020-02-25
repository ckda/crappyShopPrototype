<?php
session_start();
$_SESSION['pass']=null;
$_SESSION['email']=null;
session_destroy();
header("Location: ../../");
?>