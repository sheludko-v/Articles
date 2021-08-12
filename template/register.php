<?php
  /**
   * register page template
   */

  if (isset($_POST['submit'])) {
    $err = [];
    if (strlen($_POST['login']) < 4 || strlen($_POST['login']) > 30) {
      $err[] = "Логин должен быть не меньше 4 и не больше 30 символов!";
    }
    if (isLoginExist($_POST['login'])) {
      $err[] = "Логин существует!";
    }
    if (count($err) === 0) {
      createUser($_POST['login'], $_POST['password'], $_POST['fio']);
      header('Location: /login');
      exit();
    } else {
      echo '<h4>Ошибки регистрации</h4>';
      foreach ($err as $error) {
        echo $error . '<br>';
      }
    }
  }

?>

<?php
  require_once 'headers/header_reg.php';
?>

<div class="container" style="margin-top: 80px;">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center">
            <h2>Регистрация нового пользователя</h2>
            <form method="POST" style="margin-top: 20px;">
                <div class="form-group">
                    <p><input type="text" name="fio" placeholder="Ф.И.О." required></p>
                    <p><input type="text" name="login" placeholder="Логин" required></p>
                    <p><input type="password" name="password" placeholder="Пароль" required></p>
                    <p><input class="btn myBtn" type="submit" name="submit" value="Регистрация"></p>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?php
  require_once 'footer.php';
?>



