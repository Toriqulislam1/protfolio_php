<?php
require '../db.php';
$upload = $_FILES['file'];

$expload = explode('.',$upload['name']);
$after_ex = end($expload);

$name = $upload['name'];

$insert = "INSERT INTO brand (brand_image)values ('$name')";

$ins_res = mysqli_query($db_connection,$insert);

$ins_last_id = mysqli_insert_id($db_connection);

$file_name = $ins_last_id.'.'.$after_ex;

$new_location = "../upload/brand/$file_name";
move_uploaded_file($upload['tmp_name'],$new_location);

$update = "UPDATE brand SET brand_image = '$file_name' where id = $ins_last_id ";

mysqli_query($db_connection,$update);

header('location:brand.php');


?>