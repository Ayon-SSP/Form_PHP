<?php
echo "Welcom to the stage where we are ready to get connected to a database<br>";
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbssp1";
// $database = "for_practice2";

$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$val1 = $_POST['To_del'];


echo $val1,'<br>';

// $sql = "INSERT INTO `prac_phpform` (`name`, `phno`, `age`, `enno`) VALUES ('$val1', '$val2', '$val3', '$val4');";
$sql = "DELETE FROM `prac_phpform` WHERE `prac_phpform`.`enno` = $val1";

// returns 1 if sucess and 0 if not
$result = mysqli_query($conn, $sql);
if($result){
    echo "The record ['$val1'] has been Deleted successfully!<br>";
}
else{
    echo "The record was not successfully because of this error ---> ". mysqli_error($conn);
}
?> 
