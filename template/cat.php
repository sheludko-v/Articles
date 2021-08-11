<?php
  /**
   * category page template
   */

  $out = '';

  $out .= '<div>';
  $out .= '<h2>Категория: ' . $cat['title'] . '</h2>';
  $out .= '<p>' . $cat['description'] . '</p>';
  $out .= '</div>';

  echo $out;

  $out = '';

  for ($i = 0; $i < count($result); $i++) {
    $out .= '<div>';
    $out .= '<h3>' . $result[$i]['title'] . '</h3>';
    $out .= '<p>' . $result[$i]['descr_min'] . '</p>';
    $out .= '<img src="/static/images/' . $result[$i]['image'] . '" width=300px>';
    $out .= '<div><a href="/article/' . $result[$i]['url'] . '">Читать полностью</a></div>';
    $out .= '</div>';
  }
  echo $out;