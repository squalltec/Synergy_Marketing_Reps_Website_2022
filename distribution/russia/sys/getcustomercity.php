<?php

include("db_connection.php");

$comp1=$_POST['compyy1'];
		
$sqllas = "SELECT * FROM local_company WHERE companyname='$comp1'";
 
 
 
 
 $result=$conn->query($sqllas);
 $data = array();



while($row=mysqli_fetch_assoc($result)){
    
    
    echo $row['city'];
   
    
     
}

?>