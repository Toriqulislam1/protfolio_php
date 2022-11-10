<?php
require '../db.php';
 $id = $_GET['id'];

 $select = "SELECT * FROM logos";

 $del_res = mysqli_query($db_connection,$select);


 $delete = "DELETE FROM socials where id = $id";
 mysqli_query($db_connection,$delete);


 header('location:social.php');





?>