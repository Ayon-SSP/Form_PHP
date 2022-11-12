<?php 
$dbname = 'mysql_dbname'; 
if (!mysqli_connect('mysql_host', 'mysql_user', 'mysql_password')) { 
 echo 'Could not connect to mysql'; 
 exit; } 
$result = mysqli_query( "SHOW TABLES FROM $dbname")); 
if (!$result) { 
 echo "DB Error, could not list tables\n"; 
 echo 'MySQL Error: ' . mysqli_error(); 
 exit; 
} 
while ($row = mysql_fetch_row($result)) { 
 echo "Table: {$row[0]}\n"; 
} mysql_free_result($result);
 ?>
