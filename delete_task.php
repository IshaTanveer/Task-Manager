<?php

session_start();

if (!isset($_SESSION['username'])) 
{
    header('location: login.php');
    exit();
}

include('includes/database_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_task_id'])) 
{
    $delete_task_id = $_POST['delete_task_id'];

    header('location: registeration.php');
    exit();
}
header('location: registeration.php');

exit();
?>
