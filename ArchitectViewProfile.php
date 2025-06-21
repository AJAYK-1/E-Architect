<?php
session_start();
include 'connection.php';
include 'ArchitectPage.php';
$email=$_SESSION['email'];
$q="select * from staff_reg where email='$email'";
$s= mysqli_query($conn, $q);
$r= mysqli_fetch_array($s);
?>
<style>
    td,th{
        padding: 10px;
    }
    
</style>
<body>

<center>
	<div>
	<img src="<?php echo $r['photo']; ?>" height="150px" width="150px" style="border-radius:70px;"> 

	<br>
	<a href="updateprofilepic.php?id=<?php echo $email; ?>">Update profile picture</a>
	<br>
        <form method="POST">
		<table>
			<tr>
				<td> Name</td>
                                <td><input type="text" name="sname" value="<?php echo $r['sname']; ?>" class="form-control" required=""></td>
			</tr>
			<tr>
			<tr>
				<td>Email</td>
                                <td><input type="email" name="email" value="<?php echo $r['email']; ?>" readonly="" class="form-control" required=""></textarea></td>
			</tr>
			
			<tr>
				<td>Phone no</td>
				<td><input type="text" name="phone" value="<?php echo $r['phone']; ?>" pattern="[6789][0-9]{9}" class="form-control" required=""></td>
			</tr>
                       
			<tr>
                            <td colspan="2"><center><input type="submit" class="btn btn-dark" name="submit" value="Update"></center></td>
			</tr>
		</table>
             
	</form>
	</div>
</center>
        

	<?php
	if(isset($_POST['submit']))
	{
        $nm=$_POST['sname'];
        
        $pno=$_POST['phone'];
     
        
        
        $sql="update staff_reg set sname='$nm',phone='$pno' where email='$email'";
        $s= mysqli_query($conn, $sql);
        if($s)
        	{
                    
        	
                        echo '<script>alert("Updation successful")</script>';
                        echo '<script>location.href="ArchitectHome.php"</script>';
        	}
        	else
        	{
                echo '<script>alert("Sorry some error occured")</script>';
        	}

    
    }
    ?>
 