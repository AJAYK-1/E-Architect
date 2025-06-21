     

<?php
session_start();
include 'connection.php';
include 'CustomerPage.php';
$cid=$_SESSION['cid'];
        $id=$_GET['id'];
        
        
        
           $status=$_POST['status'];
           
           $r="update customizedplan set status = 'rejected' where customid = '$id'";
           $tt=mysqli_query($conn,$r);
          if($tt){
           echo '<script>alert("Plan Rejected")</script>';
            echo "<script>window.location='CustomerApprovedPlan.php'</script>";
         }
        
