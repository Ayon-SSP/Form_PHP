<?php
    echo "Welcom to the stage where we are ready to get connected to a database<br>";
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbssp1";
    // $database = "for_practice2";

    $conn = mysqli_connect($servername, $username, $password,$database);
    if (!$conn) {
        die("Sorry we failed to connect: ". mysqli_connect_error());
    } else {
        echo "Connection was successful<br>";
    }

    $val1 = $_POST['userName'];
    $val2 = $_POST['userPhoneno'];
    $val3 = $_POST['userNum'];
    $val4 = $_POST['userEN'];

    echo $val1,'<br>';
    echo $val2,'<br>';
    echo $val3,'<br>';
    echo $val4,'<br>';

    $sql = "INSERT INTO `prac_phpform` (`name`, `phno`, `age`, `enno`) VALUES ('$val1', '$val2', '$val3', '$val4');";

    // returns 1 if sucess and 0 if not
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "The record has been inserted successfully!<br>";
    } else {
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
?> 
