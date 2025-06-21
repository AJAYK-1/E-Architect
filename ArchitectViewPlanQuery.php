
<?php
session_start();
include 'connection.php';
include 'ArchitectPage.php';
?>
<form action="#" method="post" >

<table class="customers">
    <tr>
            <th>Request ID</th>
            <th>Customer</th>
        
            <th>Plot Size</th>
            <th>Budget</th>
            <th>Submission Date</th>
            <th>Query</th>
            <th colspan="3">Status</th>
    </tr>
    <?php
    $sid=$_SESSION['sid'];

      $s="SELECT * FROM `customizedplan` p,`customer_reg`c WHERE  p.`cid`=c.`cid` AND  p.aid='$sid' AND status='Requested'";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['customid'].'</td>';
        echo '<td>'.$row['cname'].'</td>';
        
        echo '<td>'.$row['plotsize'].'</td>';
        echo '<td>'.$row['budget'].'</td>';
        echo '<td>'.$row['dt'].'</td>';
        echo '<td>'.$row['query'].'</td>';
        echo '<td>'.$row['status'].'</td>';
        echo' <td><a href="Requestpayment.php?id='.$row['customid'].'">Enter Amount</a></td>';
        echo' <td><a href="ArchitectUploadPlan.php?id='.$row['customid'].'">Upload</a></td>';
      
    echo '</tr>';
      
      }
      ?>
     

    </table>  
