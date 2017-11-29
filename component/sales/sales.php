<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 10:34 PM
 */

include_once(dirname(__FILE__). "/model/sales.controller.php");
global $PARAM;
$salesController = new salesController();
if(isset($exportType))
{
    $salesController->exportType=$exportType;
}
/*if(isset($PARAM[1]))
{
    $salesController->showMore($PARAM[1]);
    die();
}else
{*/
    //$fields['filter']['title']='sdf';
    $fields['limit']['start']=(isset($page))?($page-1)*PAGE_SIZE:'0';
    $fields['limit']['length']=PAGE_SIZE;
    $fields['order']['Sales_id']='DESC';
    $salesController->showALL($fields);
    die();
//}