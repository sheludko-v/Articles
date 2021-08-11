<?php
  /**
   * admin page template
   */

  if (!getUser()) {
    header("Location: /login");
  }
  $out = '';
  for ($i = 0; $i < count($result); $i++) {
    $out .= '<div>';
    $out .= '<p>' . $result[$i]['title'] . '</p>';
    $out .= '<img src="/static/images/' . $result[$i]['image'] . '" width=100>';
    $out .= '<p><a href="/admin/update/' . $result[$i]['id'] . '">Обновить</a></p>';
    $out .= '<p><a href="/admin/delete/' . $result[$i]['id'] . '" onclick="return confirm(\'Точно???\')">Удалить</a></p>';
    $out .= '</div>';
  }

?>
    <h1>Админ панель</h1>
    <div><a href="/admin/create">Создать</a></div>
    <div><a href="/logout">Выйти</a></div>
<?php
  echo $out;
