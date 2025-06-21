<?php
include 'connection.php';
$sid=$_GET["id"];
echo $sid;

$sql = "select * from subcategory where catid ='$sid'"; 
$result = mysqli_query($conn,$sql);
echo "<option value=''>Select Subcategory</option>";
while($row = mysqli_fetch_array($result))
{
    echo "<option value='".$row[0]."'>".$row['subname']."</option>";
  
}
?>
