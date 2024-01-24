<?php

session_start();

if (!isset($_SESSION['username'])) 
{
    header('location: login.php');
    exit();
}

include('includes/database_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_task_id'])) 
{
    $update_task_id = $_POST['update_task_id'];
    $updated_title = $_POST['updated_title'];
    $updated_description = $_POST['updated_description'];

    $update_query = "UPDATE tasks SET title='$updated_title', description='$updated_description' WHERE id='$update_task_id'";
    
    header('location: registeration.php');
    exit();
}
header('location: registeration.php');

exit();
?>
