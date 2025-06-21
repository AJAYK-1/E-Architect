
<?php
session_start();
include 'connection.php';
include 'AdminPage.php';

?>

<center><h1>For Approval</h1></center>
<table class="customers">
    <tr>
            
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Image</th>
            <th></th>
            <th></th>
    </tr>
    <?php
      $s="select * from staff_reg s,login l where l.uname=s.email and l.status='0'";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['sname'].'</td>';
        echo '<td>'.$row['phone'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td><img src='.$row['photo'].' height=150px;width:150px;></td>';
        if ($row['status']== "0")
             {
           
         
               echo' <td><a href="adminupdatearchitect.php?id='.$row['email'].'&status=1">Approve</a></td>';
               
  
    
    
    
               echo' <td><a href="adminupdatearchitect.php?id='.$row['email'].'&status=-1">Reject</a></td>';
             }
     
    echo '</tr>';
      
      }
      ?>
   

  
    </table>  
    <div> </div>



    <center><h1>Approved</h1><center>

<br>
<table class="customers">
    <tr>
            
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Image</th>
            <th></th>
    </tr>
    <?php
      $s="select * from staff_reg s,login l where l.uname=s.email and l.status='1'";
      $r=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($r))
      {
        echo '<tr>';
        echo '<td>'.$row['sname'].'</td>';
        echo '<td>'.$row['phone'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td><img src='.$row['photo'].' height=100px;width:100px;></td>';
        if ($row['status']== "1")
             {
           
         
              //  echo' <td><a href="adminupdatearchitect.php?id='.$row['email'].'&status=1">Approve</a></td>';
               echo' <td><a href="adminupdatearchitect.php?id='.$row['email'].'&status=-1"> Delete </a></td>';
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
