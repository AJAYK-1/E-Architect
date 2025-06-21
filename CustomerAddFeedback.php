

<?php
include 'connection.php';
include 'CustomerPage.php';
session_start();
?>
<div class="about">
    <div class="container"> 
        <div class="login-form signup-form">
            <form action="#" method="post" enctype="multipart/form-data">
              
                <br/>
                <br/>
                <div class="styled-input">
                    <input type="text" name="pname" required=""/>
                    <label>Post your feedback</label>
                    <span></span>
                </div>
                
                <input type="submit" name="submit" value="Post Now">		
            </form> 
        </div>  
    </div>
</div>

<?php

$cid=$_SESSION['cid'];
         if(isset($_POST['submit']))
         {
           $a=$_POST['pname'];
           $b = date('m/d/Y');
           
            
           $r="insert into feedback(cid,feedback,fdate) values('$cid','$a','$b')";
           mysqli_query($conn,$r);
          
           echo '<script>alert("Data added successfully")</script>';
         }
                ?>
