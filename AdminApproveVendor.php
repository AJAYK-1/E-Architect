<?php

include 'connection.php';
$cl=$_GET['id'];

$st = $_GET['st'];
if($st == "Accept")
    {
   
    $ty="update vendor_reg set status = '$st' where vid = '$cl'";
    $qry=mysqli_query($conn,$ty);
if($qry)
{
    echo'<script>alert("Approved............")</script>';
    echo '<script>location.href="AdminViewVendors.php"</script>';
}
    }
    ?>