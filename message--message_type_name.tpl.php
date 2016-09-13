<?php
foreach ($content['message'] as $mid => $content_array) {
  print my_module_render_message($mid);
}
