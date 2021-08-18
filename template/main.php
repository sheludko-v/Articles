<?php
  /**
   * main page template
   */

  $out = '';

  for ($i = 0; $i < count($result); $i++) {
    $out .= '<div class="col-sm-4 col-md-4" style="margin-bottom: 50px;">';
    $out .= '<div class="card text-center rounded myBox">';
    $out .= '<figure style="margin-top: 20px;">';
    $out .= '<img class="img-fluid myImg rounded-circle" src="/static/images/' . $result[$i]['image'] . '">';
    $out .= '</figure>';
    $out .= '<h3>' . $result[$i]['title'] . '</h3>';
    $out .= '<p>Категория: <strong>' . $result_cat[$i]['title'] . '</strong></p>';
    $out .= '<div class="card-body">';
    $out .= '<p class="card-text">' . $result[$i]['descr_min'] . '</p>';
    $out .= '<a class="btn myBtn" href="/article/' . $result[$i]['url'] . '">Читать полностью</a>';
    $out .= '</div>';
    $out .= '</div>';
    $out .= '</div>';
  }


?>

<?php
  require_once 'headers/header.php';
?>


<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="sort ml-auto">
            <form action="" method="POST">
              <?php

              ?>
                <div class="form-group">
                    <select name='select'>
                        <option value="none"></option>
                      <?php
                        $query = "SELECT title FROM category";
                        $category = select($query);
                        for ($i = 0; $i < count($category); $i++) {
                          echo '<option>' . $category[$i]['title'] . '</option>>';
                        }
                      ?>
                    </select>
                    <input type="submit" name="submit" value="Go">
                </div>
            </form>
        </div>
        <div class="card-deck">
          <?php echo $out; ?>
        </div>
    </div>
</div>


<?php
  require_once 'footer.php';
?>
