<?php

// getContentText - (c) Copyright 2016 by Hetfield - www.MerZ-IT-SerVice.de

function smarty_function_getContentText($params, $smarty) {
  global $main;

  $get_inactive = isset($params['get_inactive']) ? $params['get_inactive'] : true;

  $shop_content_data = $main->getContentData($params['coID'], $lang_id = '', $customers_status = '', $get_inactive);

  if (!empty($shop_content_data['content_text'])) {
    $class = (isset($params['class']) ? ' class="' . $params['class'] . '"' : '');
    return '<div' . $class . '>' . $shop_content_data['content_text'] . '</div>';
  } else {
    return false;
  }

}
