<?php

include 'connection.php';

$id=$_REQUEST['id'];
$status=$_REQUEST['status'];

$qry="update login set status='$status' where uname='$id'";

echo $qry;

$res=mysqli_query($conn,$qry);

if($res){
    if(isset($_POST['Approve']))
    {
    $qry="insert into customer_reg(cname,address,district,location,mobile,email,password) values('$cname','$address','$district','$location','$mobile','$email','$password')";
	$q=  mysqli_query($conn,$qry); 
	$qr ="insert into login(uname,pass,utype)values('$email','$password','Customer')";
	$q=  mysqli_query($conn,$qr);
    }
echo '<script>alert("Status Updated Successfully")</script>';
echo '<script>window.location="AdminViewCustomers.php"</script>';

}else{

echo '<script>alert("Something went wrong")</script>';
echo '<script>window.location="AdminViewCustomers.php"</script>';


}


?>