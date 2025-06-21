<?php
session_start();
include 'connection.php';
include 'CustomerPage.php';

$id=$_REQUEST['id'];

?>

<form action="#" method="post" >

<table class="customers">
    <tr>
            <th>Query</th>
            <th>Plot size</th>
            <th>Plan</th>
            
    </tr>
    <?php
      $s="SELECT * FROM `customizedplan` c,`staff_custom_plan` s WHERE s.`customid`=c.`customid` AND s.`sid`='$id' and c.status='approved'";
    //   echo $s;
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['query'].'</td>';
        echo '<td>'.$row['plotsize'].'</td>';
        echo '<td><img src='.$row['plan'].' height="150px" width="150px"></td>';
        
       
        // if ($row['status']== "0")
        //      {
           
         
        //        echo' <td><a href="adminupdateuser.php?id='.$row['pEmail'].'&status=1">Approve</a></td>';
        //        echo' <td><a href="adminupdateuser.php?id='.$row['pEmail'].'&status=-1">Reject</a></td>';
        //      }
     
    echo '</tr>';
      
      }
      ?>
   

    </table>  
