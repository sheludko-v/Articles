<?php
/**
 * article page template
 */

$out = '';

$out .= '<div>';
$out .= '<h3>' . $result['title'] . '</h3>';
$out .= '<p>' . $result['descr_min'] . '</p>';
$out .= '<img src="/static/images/' . $result['image'] . '" width=400px>';
$out .= '<p>' . $result['description'] . '</p>';
$out .= '<p><a href="#" OnClick="history.back();">Назад</a></p>';
$out .= '</div>';


echo $out;


