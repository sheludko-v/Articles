<?php
  /**
   * login page template
   */

  if (isset($_POST['submit'])) {
    $user = login($_POST['login'], $_POST['password']);
    if ($user) {
      $user = $user[0];
      $hash = md5(generateCode(10));
      $ip = null;
      if (!empty($_POST['ip'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
      }
      updateUser($user['id'], $hash, $ip);
      setcookie('id', $user['id'], time() + 60 * 60 * 24 * 30, "/");
      setcookie('hash', $hash, time() + 60 * 60 * 24 * 30, "/");
      header("Location: /admin");
      exit();
    } else {
      echo '<h3 style="color: red">Вы неправильно ввели логин или пароль!</h3>';
    }
  }
?>

<h2>Логин</h2>
<form method="POST">
    <p>Login: <input type="text" name="login" required></p>
    <p>Password: <input type="password" name="password" required></p>
    <p>Прикреплять IP: <input type="checkbox" name="ip"></p>
    <p><input type="submit" name="submit" value="Войти"></p>
</form>
