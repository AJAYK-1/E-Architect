<?php
session_start();
include 'connection.php';
include 'AdminPage.php';

?>

<form action="#" method="post" >

<table class="customers">
    <tr>
            
            <th>Payment ID</th>
            <th>Customer</th>
            <th>Architect</th>
            <th>Amount</th>
            <th>Status</th>
    </tr>
    <?php
    //$cd=$_SESSION['cid'];
      $s="SELECT * from payment p,customer_reg cr,customizedplan c,staff_reg s WHERE c.`customid`=p.`customid` AND c.`cid`= cr.`cid` AND s.`sid`=c.`aid` ";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        
        echo '<td>'.$row['customid'].'</td>';
        echo '<td>'.$row['cname'].'</td>';
        echo '<td>'.$row['sname'].'</td>';
        echo '<td>'.$row['amount'].'</td>';
        $z="SELECT * from payment";
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
       
        // if ($row['status']== "0")
        //      {
           
         
        //        echo' <td><a href="adminupdateuser.php?id='.$row['pEmail'].'&status=1">Approve</a></td>';
        //        echo' <td><a href="adminupdateuser.php?id='.$row['pEmail'].'&status=-1">Reject</a></td>';
        //      }
     
    echo '</tr>';
      
      }
      ?>
   

    </table>  
