<?php
require 'config.php';

echo $id =$_GET['ID'];

mysqli_query($con,"DELETE FROM phpintern.list WHERE id= $id");
header("location:index.php?delete=success");


?>