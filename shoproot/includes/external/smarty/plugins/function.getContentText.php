<?php

// getContentText - (c) Copyright 2016 by Hetfield - www.MerZ-IT-SerVice.de

function smarty_function_getContentText($params, $smarty) {
  global $main;

  if (isset($params['coID']) && $params['coID'] != '') {
    $coID = (int)$params['coID'];
    $get_inactive = isset($params['get_inactive']) ? $params['get_inactive'] : true;

    $shop_content_data = $main->getContentData($coID, $lang_id = '', $customers_status = '', $get_inactive);

    if (is_array($shop_content_data) && count($shop_content_data) > 0 && !empty($shop_content_data['content_text'])) {
      $class = (isset($params['class']) ? ' class="' . $params['class'] . '"' : '');
      if ($coID == 5){
        require_once (DIR_FS_INC . 'xtc_customer_greeting.inc.php');
        $shop_content_data['content_text'] = str_replace('{$greeting}', xtc_customer_greeting(), $shop_content_data['content_text']);
      }
      return '<div' . $class . '>' . $shop_content_data['content_text'] . '</div>';
    } else {
      return false;
    }
  } else {
    return false;
  }

}
