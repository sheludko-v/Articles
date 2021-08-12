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

<?php
  require_once 'headers/header_log.php';
?>

<div class="container" style="margin-top: 80px;">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center">
            <h2>Вход в личный кабинет</h2>
            <form method="POST" style="margin-top: 20px;">
                <div class="form-group">
                    <p><input type="text" name="login" placeholder="Логин" required></p>
                    <p><input type="password" name="password" placeholder="Пароль" required></p>
                    <p>Привязка к IP  <input type="checkbox" name="ip"></p>
                    <p><input class="btn myBtn" type="submit" name="submit" value="Войти"></p>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?php
  require_once 'footer.php';
?>