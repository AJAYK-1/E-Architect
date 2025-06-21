<?php

session_start();
include 'connection.php';
include 'CustomerPage.php';
?>

<style>

td,th{
        padding: 10px;
        }
.mainCon
{
    width: 90%;
    display:flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
a{
    margin: 10px;
    
}
a .content{
    margin:10px;
    padding:20px;
    max-width: 10rem;
    box-shadow: 5px,5px,5px,5px;
} 
.row{
    display:flex;
    padding: 10px;
    justify-content:center;
    align-items:center;
    border-radius:25px;
}
img{
    border-radius:50%;
}

</style>

<center><hr><h1>Architects</h1><hr></center>


<div class="container-fluid mainCon">
    
        <?php

        $q="select * from staff_reg";
        $s= mysqli_query($conn,$q);
        $lo="select * from login";
        $z= mysqli_query($conn,$lo);

        while ($r= mysqli_fetch_array($s))
        {
            $row= mysqli_fetch_assoc($z); 
            

                        
                            if($row["status"]==1)
                            {
                            echo "
                            <div class='content card'>
                            <div class='row'><img src='$r[photo]' height='150px' width='150px'></div>
                            <h2><center>  $r[sname]</center></h2>
                            <div>
                            <a href='CustomerRequestCustomizedPlan.php?id=".$r['sid']."'><center> Request plan </center></a></div>
                            
                            <a href='Customerviewarchitecthistory.php?id=".$r['sid']."'><center> View History </center></a>
                            </div>
                            "; 
                            }
                        
                    
            
        }
        ?>
        
</div>
<div class="footer">
		<div class="container">
			
			<div class="footer-copy">
				<p>© 2019 Dream Home. All rights reserved | Design by <a href="http://w3layouts.com">Dream Home</a></p>
			</div>
		</div>
	</div>



