<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
        }

   .box{
   border-radius: 1rem;
   background-color:white;
   padding:.5rem 1rem;
   font-size: 1.5rem;
   color:black;
   border:1px solid black;
   margin:1rem 0;
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
    <div class="container">
        <h2>Task Manager</h2>
        <form action="product_new1.php" method="post">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="enter task name" class="box" required/>
            
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" placeholder="enter description" class="box" required/>

            <button type="submit">Add Task</button>
        </form>
    </div>
</body>
</html>
