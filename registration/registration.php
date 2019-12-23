<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <style media="screen">
  * {
    margin: 0px;
    padding: 0px;
  }
  body {
    font-size: 120%;
  }

  .header {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 12px;
  }
  .input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
  }
  .error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
  }
  .success {
    color: #3c763d;
    background: #dff0d8;
    border: 1px solid #3c763d;
    margin-bottom: 20px;
  }

  </style>
</head>
<body>
  <div class="header">
  	<h2>Регистрация</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Ваше имя:</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль:</label>
  	  <input id = "pwd1" type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Повторите ваш пароль:</label>
  	  <input id = "pwd2" type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button onclick="toCompare()" type="submit" class="btn" name="reg_user">Зарегистрироваться</button>
  	</div>
    <p class="demo"></p>
  	<p>
  		Давно уже зарегались? Тогда перейдите по этой ссылке <a href="login.php">Sign in</a>
  	</p>
  </form>
  <script>
    function toCompare(){
      if (document.getElementsById("pwd1") != document.getElementById("pwd2")) {
      document.getElementsByClassName('demo').innerHTML = "Пароли не совпадают!!!";
      }
    }

    document.getElementById("pwd1").addEventListener("click", toCompare);
  </script>
</body>
</html>
