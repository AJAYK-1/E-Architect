
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
            <th colspan="2">Query</th>
    </tr>
    <?php
      $s="select customer_reg.*,customizedplan.*,staff_custom_plan.* from customer_reg,customizedplan,staff_custom_plan where customizedplan.status = 'Uploaded' and customer_reg.cid=customizedplan.cid and customizedplan.customid=staff_custom_plan.customid";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['customid'].'</td>';
        echo '<td>'.$row['cname'].'</td>';
        echo '<td>'.$row['mobile'].'</td>';
        echo '<td>'.$row['plotsize'].'</td>';
        echo '<td>'.$row['query'].'</td>';
     
       

         
    // echo' <td><a href=.$row['query']."><img src="../{{d.15}}" height="150px" width="150px"></a></td>';
    // <td><a href="../{{d.15}}" target="_blank"><img src="../{{d.15}}" height="150px" width="150px"></a></td>
     
    echo '</tr>';
      
      }
      ?>
   
    </table>  
