<?php
require 'config.php';

$id =$_GET['ID'];

$new = mysqli_query($con,"SELECT * FROM phpintern.list WHERE  id= $id");
$data = mysqli_fetch_array($new);



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
        <form action="updated.php" method="post">
            
        

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
                        <td>
                                    
                        <label for="update"><b>Update</b></label>
    <input type="text" name="todo" value="<?php echo $data['todo'] ?>" id="update" required>  
    <button name="ID" type="submit" value="<?php echo $data['id'] ?>" class="registerbtn">update</button>
  
                                  
                              </td>
                              </tbody>
                    </table>

    </form>

    </div>

</body>
</html>
