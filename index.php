<?php

require 'config.php';

if(isset($_POST["submit"])){

    $todo = $_POST["todo"];

    $insert = mysqli_query($con,"INSERT INTO phpintern.list(todo) VALUES ('$todo') ");
    echo
    "<script>alert('success')</script>";
    header('location:index.php');
    exit();
    
}

$task = mysqli_query($con,"SELECT * FROM phpintern.list ");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #todo-container {
            max-width: 400px;
            margin: 50px auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #todo-form {
            display: flex;
            margin-bottom: 20px;
        }

        #todo-input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 8px;
        }

        #todo-btn {
            padding: 8px 16px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #todo-list {
            list-style-type: none;
            padding: 0;
        }

        .todo-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 8px;
        }

        .todo-item span {
            flex: 1;
        }

        .todo-item button {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 4px 8px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div id="todo-container">
        <form id="todo-form" method="post">
            <input type="text" name ="todo" id="todo-input" placeholder="Add a new task" />
            <button type="submit" name="submit" id="todo-btn">Add</button>
        </form>

        <ul id="todo-list">
            <!-- Todo items will go here -->
        </ul>
    </div>


    <div id="todo-container">

    <table class="table table-striped table-responsive-md">
                        <thead>
                            <tr>
                                <th>To Do list</th>
                              
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($task)){ ?>


                           
                            <tr >
                                <td><?php echo $row['todo']; ?></td>
                            
                                <td>
                                    
                                      <a href="update.php? ID= <?php echo $row['id'] ?>">                          
                                        <button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                    
                                </td>
                                <td>
                                     <a href="delete.php? ID= <?php echo $row['id'] ?>"> 
                                     <button type="button" name="d" class="btn btn-primary btn-sm">Delete</button></a>
                                  
                                </td>
                            </tr>
                       <?php } ?>
                        </tbody>
                    </table>

    

    </div>

</body>
</html>
