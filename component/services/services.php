<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 12/22/2016
 * Time: 10:34 PM
 */

include_once(dirname(__FILE__). "/model/services.controller.php");
global $PARAM;
$servicesController = new servicesController();
if(isset($exportType))
{
    $servicesController->exportType=$exportType;
}
if(isset($PARAM[1]))
{
    $servicesController->showList($PARAM[1]);
    die();
}
if(isset($PARAM[2]))
{
    $servicesController->showMore($PARAM[2]);
    die();
}else
{
    //$fields['filter']['title']='sdf';
    $fields['limit']['start']=(isset($page))?($page-1)*PAGE_SIZE:'0';
    $fields['limit']['length']=PAGE_SIZE;
  $fields['order']['title']='DESC';
   // print_r_debug($fields);
    $servicesController->showALL($fields);
    die();
}