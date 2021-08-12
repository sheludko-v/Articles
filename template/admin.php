<?php
  /**
   * admin page template
   */

  if (!getUser()) {
    header("Location: /login");
  }
  $out = '';
  for ($i = 0; $i < count($result); $i++) {
    $out .= '<div class="col-sm-4 col-md-4" style="margin-bottom: 50px;">';
    $out .= '<div class="card text-center rounded">';
    $out .= '<figure style="margin-top: 20px;">';
    $out .= '<img class="img-fluid myImg rounded-circle" src="/static/images/' . $result[$i]['image'] . '">';
    $out .= '</figure>';
    $out .= '<div class="card-body">';
    $out .= '<h4 class="card-text" style="margin-bottom: 20px;">' . $result[$i]['title'] . '</h4>';
    $out .= '<p><a class="btn myBtn" href="/admin/update/' . $result[$i]['id'] . '">Обновить</a></p>';
    $out .= '<p><a class="btn myBtn" href="/admin/delete/' . $result[$i]['id'] . '" onclick="return confirm(\'Вы уверены?\')">Удалить</a></p>';
    $out .= '</div>';
    $out .= '</div>';
    $out .= '</div>';
  }

?>

<?php
  require_once 'headers/header_admin.php';
?>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 style="margin-bottom: 50px;">Личный кабинет</h2>
            <div class="card-deck">
              <?php echo $out; ?>
            </div>
        </div>
    </div>
</div>


<?php
  require_once 'footer.php';
?>





