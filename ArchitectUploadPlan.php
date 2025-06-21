
<?php
session_start();
include 'connection.php';
include 'ArchitectPage.php';

?>

<div class="about">
    <div class="container"> 
        <div class="login-form signup-form">
            <form action="#" method="post" enctype="multipart/form-data">
            <div class="styled-input">
               
                    <input type="text" name="desc" placeholder="Description" required=""/>
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="file" name="txtFile" required=""/>
                    <label>File</label>
                    <span></span>
                </div>
                
            
                
                <input type="submit" name="submit" value="Send">		
            </form> 
        </div>  
    </div>
</div>
<?php
$cl=$_GET['id'];
$sid=$_SESSION['sid'];
         if(isset($_POST['submit']))
         {
            $des=$_POST['desc'];
            $upfold="images/";
            $mimage=$upfold.basename($_FILES['txtFile']['name']);
            move_uploaded_file($_FILES['txtFile']['tmp_name'],$mimage);
           
            
           $r="insert into staff_custom_plan(customid,plan,sid,des)values('$cl','$mimage','$sid','$des')";
           $rr=mysqli_query($conn,$r);
           $tt="update customizedplan set status = 'Uploaded' where customid = '$cl'";
           $rr=mysqli_query($conn,$tt);
           if($rr){
           echo '<script>alert("Data added successfully")</script>';

           echo "<script>window.location='ArchitectViewPlanQuery.php'</script>";

         }
        }
                ?>