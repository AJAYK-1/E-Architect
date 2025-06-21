<?php
session_start();
include 'connection.php';
include 'ArchitectPage.php';
$email=$_SESSION['email'];
?>
<style>
    td,th{
        padding: 10px;
    }
    
</style>
<body>

<center>
	<div>
        <form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Select New Photo</td>
                    <td><input type="file" name="txtFile"  required=""></td>
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
    
        $folder='images/';
        $file1=$folder.basename($_FILES['txtFile']['name']);
        move_uploaded_file($_FILES['txtFile']['tmp_name'],$file1);

        $sql="update staff_reg set photo='$file1' where email='$email'";
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
 