<?php
session_start();

$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'registration');
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
}

?>
