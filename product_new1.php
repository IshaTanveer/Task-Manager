<?php
include('includes/database_connection.php');

$title = $_POST['title'];
$description = $_POST['description'];

$save = "INSERT INTO task (title, description)
 VALUES ('$title', '$description')";

$result = mysqli_query($db_connection, $save);
if($result){
header('location:product_list.php');
}

else{
ECHO "ERROR ___".mysqli_error($db_connection);
}

?>