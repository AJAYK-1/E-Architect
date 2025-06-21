<?php
session_start();
include 'connection.php';
include 'ArchitectPage.php';

?>
<div class="about">
    <div class="container"> 
        <div class="login-form signup-form">
            <form action="#" method="post">
               
                <div class="styled-input">
                    <input type="text" name="amount" required=""/>
                    <label>Amount</label>
                    <span></span>
                </div>
                
                <input type="submit" name="submit" value="Add Now">		
            </form> 
        </div>  
    </div>
</div>
<?php

        $cid=$_SESSION['cid'];
        $id=$_GET['id'];
        
         if(isset($_POST['submit']))
         {
           $amount=$_POST['amount'];
           
           $r="insert into payment(customid,amount,status) values('$id','$amount','Requested')";
           $tt=mysqli_query($conn,$r);
          if($tt){
           echo '<script>alert("Request added successfully")</script>';
            echo "<script>window.location='ArchitectViewPlanQuery.php'</script>";
         }
        }
                ?>
