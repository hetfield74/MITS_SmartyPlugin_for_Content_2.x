<?php

// getContentTitle - (c) Copyright 2016 by Hetfield - www.MerZ-IT-SerVice.de

function smarty_function_getContentTitle($params, $smarty)
{
    if (isset($params['coID']) && $params['coID'] != '') {
        $coID = (int)$params['coID'];
        $get_inactive = isset($params['get_inactive']) ? $params['get_inactive'] : true;
        $language_id = !empty($language_id) ? $language_id : $_SESSION['languages_id'];
        $add_select = isset($params['add_select']) ? $params['add_select'] : '';
        $customers_status = isset($params['customers_status']) && $params['customers_status'] != '' ? $params['customers_status'] : $_SESSION['customers_status']['customers_status_id'];
        $group_check = (defined('GROUP_CHECK') && GROUP_CHECK == 'true') ? "AND group_ids LIKE '%c_" . (int)$customers_status . "_group%'" : '';
        $where = $get_inactive === true ? '' : " AND content_active = '1'";

        $mits_content_data_query = xtDBquery("SELECT " . $add_select . "
                                              content_id,
                                              content_title,
                                              content_heading
                                         FROM " . TABLE_CONTENT_MANAGER . "
                                        WHERE content_group='" . (int)$coID . "'
                                              " . $group_check . "
                                              " . $where . "
                                          AND trim(content_title) != ''
                                          AND languages_id='" . (int)$language_id . "'
                                        LIMIT 1");
        if (xtc_db_num_rows($mits_content_data_query, true) > 0) {
            $mits_shop_content_data = xtc_db_fetch_array($mits_content_data_query, true);
        }

        if (is_array($mits_shop_content_data) && count($mits_shop_content_data) > 0 && !empty($mits_shop_content_data['content_title'])) {
            $class = (isset($params['class']) ? ' class="' . $params['class'] . '"' : '');
            if (isset($params['heading']) && is_numeric($params['heading']) && $params['heading'] >= 1 && $params['heading'] <= 6) {
                $headingbeginn = '<h' . $params['heading'] . $class . '>';
                $headingend = '</h' . $params['heading'] . '>';
            } else {
                $headingbeginn = '';
                $headingend = '';
            }
            return $headingbeginn . $mits_shop_content_data['content_title'] . $headingend;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
