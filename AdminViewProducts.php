
<?php
include 'connection.php';
include 'AdminPage.php';
// session_start();
?>

<form action="#" method="post" >

<table class="customers">
    <tr>
                <th>Product ID</th>
                <th>Product</th>
                <th>Desc</th>
                <th>Amount</th>

            <th style="font-size: 20px;"></th>
            <th style="font-size: 20px;"></th>
    </tr>
    </tr>
    <?php
      $s="select * from products where status='Registered'";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['pid'].'</td>';
        echo '<td>'.$row['pname'].'</td>';
        echo '<td>'.$row['pdesc'].'</td>';
        echo '<td>'.$row['pamount'].'</td>';
       
        if ($row['status']== "Registered")
             {
           
         
               echo' <td><a href="AdminApproveProduct.php?id='.$row['pid'].'&st=Accept">Approve</a></td>';
     
             }
     
    echo '</tr>';
      
      }
      ?>
   
   
    </table>  
