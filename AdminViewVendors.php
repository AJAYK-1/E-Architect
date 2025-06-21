
<?php
include 'connection.php';
include 'AdminPage.php';
session_start();
?>

<form action="#" method="post" >

<table class="customers">
    <tr>
            <th style="font-size: 20px;">ID</th>
            <th style="font-size: 20px;">Name</th>
            <th style="font-size: 20px;">Address</th>
            <th style="font-size: 20px;">District</th>
            <th style="font-size: 20px;">Phone</th>
            <th style="font-size: 20px;">Email</th>

            <th style="font-size: 20px;"></th>
            <th style="font-size: 20px;"></th>
    </tr>
    </tr>
    <?php
      $s="select * from vendor_reg";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['vid'].'</td>';
        echo '<td>'.$row['vname'].'</td>';
        echo '<td>'.$row['address'].'</td>';
        echo '<td>'.$row['district'].'</td>';
        echo '<td>'.$row['phone'].'</td>';
        echo '<td>'.$row['email'].'</td>';
       
        if ($row['status']== "Registered")
             {
           
         
               echo' <td><a href="AdminApproveVendor.php?id='.$row['vid'].'&st=Accept">Approve</a></td>';
               echo' <td><a href="AdminViewVendors.php?id='.$row['vid'].'&st=Reject">Reject</a></td>';
             }
     
    echo '</tr>';
      
      }
      ?>
   
   
    </table>  
