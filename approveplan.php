<?php

include 'connection.php';
include 'CustomerPage.php';

$id=$_GET['id'];

$stat=$_GET['status'];

$qry="update `customizedplan` set status='$stat' where customid='$id'";

$s=mysqli_query($conn,$qry);

if($s){

    echo "<script>alert('$stat')</script>";
    echo "<script>window.location='CustomerHome.php'</script>";

}


?>