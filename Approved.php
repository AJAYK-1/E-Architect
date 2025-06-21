     

<?php
session_start();
include 'connection.php';
include 'CustomerPage.php';
$cid=$_SESSION['cid'];
        $id=$_GET['id'];
        
        
        
           $status=$_POST['status'];
           
           $r="update customizedplan set status = 'approved' where customid = '$id'";
           $tt=mysqli_query($conn,$r);
          if($tt){
           echo '<script>alert("Plan Approved")</script>';
            echo "<script>window.location='CustomerApprovedPlan.php'</script>";
         }
        
