<?php
  if (isset($_POST)) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['file'];


    $conn = new mysqli('localhost', 'root', '', 'for project');
    $sql = "INSERT INTO 'products' (name, description, file) VALUES($name, $description, $image)";
  }



 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="create_item.php" method="post">
      Name: <input type="text" name="name" value=""><br>
      Description: <input type="text" name="description" value=""><br>
      Image: <input type="file" name="file" value=""><br>
      <input type="submit" name="submit" value="Save">
    </form>
    <?php
      echo $name . " " . $description . " " . $image ;
     ?>
  </body>
  <style media="screen">
    form{
      position: relative;
      text-align: center;
      margin-top: 50px;
    }
    input{
      margin:5px;

    }
  </style>
</html>






<?php


 ?>
