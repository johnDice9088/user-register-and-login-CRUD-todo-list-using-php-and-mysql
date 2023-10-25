<?php
require 'config.php';
 $todo =$_POST['todo'];
 $id =$_POST['ID'];
 mysqli_query($con,"UPDATE phpintern.list SET todo='$todo',id='$id' WHERE id= $id");
header("location:index.php?delete=success");
