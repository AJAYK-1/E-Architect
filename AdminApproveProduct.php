<?php
include 'connection.php';
$cl=$_GET['id'];

$st = $_GET['st'];
if($st == "Accept")
    {
   
    $ty="update products set status = '$st' where pid = '$cl'";
    $qry=mysqli_query($conn,$ty);
if($qry)
{
    echo'<script>alert("Approved............")</script>';
    echo '<script>location.href="AdminViewProducts.php"</script>';
}
    }
    ?>