<?php

require '../db.php';

$id = $_GET['id'];

$update = "UPDATE logos set status = 0";

mysqli_query($db_connection,$update);



$update_status = "UPDATE logos set status =1 where id=$id ";
mysqli_query($db_connection,$update_status);


header('location:logo.php');



?>







