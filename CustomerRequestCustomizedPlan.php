<?php
session_start();
include 'connection.php';
include 'CustomerPage.php';

$qry="SELECT CAST(SYSDATE() AS DATE) FROM DUAL";

$q=mysqli_query($conn,$qry);

$ar=mysqli_fetch_array($q);

?>
<div class="about">
    <div class="container"> 
        <div class="login-form signup-form">
            <form action="#" method="post">
               
                <div class="styled-input">
                    <input type="text" name="Name" required=""/>
                    <label>Plot Size (Sqft)</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="text" name="phone" required=""/>
                    <label>Query</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="text" name="budget" required=""/>
                    <label>Budget</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="date" name="dt" min=<?php echo $ar[0]; ?> required=""/>
                    <!-- <label>Submission Date</label> -->
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
           $a=$_POST['Name'];
           $b=$_POST['phone'];
           $c=$_POST['budget'];
           $d=$_POST['dt'];
           
            
           $r="insert into customizedplan(plotsize,query,cid,status,aid,budget,dt) values('$a','$b','$cid','Requested','$id','$c','$d')";
           $tt=mysqli_query($conn,$r);
          if($tt){
           echo '<script>alert("Data added successfully")</script>';
            echo "<script>window.location='CustomerHome.php'</script>";
         }
        }
                ?>
