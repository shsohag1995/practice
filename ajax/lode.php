<?php

include("dbconfig.php");

$sql="SELECT* FROM user";

$data=mysqli_query($connect,$sql);
 
echo "<table><tr><th>Id</th><th>Name</th><th>Email</th><th>Contact</th></tr>";

if(mysqli_num_rows($data) > 0){
          while ($row=mysqli_fetch_assoc($data)) {
          	//echo "<tr><th>".$row['id']."</th><th>".$row['name']."</th><th>".$row['email']."</th><th>".$row['contact']."</th></tr>";
          	echo "<tr><th>$row[id]</th><th>$row[name]</th><th>.$row[email]</th><th>$row[contact]</th></tr>";
          }
         echo "</table>";
}else{
	
	echo"No data found";
}


?>