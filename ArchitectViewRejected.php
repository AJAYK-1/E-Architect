
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
            <th>Phone</th>
            <th>Plot Size</th>
            <th>Query</th>
            <th>Plan Status</th>
            <th>Re Upload</th>
    </tr>
    <?php
    $sid=$_SESSION['sid'];

      

      $s="SELECT * FROM `customizedplan` p,`customer_reg`c WHERE  p.`cid`=c.`cid` AND  p.aid='$sid' AND status='rejected'";
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
        //$z="select * from `payment` p,`customizedplan` c where p.customid=c.customid and c.customid='$row[0]'";
        //$ct=mysqli_query($conn,$z);
        //$res=mysqli_fetch_array($ct);
        //echo $res[0];
        //if($res){
        //  if($res[3]!='paid'){

              
        //    echo '<td>Requested</td>';

        //  }else{

		echo' <td><a href="ArchitectReUploadPlan.php?id='.$row['customid'].'">Re-Upload</a></td>';
        //}else{
        //  echo' <td><a href="Requestpayment.php?id='.$row['customid'].'">Request Payment</a></td>';}    
    echo '</tr>';} 
      ?>
     

    </table>  
