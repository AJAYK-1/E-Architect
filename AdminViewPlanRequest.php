
<?php
session_start();
include 'connection.php';
include 'AdminPage.php';

?>

<form action="#" method="post" >

<table class="customers">
    <tr>
            <th>Request ID</th>
            <th>Customer</th>
            <th>Phone</th>
            <th>Plot Size</th>
            <th>Query</th>
            <th>Status</th>
    </tr>
    <?php
      $s="select * from customer_reg inner join customizedplan on customer_reg.cid = customizedplan.cid where customizedplan.status = 'Requested'";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['customid'].'</td>';
        echo '<td>'.$row['cname'].'</td>';
        echo '<td>'.$row['mobile'].'</td>';
        echo '<td>'.$row['plotsize'].'</td>';
        echo '<td>'.$row['query'].'</td>';
        echo '<td>'.$row['status'].'</td>';
        if ($row['status']== "Requested")
             {
           
         
               echo' <td><a href="AdminAllotStaff.php?id='.$row['customid'].'">Allot</a></td>';
              
             }
     
    echo '</tr>';
      
      }
      ?>
    </table>  

  