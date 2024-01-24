<html>
<head>
<style>
.header
{
height:10%;
width:100%;
bakground-color:crimson;
color:pink;
align-item:center;
}

table{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}

th{
    color: white;
    background-color: crimson;

}
tr:nth-child(odd){
   
}
td{
    text-align: center;
}

td:hover{
    background-color:purple;
}
tr:hover{
    background-color:pink;
}
button {
            padding: 10px;
            border-radius: 1rem;
            background-color:crimson;
            padding:.5rem 1rem;
            font-size: 1.8rem;
            color:black;
            border:1px solid black;
            margin:1rem 0;
        }
</style>

</head>
<body>
<div style="width:100%; height:50px; border:3x solid crimson">
     <a href="index.php" style="color:crimson; font-size:1.8rem">HOME</a>
</div>

	<table style="width:100%">
		<tr style="height:50px">
			<th>Id</th>
			<th>Name </th>
			<th>Description</th>
			<td>Edit</td>
		</tr>
		<?php
//Brand List
//Step-01 : DB Connection

include('includes/database_connection.php');

$qry = "SELECT * FROM task";
$data = mysqli_query($db_connection, $qry);
while($task_data = mysqli_fetch_assoc($data)){
$id = $task_data['id'];

?>
		<tr style="height:150px">
			<td><?php echo $task_data['id']; ?></td>
			<td><?php echo $task_data['title']; ?></td>
			<td><?php echo $task_data['description']; ?></td>
			<td>
                <button><a href="delete.php?deleteid=<?php echo $row['id'] ?>">delete</button>
                <button><a href="update.php?updateid=<?php echo $row['id'] ?>">update</button>
            </td>

		</tr>
		<?php } ?>
	</table>
</body>
</html>