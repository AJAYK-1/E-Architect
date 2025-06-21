<?php
session_start();
include 'connection.php';
include 'CustomerPage.php';

?>
<form method="POST" >
   
    <table class="customers">
        <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>   
                <th></th>
        </tr>
        <?php
      $cid=$_SESSION['cid'];
      $s="select * from service_reg where status='Accept'";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['vid'].'</td>';
        echo '<td>'.$row['vname'].'</td>';
        echo '<td>'.$row['address'].'</td>';
        echo '<td>'.$row['phone'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo' <td><a href="requestsp.php?id='.$row['vid'].'">Request</a></td>';
     
        // echo' <td><a href="payment1.php?id='.$row['customid'].'">Allot</a></td>';
    echo '</tr>';
      
      }
      ?>

    
        
    </table>
    
    
    </form>
   