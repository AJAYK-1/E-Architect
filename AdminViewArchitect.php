
<?php
include 'connection.php';
include 'AdminPage.php';
session_start();
?>

<form action="#" method="post" >

<table class="customers">
    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th></th>
    </tr>
   <?php
$s="select * from staff_reg where status = 'Registered'";
$f=mysqli_query($conn,$s);
while($row=mysqli_fetch_array($f))
{
  
 
            
              echo '<tr>';
              echo '<td>'.$row['sid'].'</td>';
              echo '<td>'.$row['sname'].'</td>';
              echo '<td>'.$row['phone'].'</td>';
              echo '<td>'.$row['email'].'</td>';
             
              echo' <td><a href="AdminViewArchitect.php?id='.$row['sid'].'">Approve</a></td>';
                    echo '</tr>';
             
             }
            
             ?>

   
    </table>  
