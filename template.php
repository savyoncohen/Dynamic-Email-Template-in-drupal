<?php 
function my_theme_css_alter(&$css) {
  $item = menu_get_item();
  if ($item['path'] != 'my-hook-menu/%') {
    return;
  }

  $css = array();
}
