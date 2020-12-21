<?php

// getContentTitle - (c) Copyright 2016 by Hetfield - www.MerZ-IT-SerVice.de

function smarty_function_getContentTitle($params, $smarty) {
  global $main;

  $shop_content_data = $main->getContentData($params['coID']);

  if (!empty($shop_content_data['content_title'])) {

    $class = (isset($params['class']) ? ' class="' . $params['class'] . '"' : '');
    if (isset($params['heading']) && is_numeric($params['heading']) && $params['heading'] >= 1 && $params['heading'] <= 6) {
      $headingbeginn = '<h' . $params['heading'] . $class . '>';
      $headingend = '</h' . $params['heading'] . '>';
    } else {
      $headingbeginn = '';
      $headingend = '';
    }
    return $headingbeginn . $shop_content_data['content_title'] . $headingend;
  } else {
    return false;
  }

}

?>