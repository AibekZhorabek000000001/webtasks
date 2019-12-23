<?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pwd1 = $_POST['password_1'];
  $pwd2 = $_POST['password_2'];

  $mysqli = mysqli_connect("localhost", "root", "", "for project");

  $all_user_sql = "select * from users";

  $all_user_res = mysqli_query($mysqli, $all_user_sql);

  while ($info = mysqli_fetch_array($all_user_res)) {
    $db_user = $info['name'];
    if ($db_user == $username) {
      echo "<p><strong>Username $username is already registered</strong></p>";
      exit();
    }
    $db_email = $info['email'];
    if($db_email == $email){
      echo "<p><strong>Email $email is already registered or Email is empty!!!!!!!!</strong></p>";
      exit();
    }
  }
  mysqli_free_result($all_user_res);
  if ($pwd1!=$pwd2) {
    echo "Пароли не совпадают!";
  exit();
  }
  $insert_sql = "INSERT INTO users (name, email, password)
                VALUES('$username', '$email', '$pwd1')";
  $insert_res = mysqli_query($mysqli, $insert_sql) or die(mysqli_error($mysqli));
  echo "Вы удачно зарегестрированы!!!";

 ?>
