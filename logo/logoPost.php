<?php

require '../db.php';

 

$uploaded = $_FILES['logo'];

   
$expload = explode('.', $uploaded['name']);

$expl_res = end($expload);



$name = $uploaded['name'];



$allowex = array('jpg','png','jpeg');

 if(in_array($expl_res,$allowex)){
    if($uploaded['size']<52000){
        $insert = "INSERT INTO logos(logo_image) VALUES ('$name')";
        mysqli_query($db_connection,$insert);

     $id = mysqli_insert_id($db_connection);

     $file_name = $id.'.'.$expl_res;
     $new_location = '../upload/logo/'.$file_name;
     move_uploaded_file($uploaded['tmp_name'],$new_location);

     $update = "UPDATE logos SET logo_image ='$file_name' WHERE id=$id";
     mysqli_query($db_connection, $update);

     header('location:logo.php');



    }else{
        echo "size is large";
        header('location:logo.php');
    }
    
       
    
}else{
    echo "extention does not macth";
}



?>