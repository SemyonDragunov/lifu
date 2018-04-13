<?php

/**
 * @author Semyon Dragunov <sam.dragunov@gmail.com>
 * https://github.com/SemyonDragunov
 */

$info = array();

$info['fields'] = array(
  'main_color' => 'Основной цвет',
  'text' => '',
  'link' => '',
  'blend_target' => '',
  'base' => '',
  'palette' => '',
);

$info['schemes'] = array(
  'default' => array(
    'title' => 'По-умолчанию',
    'colors' => array(
      'main_color' => '#fc9a00',
    ),
  ),
);

$info['css'] = array('color/color.css');

/**
 * Настройки ниже - пустышки. Они нужны модулю color, даже если мы их не
 * используем в своей теме.
 */

$info['copy'] = array();
$info['preview_css'] = 'color/preview.css';
$info['preview_js'] = 'color/preview.js';
$info['preview_html'] = 'color/preview.html';
$info['gradients'] = array();
$info['fill'] = array();
$info['slices'] = array();
$info['base_image'] = 'color/base.png';