<?php
include('conndb.php');
$type=$_POST['type'];
$id=$_POST['id'];
if ($type=='like') {
    $sql= "UPDATE publication SET likeCount=likeCount+1 WHERE idPub=$id";
} 

$res1= mysqli_query($conn, $sql);
?>