<?php
session_start();
$_SESSION["logged"]=false;
header("Location: /admin/index.php");
?>
