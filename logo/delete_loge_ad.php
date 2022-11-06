<?php
require '../db.php';


$id = $_GET['id'];

$select = "SELECT * FROM logos";
$sel_res = mysqli_query($db_connection,$select);
$after_assoc = mysqli_fetch_assoc($sel_res);

$delete_from = "upload/logo/".$after_assoc['logo_image'];
unlink($delete_from);

$delete = "DELETE FROM logos where id =$id";
mysqli_query($db_connection,$delete);

header('location:logo.php');











?>