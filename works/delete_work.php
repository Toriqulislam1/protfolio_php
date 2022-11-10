<?php 
session_start();
require '../db.php';


$id = $_GET['id'];
echo $id;

$delete_edu = "DELETE FROM works WHERE id=$id";
mysqli_query($db_connection, $delete_edu);

header('location:work.php');


?>