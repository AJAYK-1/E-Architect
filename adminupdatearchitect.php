<?php

include 'connection.php';

$id=$_REQUEST['id'];
$status=$_REQUEST['status'];

$qry="update login set status='$status' where uname='$id'";

$res=mysqli_query($conn,$qry);

if($res){
    
    
echo '<script>alert("Status Updated Successfully")</script>';
echo '<script>window.location="Adminviewarchitects.php"</script>';

}else{

echo '<script>alert("Something went wrong")</script>';
echo '<script>window.location="Adminviewarchitects.php"</script>';


}


?>