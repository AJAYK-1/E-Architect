<?php
session_start();
include 'connection.php';
include 'CustomerPage.php';

?>
<form action="#" method="post" >

<table class="customers">
    <tr>
            <th>Request ID</th>
            <th>Plot Size</th>
            <th>Query</th>
            <th>Architect</th>
            <th>Description</th>
            <th colspan=3>Plan</th>
    </tr>
    <?php
    $cid=$_SESSION['cid'];
    
    
      $s="SELECT * FROM staff_custom_plan s,`customizedplan`c,`staff_reg` p WHERE  s.`customid`=c.`customid` AND s.`sid`=p.`sid` AND c.status = 'approved' AND c.cid ='$cid'";
      // echo $s;
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['customid'].'</td>';
        echo '<td>'.$row['plotsize'].'</td>';
        echo '<td>'.$row['query'].'</td>';
        echo '<td>'.$row['sname'].'</td>';
        echo '<td>'.$row['des'].'</td>';
        echo' <td><a href="'.$row['plan'].'" download="'.$row['plan'].'">Download Plan</a></td>';
        $z="select * from `payment` p,`customizedplan` c where p.customid=c.customid and c.customid='$row[5]'";
        $ct=mysqli_query($conn,$z);
        $res=mysqli_fetch_array($ct);
        if($res){
          if($res[3]=='paid'){

            echo '<td>Paid</td>';

          }else{
              //echo' <td><a href="Addpayment.php?id='.$row['customid'].'">Paid</a></td>';
          }
        }else{
          echo '<td>Not Paid</td>';
        }
    echo '</tr>';
      
      }
      ?>

    </table>  
