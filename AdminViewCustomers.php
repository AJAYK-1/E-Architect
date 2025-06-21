
<?php
session_start();
include 'connection.php';
include 'AdminPage.php';

?>

<center><h1>For Approval</h1></center>

<table class="customers">
    <tr>
            
            <th>Name</th>
            <th>Address</th>
            <th>District</th>
            <th>Location</th>
            <th>Mobile</th>
            <th>Email</th>
            <th></th>
            <th></th>
    </tr>
    <?php
      $s="select * from customer_reg c,login l where l.uname=c.email and l.status='0'";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['cname'].'</td>';
        echo '<td>'.$row['address'].'</td>';
        echo '<td>'.$row['district'].'</td>';
        echo '<td>'.$row['location'].'</td>';
        echo '<td>'.$row['mobile'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        if ($row['status']== "0")
             {
           
               echo' <td><a href="adminupdateuser.php?id='.$row['email'].'&status=1">Approve</a></td>';
               echo' <td><a href="adminupdateuser.php?id='.$row['email'].'&status=-1">Reject</a></td>';
             }
     
    echo '</tr>';

      }
      ?>
   

  
    </table>  

    <br>
    <br>

    <center><h1>Approved</h1></center>

<table class="customers">
    <tr>
            
            <th>Name</th>
            <th>Address</th>
            <th>District</th>
            <th>Location</th>
            <th>Mobile</th>
            <th>Email</th>
            <th></th>
            
    </tr>
    <?php
      $s="select * from customer_reg c,login l where l.uname=c.email and l.status='1'";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['cname'].'</td>';
        echo '<td>'.$row['address'].'</td>';
        echo '<td>'.$row['district'].'</td>';
        echo '<td>'.$row['location'].'</td>';
        echo '<td>'.$row['mobile'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        if ($row['status']== "1")
             {
           
              //  echo' <td><a href="adminupdateuser.php?id='.$row['email'].'&status=1">Approve</a></td>';
               echo' <td><a href="adminupdateuser.php?id='.$row['email'].'&status=-1"> Delete </a></td>';
             }
     
    echo '</tr>';

      }
      ?>
   

  
    </table>  
    <div class="footer">
		<div class="container">
			
			<div class="footer-copy">
				<p>© 2019 Dream Home. All rights reserved | Design by <a href="http://w3layouts.com">Dream Home</a></p>
			</div>
		</div>
	</div>
