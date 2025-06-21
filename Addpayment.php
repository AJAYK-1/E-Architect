<?php
session_start();
include 'connection.php';
include 'CustomerPage.php';

$id=$_GET['id'];

$qry="select amount from payment where customid='$id'";

$d=mysqli_query($conn,$qry);

$r=mysqli_fetch_array($d);

?>
<div class="about">
    <div class="container"> 
        <div class="login-form signup-form">
            <form action="#" method="post">
            <div class="styled-input">
                    <input type="text"  min=16 max=16 placeholder="Card NO"   required=""/>
               
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="text" min=3 max=3 placeholder="CVV"  required=""/>
        
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="text" min=4 max=4  placeholder="PIN"  required=""/>

                    <span></span>
                </div>
               
                <div class="styled-input">
                    <input type="text"  value=<?php echo $r[0] ?>  readonly/>
                    <span></span>
                </div>
                
                <input type="submit" name="submit" value="Paynow">		
            </form> 
        </div>  
    </div>
</div>
<?php

        $cid=$_SESSION['cid'];
        $id=$_GET['id'];
        //$s="SELECT * FROM `customizedplan` p,`customer_reg`c WHERE  p.`cid`=c.`cid` AND  p.aid='$sid' AND status='approved'";
        
         if(isset($_POST['submit']))
         {
           $amount=$_POST['amount'];
           
           $r="update payment set status='paid' where customid='$id'";
           $tt=mysqli_query($conn,$r);
          if($tt){
           echo '<script>alert("Payment added successfully")</script>';
            echo "<script>window.location='CustomerDownloadPlan2.php'</script>";
         }
        }
                ?>
