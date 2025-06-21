<?php
session_start(); //to start the session
$email=$_SESSION['email'];
include 'CustomerPage.php';
include 'connection.php';


?>
<br>
<br>
<style>
tr,td{

    padding-top:20px;
}

</style>
<center>

<h1>Feedback</h1>
    <form method="POST" enctype="multipart/form-data">
    <table>
     
        <tr>
            <td></td>
            <td><textarea type="text" class="form-control" name="desc" required="" placeholder="description"></textarea></td>
        </tr> 
        <tr>
            <td></td>
            <td><input type="submit" name="btnSubmit" value="Submit"></td>
        </tr>
    </table>
   
</form>
<br>
<br>


<table class="customers">
    <h1>Customer Feedbacks</h1>
    <tr>
            <th>ID</th>
            <th>User Email</th>
            <th>Feedback</th>
            <th></th>
    </tr>
   <?php
$s="select * from feedback where utype='customer'";
$f=mysqli_query($conn,$s);
while($row=mysqli_fetch_array($f))
{
  
 
            
              echo '<tr>';
              echo '<td>'.$row['fid'].'</td>';
              echo '<td>'.$row['uemail'].'</td>';
              echo '<td>'.$row['feedback'].'</td>';
             
                    echo '</tr>';
             
             }
            
             ?>

   
    </table>  
</center>
<?php

if(isset($_REQUEST['btnSubmit']))
{


    $desc=$_REQUEST['desc'];
     
    $q="insert into feedback(uemail,feedback,utype)values('$email','$desc','customer')"; 
    // echo $q;  
    $s= mysqli_query($conn, $q);
    if($s)
    {
    echo '<script>alert("Successfully Added")</script>';
    echo '<script>location.href="customerhome.php"</script>';
    } else
    {
        echo '<script>alert("Sorry some error occured")</script>';
    }
    
        
        
    
}


?>